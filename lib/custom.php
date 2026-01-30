<?php
require_once "../config.php"; 
?>
/**
 * Afisare mesaj tip toast folosind datele furnizate.
 * 
 * @param tip_toaster - culorile primare mdb: primary, secondary, success, info, warning, danger, light, black
 * @param durata_toaster - durata care va fi afisat in ms
 * @param titlu_toaster - titlul toast-ului
 * @param text_toaster - textul toast-ului
 * @param iconita - clasa din i-ul de iconita. exemplu: fas fa-check
 * @returns - elementul toast
 */

function afiseaza_toaster(tip_toaster = "primary", durata_toaster = "10000", titlu_toaster = "Titlu toaster", text_toaster = "Mesaj toaster", iconita = "") {
    const toast = document.createElement('div');
    const toastHeader = document.createElement('div');
    toastHeader.classList.add("toast-header");
    const toastHeaderTitlu = document.createElement('strong');
    toastHeaderTitlu.classList.add("me-auto");
    toastHeaderTitlu.innerHTML = titlu_toaster;
    toastHeader.appendChild(toastHeaderTitlu);
    const toastHeaderTimp = document.createElement('small');
    afisare_countdown(toastHeaderTimp, parseInt(durata_toaster));
    toastHeader.appendChild(toastHeaderTimp);
    const toastHeaderButton = document.createElement('button');
    toastHeaderButton.classList.add("btn-close");
    toastHeaderButton.setAttribute("type", "button");
    toastHeaderButton.setAttribute("data-mdb-dismiss", "toast");
    toastHeaderButton.setAttribute("aria-label", "Închide");
    toastHeader.appendChild(toastHeaderButton);
    const toastBody = document.createElement('div');
    toastBody.classList.add("toast-body");
    toastBody.classList.add("row");
    if (iconita.length) {
        const bodyIcon = document.createElement('div');
        bodyIcon.classList.add("col-2");
        const iconEl = document.createElement('i');
        iconEl.setAttribute("class", `${iconita} fa-3x`)
        bodyIcon.appendChild(iconEl);
        toastBody.appendChild(bodyIcon);
    }
    const bodyText = document.createElement('div');
    bodyText.classList.add("col-10");
    bodyText.innerHTML = text_toaster;
    toastBody.appendChild(bodyText);
    toast.appendChild(toastHeader);
    toast.appendChild(toastBody);
    toast.classList.add('toast', 'fade');
    document.body.appendChild(toast);
    const toastInstance = new mdb.Toast(toast, {
        stacking: true,
        hidden: true,
        position: 'bottom-right',
        autohide: true,
        delay: parseInt(durata_toaster),
        color: tip_toaster,
        width: "350px"
    });
    toastInstance.show();
    toast.addEventListener('hidden.mdb.toast', () => {
        toast.remove();
    });
    return toast;
}
/**
 * Ascunde toate toast-urile deschise
 */
function clear_toasts() {
    const toasts = document.querySelectorAll(".toast");
    toasts.forEach((el) => {
        instance = mdb.Toast.getInstance(el);
        instance.hide();
    });
}



/**
 * Rulare ajax folosind datele furnizate.
 * 
 * @param url - URL-ul apelat de ajax
 * @param parametriiPost - parametrii folositi de ajax la apelare, ex: {"uid": 3, "nr": 5}
 * @param functie - functia care se ruleaza on success cu parametrul json
 * @returns - null
 */
function runAjax(url, parametriiPost, functie) {

    $.ajax(url, {
        dataType: "text",
        type: 'POST',
        data: parametriiPost,
        error: function(jqXhr, textStatus, errorMessage) {
            afiseaza_toaster(`danger`, 20000, `Eroare preluare date`, `A fost detectata o eroare in procesul de trimitere a datelor catre server.<br>Detalii eroare: ${errorMessage}`, `fas fa-times-circle`);
        },
        success: function(data) {
            try {
                let json = JSON.parse(data);
                if (typeof json['error'] !== 'undefined' || typeof json['errorStr'] !== 'undefined') {
                    if (json['error'] == 1) {
                        afiseaza_toaster(`danger`, 20000, `Eroare`, json['errorStr'], `fas fa-times-circle`);
                    } else {
                        if (json['error'] == 2) {
                            afiseaza_toaster(`warning`, 20000, `Avertisment`, json['errorStr'], `fas fa-exclamation-triangle`);
                        } else {

                            if (typeof functie == "function") {
                                functie(json);
                            } else {
                                afiseaza_toaster(`danger`, 20000, `Eroare`, `Parametru functie este gresit!`, `fas fa-times-circle`);
                            }

                        }
                    }
                } else {
                    afiseaza_toaster(`danger`, 20000, `Eroare procesare date`, `Datele primite de la server sunt incomplete.`, `fas fa-times-circle`);
                }
            } catch (e) {
                afiseaza_toaster(`danger`, 20000, `Eroare trimitere date`, `A fost detectata o eroare in procesul de preluare a datelor de la server. <br>Detalii eroare: ${e.message}`, `fas fa-times-circle`);
                console.error("Date brute ajax: " + data);
            }
        }
    });
}

/**
 * Funcție care realizează o cerere HTTP de tip POST către un URL specificat, cu parametrii specificați, fișiere și o funcție callback pentru a prelucra răspunsul primit de la server.
 * Dacă serverul returnează o eroare, funcția afișează un mesaj de eroare utilizatorului prin intermediul altei funcții "afiseaza_toaster".
 * Dacă răspunsul este un obiect JSON valid, funcția verifică dacă există proprietățile "error" și "errorStr" și afișează un mesaj de eroare sau avertizare în funcție de valoarea acestor proprietăți.
 * Dacă răspunsul este valid, funcția apelată în callback este apelată cu răspunsul ca parametru.
 * EXEMPLU:
 * const multiFileInput = document.querySelector('#multiFileInput');
 * const selectedMultiFiles = Array.from(multiFileInput.files);
 * const files = {multiFiles: selectedMultiFiles};
 * runFetch('your-php-url.php', parametriiPost, yourCallbackFunction, files);
 * 
 * @param {string} url - URL-ul către care se face cererea HTTP
 * @param {Object} parametriiPost - obiectul care conține parametrii care vor fi trimiși prin metoda POST
 * @param {function} functie - funcția care va fi apelată în cazul în care răspunsul este valid și nu conține erori
 * @param {Object} files - obiectul care conține numele câmpurilor de încărcare a fișierelor și fișierele corespunzătoare (opțional)
 */
let activeFetch = {};
async function runFetch(url, parametriiPost, functie, files = {}) {

    // Check if there is an ongoing fetch request for the same URL
    if (activeFetch[url]) {
        activeFetch[url].abort();
    }

    // Create a new signal object
    const signal = new AbortController();

    // Store the new fetch request in the activeFetch object
    activeFetch[url] = signal;

    let formData = new FormData();
    Object.keys(parametriiPost).forEach((key) => {
        formData.append(key, parametriiPost[key]);
    })

    // Append the files to the formData object
    Object.keys(files).forEach((key) => {
        if (files[key] instanceof File) {
            formData.append(key, files[key]);
        } else if (Array.isArray(files[key])) {
            files[key].forEach((file, index) => {
                if (file instanceof File) {
                    formData.append(`${key}[${index}]`, file);
                }
            });
        }
    });

    fetch(url, {
        method: 'POST',
        body: formData,
        signal: signal.signal
    })
    .then(response => {
        if (!response.ok) {
            throw new Error(response.statusText);
        }
        return response.text();
    })
    .then(data => {
        try {
            let json = JSON.parse(data);
            if (typeof json['error'] !== 'undefined' || typeof json['errorStr'] !== 'undefined') {
                if (json['error'] == 1) {
                    afiseaza_toaster(`danger`, 20000, `Eroare`, json['errorStr'], `fas fa-times-circle`);
                } else {
                    if (json['error'] == 2) {
                        afiseaza_toaster(`warning`, 20000, `Avertisment`, json['errorStr'], `fas fa-exclamation-triangle`);
                    } else {
                        if (typeof functie == "function") {
                            functie(json);
                        } else {
                            afiseaza_toaster(`danger`, 20000, `Eroare`, `Parametru functie este gresit!`, `fas fa-times-circle`);
                        }
                    }
                }
            } else {
                afiseaza_toaster(`danger`, 20000, `Eroare procesare date`, `Datele primite de la server sunt incomplete.`, `fas fa-times-circle`);
            }
        } catch (e) {
            afiseaza_toaster(`danger`, 20000, `Eroare trimitere date`, `A fost detectata o eroare in procesul de preluare a datelor de la server. <br>Detalii eroare: ${e.message}`, `fas fa-times-circle`);
            console.error("Date brute ajax: " + data);
        }
        // Remove the finished fetch request from the activeFetch object
        delete activeFetch[url];
    })
    .catch(error => {
        if (error.name === 'AbortError') {
            console.log(`Request was aborted for url: ${url}`);
          } else {
            afiseaza_toaster(`danger`, 20000, `Eroare preluare date`, `A fost detectata o eroare in procesul de trimitere a datelor catre server.<br>Detalii eroare: ${error.message}`, `fas fa-times-circle`);
          }
          delete activeFetch[url];
    });
}



/**
 * createModal creează un modal nou cu opțiunile specificate și rulează o funcție de callback opțională când modalul a fost inițializat.
 * 
 * @param {Object} options - Un obiect care conține perechi cheie/valoare ale opțiunilor modalului. Opțiunile implicite vor fi utilizate dacă nu sunt furnizate.
 * @param {function} funcInitComplete - O funcție de callback opțională care va fi executată când modalul a fost inițializat.
 * 
 * @returns {void}
 */
function createModal(options = {}, funcInitComplete = null) {
    let defaultOptions = {
        id: `dynamicModal${Date.now()}`,
        title: "Titlu Modal",
        size: "", // modal-sm, modal-lg, modal-xl, modal-fullscreen
        body: `...`,
        buttons: `<button type="button" class="btn btn-primary">Salvează</button>`,
    };

    // Replace default options with provided ones
    Object.keys(options).forEach((key) => {
        defaultOptions[key] = options[key];
    })

    // Get the modal HTML as a string
    var modalHTML = `
<div class="modal top fade" id="${defaultOptions.id}" tabindex="-1" aria-labelledby="${defaultOptions.id}Label" aria-hidden="true" data-mdb-backdrop="static" data-mdb-keyboard="false">
  <div class="modal-dialog ${defaultOptions.size} modal-dialog-center">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="${defaultOptions.id}Label">${defaultOptions.title}</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">${defaultOptions.body}</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
          Închide
        </button>
        ${defaultOptions.buttons}
      </div>
    </div>
  </div>
</div>
`;

    // Create a new element from the HTML string
    var modalElement = new DOMParser().parseFromString(modalHTML, "text/html").querySelector(`#${defaultOptions.id}`);

    // Append the modal to the body
    document.body.prepend(modalElement);

    // Show the modal
    const modal = new mdb.Modal(modalElement);

    // RULARE FUNCTII CUSTOM ↓↓↓
    if (funcInitComplete && (typeof funcInitComplete == "function")) {
        funcInitComplete();
    }
    // RULARE FUNCTII CUSTOM ↑↑↑

    modal.show();

    // Listen for the modal's "hidden" event
    modalElement.addEventListener("hidden.bs.modal", function(event) {
        modal.dispose();
        modalElement.remove();
    });
}
