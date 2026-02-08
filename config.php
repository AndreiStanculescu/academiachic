<?php
session_start(); 

// // Database credentials.
// define('DB_SERVER', 'mysql'); // numele serviciului MySQL din docker-compose
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', 'root');
// define('DB_NAME', 'dev');

// // Attempt to connect to MySQL database 
// $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// // Check connection
// if ($link === false or !$link) {
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// } else {
//     //echo "Conectare reusita la MySQL!";
// }

$firma = "template";
$cui = "template";

$mail_contact = "contact@academiachic.com";
$phone_contact = "+40 733 524 408";
$logo = "assets/logo.png";

//Pagini text
$culoareBody = "#fcd9f7";
$culoareH1 = "black";
$culoareLabel = "black";

// Header / footer
$culoarePrincipala = "#222";
$culoareSecundara = "#c22cba";





// Translations
$translations = [
    'ro' => [
        //general 
        'nume_aplicatie' =>  "Academia Chic",
        // header
        'titlu-acasa' => 'Acasa',
        'titlu-despre' => 'Despre noi',
        'cursuri-franceza' => 'Cursuri franceză',
        'franceza-medicala' => 'Franceză medicală',
        'franceza-business' => 'Franceză business',
        'franceza-generala' => 'Franceză generală',
        'pregatire-examene-fr' => 'Pregătire examene DELF/DALF',
        'cursuri-romana' => 'Cursuri română pentru străini',
        'romana-medicala' => 'Română medicală',
        'romana-business' => 'Română business',
        'romana-generala' => 'Română generală',
        'pregatire-examene-ro' => 'Pregătire examene (A1–C2)',
        'durata-si-formatul-cursurilor' => 'Durata și formatul cursurilor – flexibilitate totală',
        'contact' => 'Contact',
        'login' => 'Logare',
        // footer
        'testimoniale' => 'Testimoniale',
        'politica' => 'Politica de confidențialitate',
        'cookies' => 'Politica de cookie-uri',
        'termeni' => 'Termeni și condiții',
        'drepturi' => 'Toate drepturile rezervate.',
        'retele-sociale' => 'Rețele sociale',

        // index
        'titlu-cursuri' => "Trăiește experiența Academia Chic",
        'text-cursuri' => 'Text cursuri ro',
        'titlu-blog' => 'Blog',
        'text-blog' => 'Text blog ro',
        // despre_noi
        'text-despre' => '
<p>Misiunea noastră este să vă însoțim în procesul de învățare a limbii franceze și a limbii române, prin intermediul unei echipe de profesori înalt calificați și pasionați de transmiterea limbilor străine.</p><br>
<p>Reunim profesori a căror experiență acoperă o gamă largă de domenii – limbaj medical, limbaj business și limbaj general – pentru a răspunde nevoilor variate ale cursanților, fie că este vorba despre profesioniști, studenți, expați sau persoane dornice să-și dezvolte competențele lingvistice.</p><br>
<p>Echipa noastră are experiență în predarea limbii române ca limbă străină în cadrul unor organizații internaționale, lucrând cu cursanți din medii culturale diverse. Această experiență internațională le-a permis să dezvolte o pedagogie interculturală, adaptabilă și profund umană.</p><br>
<p>Profesorii noștri specializați în limbajul medical francez dispun de o solidă expertiză dobândită în special între anii 2010 și 2018, perioadă în care cererea de formare în limba franceză medicală a crescut considerabil, ca urmare a plecării unui număr mare de medici români în Franța și Belgia. Ei stăpânesc nu doar vocabularul de specialitate, ci și realitățile sistemului medical francofon, oferind astfel un proces de învățare autentic, concret și imediat util.</p><br>
<p>Profesorii noștri au, de asemenea, o solidă experiență în predarea limbajului medical în limba română, pe care l-au transmis atât studenților la medicină, cât și medicilor francezi și belgieni stabiliți la București, Iași, Cluj-Napoca sau Timișoara. Datorită acestei expertize, ei au dezvoltat o abordare precisă, riguroasă și perfect adaptată nevoilor lingvistice din domeniul medical în context românesc.</p><br>
<p>Echipa noastră este formată și din experți în predarea limbajului business și general, atât în limba franceză, cât și în limba română, pe care le-au predat în companii de renume internațional. Experiența lor în mediul profesional le permite să abordeze limba într-un mod concret: comunicare internă, prezentări, negociere, redactare de documente, interacțiuni interculturale etc.</p><br>
',
        'intrebare-despre' => 'De ce să alegeți centrul nostru de limbi străine?',
        'raspuns-despre' => 'O metodologie modernă, flexibilă și orientată spre rezultate.<br><br>
        Cursuri personalizate pentru profesioniști, companii și persoane fizice, cu o structură și o durată adaptate în funcție de nevoile și timpul cursanților.<br><br>
        O echipă de profesori care înțelege în profunzime nevoile lingvistice din domeniul medical și din mediul de afaceri.',
        // franceza_medicala
        'titlu-franceza-medicala' => 'Cursuri de franceză medicală',
        'text-franceza-medicala' => '<p>Cursurile noastre de franceză medicală sunt concepute de profesori care predau în acest domeniu de mulți ani și care stăpânesc perfect cerințele medicilor care doresc să lucreze într-un mediu francofon. Datorită experienței lor, au dezvoltat o metodologie structurată, în care gramatica este întotdeauna integrată într-un context medical real, pentru a asigura o învățare coerentă, utilă și imediat aplicabilă.</p><br>
<p>Acordăm o importanță esențială vocabularului de zi cu zi, indispensabil pentru a înțelege pacienții, a comunica în mod natural și a transmite clar orice informație medicală. Obiectivul este simplu: să îi permită medicului să fie autonom, precis și încrezător în orice situație de comunicare.</p><br>
<p>Profesorii noștri acoperă toate specializările medicale, iar cursurile includ o gamă largă de competențe practice:</p>
<br>•	realizarea unei anamneze complete;
<br>•	efectuarea unei auscultații și descrierea observațiilor;
<br>•	formularea unui diagnostic clar și structurat;
<br>•	explicarea unei prescripții și a unui tratament;
<br>•	interacțiunea cu pacienții într-un limbaj natural și ușor de înțeles;
<br>•	pregătirea medicilor pentru testele și grilele de evaluare necesare pentru posturile din Franța, Belgia și Elveția.<br><br>
<p>Cursanții au acces la materiale variate și profesionale:</p>
<br>•	cazuri clinice;
<br>•	teste grilă cu răspunsuri corecte și explicații;
<br>•	lucrări practice;
<br>•	simulări de consultații;
<br>•	antrenamente intensive pentru situațiile de comunicare medico-administrativă.<br><br>
<p>Datorită abordării noastre complete și orientate pe obiective, progresați rapid în vocabularul medical, comunicarea cu pacienții și stăpânirea limbii franceze profesionale, indispensabile pentru a profesa în mediul spitalicesc francofon.</p><br>',
        // franceza_business
        'titlu-franceza-business' => 'Cursuri de limba franceză business – Comunicați eficient în mediul de afaceri',
        'text-franceza-business' => '<p>Cursurile noastre de franceză business se adresează profesioniștilor care doresc să își îmbunătățească abilitățile de comunicare într-un mediu francofon. Acestea sunt susținute de profesori experimentați, care au predat franceza profesională în companii de renume internațional, colaborând cu angajați din diverse domenii: contabilitate, inginerie, management, logistică, resurse umane, IT și multe altele.<p><br>
<p>Datorită acestei expertize, profesorii noștri au dezvoltat o abordare practică și orientată către rezultate, care le permite cursanților să stăpânească limbajul de afaceri în situații profesionale reale. Cursurile acoperă toate competențele esențiale:</p>
<br>•	comunicarea cu ușurință în cadrul ședințelor, prezentărilor și interviurilor;
<br>•	redactarea și trimiterea de e-mailuri profesionale clare și eficiente;
<br>•	argumentarea, negocierea și interacțiunea cu parteneri francofoni;
<br>•	participarea activă la viața internă a companiei (discuții, briefuri, feedback, coordonare);
<br>•	înțelegerea documentelor tehnice și administrative din domeniile lor specifice (contabilitate, inginerie, finanțe etc.).<br><br>
<p>Formările noastre combină vocabularul profesional, situațiile simulate, jocurile de rol, studiile de caz și exercițiile personalizate. Rezultatul: cursanții dobândesc încredere, fluiditate în comunicare și autonomie în activitatea lor de zi cu zi.</p><br>
<p>Indiferent dacă sunteți începător sau avansat, cursurile noastre de franceză business vă permit să progresați rapid, să vă îmbunătățiți performanțele la locul de muncă și să comunicați într-o manieră profesională într-un mediu francofon.</p>',
        // franceza_generala
        'titlu-franceza-generala' => 'Cursuri de limba franceză generală',
      'text-franceza-generala' => '<p>Cursurile noastre de franceză generală se adresează tuturor celor care doresc să își îmbunătățească comunicarea în limba franceză în viața de zi cu zi, la locul de muncă sau în cadrul studiilor. Ele sunt susținute de profesori experimentați, care îi însoțesc pe cursanți în fiecare etapă, pentru a dezvolta o comunicare naturală, fluentă și precisă.</p><br>
<p>Cursurile acoperă toate competențele esențiale:</p>
<br>• exprimare orală și înțelegerea limbii franceze vorbite;
<br>• îmbogățirea vocabularului util în viața cotidiană;
<br>• gramatică explicată simplu și practic;
<br>• exprimare scrisă: mesaje, texte scurte, comunicări uzuale;
<br>• pronunție și dezvoltarea încrederii în comunicarea orală.<br><br>
<p>Oferim, de asemenea, o pregătire completă pentru examenele DELF, DALF și alte certificări de franceză ca limbă străină. Profesorii noștri îi ghidează pe cursanți în metodologia probelor, le oferă exerciții tip, simulări de examen și corecturi personalizate pentru a asigura un succes optim.</p><br>
<p>Abordarea noastră este interactivă, dinamică și centrată pe cursant: situații reale, dialoguri ghidate, jocuri de rol, activități de înțelegere și exerciții adaptate obiectivelor individuale. Scopul este ca fiecare cursant să poată vorbi, înțelege și scrie în limba franceză cu ușurință, indiferent de nivelul său inițial.</p><br>
<p>Fie că sunteți la început de drum în învățarea limbii franceze sau doriți să vă perfecționați competențele, cursurile noastre vă oferă un cadru prietenos, structurat și eficient pentru a progresa rapid.</p>',
        // romana_medicala
        'titlu-romana-medicala' => 'Cursuri de limba română medicală',
        'text-romana-medicala' => '<p>Cursurile noastre de limba română medicală sunt concepute de profesori cu experiență, care cunosc perfect nevoile medicilor străini dornici să lucreze sau să trăiască în România. Datorită experienței lor vaste, au dezvoltat o metodologie structurată, în care gramatica este întotdeauna integrată într-un context medical real, asigurând astfel un proces de învățare coerent, util și imediat aplicabil.</p><br>
<p>Accordăm o importanță esențială vocabularului utilizat zilnic în spitale și cabinete medicale, indispensabil pentru a înțelege pacienții români, a comunica natural și a transmite clar orice informație medicală. Obiectivul este simplu: medicul să devină autonom, precis și încrezător în orice situație de comunicare.</p><br>
<p>Profesorii noștri acoperă toate specialitățile medicale, iar cursurile includ o gamă largă de competențe practice:</p>
<br>• realizarea unei anamneze complete;
<br>• efectuarea unei auscultații și descrierea observațiilor;
<br>• formularea unui diagnostic clar și structurat;
<br>• explicarea unei prescripții și a unui tratament în limba română;
<br>• interacțiunea cu pacienții într-un limbaj natural și ușor de înțeles;
<br>• pregătirea medicilor pentru testele lingvistice sau procedurile de angajare în spitalele din România.<br><br>
<p>Cursanții au acces la materiale variate și profesionale:</p>
<br>• cazuri clinice;
<br>• teste grilă (QCM) corectate și comentate;
<br>• lucrări practice;
<br>• simulări de consultații;
<br>• antrenamente intensive pentru situații de comunicare medico-administrativă.<br><br>
<p>Datorită abordării noastre complete și bine țintite, veți progresa rapid în vocabularul medical, în comunicarea cu pacienții români și în stăpânirea limbii române profesionale, indispensabilă pentru a lucra în mediul spitalicesc din România.</p>',
        // romana_business
        'titlu-romana-business' => 'Cursuri de limba română business – Comunicați eficient în mediul profesional',
        'text-romana-business' => '<p>Cursurile noastre de limba română business se adresează profesioniștilor străini care doresc să își îmbunătățească abilitățile de comunicare într-un mediu de lucru românesc. Ele sunt susținute de profesori experimentați, care au predat limba română profesională în companii de renume internațional, colaborând cu angajați din domenii variate: contabilitate, inginerie, management, logistică, resurse umane, IT, relații cu clienții și multe altele.</p><br>
<p>Datorită acestei expertize, profesorii noștri au dezvoltat o abordare practică și orientată spre rezultate, care le permite cursanților să stăpânească limbajul profesional în situații reale. Cursurile acoperă toate competențele esențiale:</p>
<br>• comunicarea cu ușurință în cadrul ședințelor, prezentărilor și interviurilor;
<br>• redactarea și transmiterea de e-mailuri profesionale clare și eficiente în limba română;
<br>• argumentarea, negocierea și interacțiunea cu parteneri sau colegi români;
<br>• participarea activă la viața internă a companiei (discuții, briefinguri, feedback, coordonare);
<br>• înțelegerea documentelor tehnice și administrative din domeniul lor de activitate/domeniul în care activează (contabilitate, inginerie, finanțe etc.).<br><br>
<p>Formările noastre combină vocabularul profesional, situațiile practice, jocurile de rol, studiile de caz și exercițiile personalizate. Rezultatul: cursanții câștigă încredere, fluiditate în exprimare și autonomie în activitatea lor zilnică în România.</p><br>
<p>Indiferent dacă sunteți începător sau avansat, cursurile noastre de limba română business vă ajută să progresați rapid, să vă îmbunătățiți performanțele la locul de muncă și să comunicați eficient în mediul profesional românesc.</p>',
        // romana_generala
        'titlu-romana-generala' => 'Cursuri de limba română generală',
     'text-romana-generala' => '<p>Cursurile noastre de limba română generală sunt destinate persoanelor străine care doresc să își dezvolte competențele de comunicare în limba română, atât în viața cotidiană, cât și în mediul profesional sau academic. Ele sunt susținute de profesori experimentați, care îi însoțesc pe cursanți în fiecare etapă, pentru a dezvolta o comunicare naturală, fluentă și precisă.</p><br>
<p>Cursurile acoperă toate competențele esențiale:</p>
<br>• exprimarea orală și înțelegerea limbii române vorbite;
<br>• îmbogățirea vocabularului util în situațiile cotidiene;
<br>• gramatică explicată într-un mod simplu și practic;
<br>• exprimare scrisă: mesaje, texte scurte, comunicări uzuale;
<br>• pronunție și încredere în comunicarea orală.<br><br>
<p>Oferim, de asemenea, o pregătire completă pentru examenele de limbă română (A1–C2) destinate cursanților străini. Profesorii noștri îi ghidează pe cursanți în metodologia probelor, le oferă exerciții tipice, simulări de examene și corecturi personalizate, pentru a asigura o reușită garantată.</p><br>
<p>Abordarea noastră este interactivă, dinamică și centrată pe cursant: situații reale de comunicare, dialoguri ghidate, jocuri de rol, activități de înțelegere și exerciții adaptate obiectivelor individuale. Obiectivul este ca fiecare cursant să poată vorbi, înțelege și scrie româna cu ușurință, indiferent de nivelul de la care pornește.</p><br>
<p>Indiferent dacă sunteți începător sau doriți să vă perfecționați competențele, cursurile noastre oferă un cadru prietenos, bine structurat și eficient pentru a progresa rapid.</p>',
        // durata_formatul_cursurilor
        'titlu-durata-formatul-cursurilor' => 'Durata și formatul cursurilor – flexibilitate totală',
       'text-durata-formatul-cursurilor' => '<p>Cursurile noastre sunt complet personalizate pentru a răspunde nevoilor specifice ale fiecărui cursant. Indiferent dacă urmați un curs de franceză medicală, de business sau generală, puteți alege durata și formatul care vi se potrivesc cel mai bine.</p><br>
<p>Oferim cursuri atât online, cât și în format fizic (cu prezență), în funcție de preferințele și disponibilitatea dumneavoastră.</p><br>
<p>Formate disponibile:</p>
<br>• Cursuri individuale – ideale pentru a progresa rapid în atingerea unui obiectiv precis, beneficiind de o îndrumare complet personalizată;
<br>• Cursuri în grup – perfecte pentru dezvoltarea comunicării orale într-un mediu colaborativ și interactiv.<br><br>
<p>Durata sesiunilor:</p>
<br>• Sesiuni scurte: 20 de minute<br>
Perfecte pentru revizuirea vocabularului țintit, pentru conversații rapide sau pentru a menține contactul cu limba atunci când dispuneți de puțin timp (în mașină, în deplasare, în timpul unei pauze etc.).
<br>• Sesiuni standard: 45–90 de minute<br>
Ideale pentru un proces de învățare structurat, care acoperă gramatica, vocabularul, înțelegerea și exprimarea orală.
<br>• Sesiuni lungi: până la 3 ore<br>
Recomandate pentru formări intensive în grup, pregătirea examenelor sau pentru nevoi profesionale urgente.<br><br>
<p>Flexibilitate gândită pentru ritmul dumneavoastră:</p>
<p>Datorită acestei organizări flexibile, cursurile noastre se integrează ușor în orice program, chiar și în cele mai încărcate. Astfel, beneficiați de un proces de învățare personalizat, eficient și progresiv, indiferent de nivelul sau obiectivele dumneavoastră.</p><br>
<p>Pentru a primi o ofertă personalizată, adaptată nevoilor dumneavoastră, nu ezitați să ne contactați.</p>',
        // contact
        'titlu-contact' => 'Contact',
        'text-contact' => '<p>Pentru detalii privind cursurile de limba franceză și limba română, cu accent pe comunicarea generală, profesională și medicală, poți să ne contactezi direct:</p>
<br>Telefon: ' . $phone_contact .'
<br>E-mail: ' . $mail_contact .'<br><br>
<p>Îți vom răspunde cu plăcere și te vom ajuta să alegi cursul potrivit nevoilor tale.</p>',
        // pregatire_examene_delf 
        'titlu-pregatire-delf' => 'Pregătire examene DELF / DALF',
        'text-pregatire-delf' => '<p>Oferim cursuri de pregătire dedicate examenelor DELF (A1–B2) și DALF (C1–C2), adaptate nivelului, obiectivelor și ritmului fiecărui cursant. Pregătirea este structurată conform cerințelor oficiale ale examenelor și vizează dezvoltarea echilibrată a tuturor competențelor evaluate: înțelegere orală, înțelegere scrisă, producere scrisă și exprimare orală.</p><br>
<p>Cursurile includ:</p>
<br>• familiarizarea cu structura și tipologia subiectelor DELF/DALF;
<br>• exerciții specifice fiecărei probe, cu strategii de rezolvare eficiente;
<br>• simulări de examen în condiții reale;
<br>• corecturi detaliate și feedback personalizat;
<br>• îmbunătățirea vocabularului, gramaticii și coerenței discursului oral și scris.<br><br>
<p>Pregătirea este susținută de materiale actualizate și metode interactive, având ca obiectiv creșterea încrederii candidatului și maximizarea șanselor de promovare.</p>',
        // pregatire_examene_a1
        'titlu-pregatire-a1' => 'Pregătire examene (A1–C2) – Limba română',
        'text-pregatire-a1' => '<p>Oferim cursuri specializate de pregătire pentru examenele de certificare a competențelor de limba română, corespunzătoare nivelurilor A1–C2, conform Cadrului European Comun de Referință pentru Limbi (CECRL). Programul de pregătire este adaptat nivelului fiecărui cursant și urmărește dezvoltarea tuturor competențelor lingvistice evaluate în cadrul examenelor: înțelegerea mesajului oral, înțelegerea textului scris, exprimarea scrisă și exprimarea orală.</p><br>
<p>Cursurile includ:</p>
<br>• prezentarea structurii examenului și a criteriilor de evaluare;
<br>• exerciții specifice fiecărei probe, adaptate nivelului A1–C2;
<br>• consolidarea vocabularului și a structurilor gramaticale esențiale;
<br>• simulări de examen și evaluări periodice;
<br>• feedback individualizat și recomandări personalizate.<br><br>
<p>Metodele de lucru sunt interactive și orientate spre rezultate concrete, având ca obiectiv creșterea fluenței, acurateței lingvistice și a încrederii în comunicare, pentru obținerea cu succes a certificatului de competență lingvistică în limba română.</p>',
        // testimoniale
        'titlu-testimoniale' => 'Testimoniale',
        'text-testimoniale1' => '„Ceea ce mi-a plăcut cel mai mult a fost abordarea practică: simulări de consultații, redactarea fișelor medicale și analiza cazurilor clinice în limba franceză. Nu este doar un curs de limbă, ci unul de comunicare medicală reală.”',
        'autor-testimoniale1' => ' - Teodora C., medic specialist<br><br>',
        'text-testimoniale2' => '„Ceea ce mi-a plăcut cel mai mult a fost accentul pus pe contexte reale: negocieri, strategii de vânzare, redactarea de rapoarte și pitch-uri. În doar câteva luni, m-am simțit mult mai sigură în comunicarea de business în limba franceză.”',
        'autor-testimoniale2' => ' - Ioana M., specialist marketing<br><br>',
        'text-testimoniale3' => '„Metoda practică m-a ajutat să învăț franceza exact așa cum este folosită în viața reală. Lecțiile au fost interactive, clare și desfășurate într-o atmosferă foarte prietenoasă, ceea ce mi-a dat încredere să comunic. Astăzi folosesc limba franceză cu mai multă siguranță și naturalețe.”',
        'autor-testimoniale3' => ' - Mihaela D., cursant adult<br><br>',
        'text-testimoniale4' => '„Obținerea DALF C1 a fost o experiență provocatoare, dar extraordinar de satisfăcătoare. Cursul m-a ajutat să-mi dezvolt argumentarea academică și să structurez texte complexe. Mă simt pregătit pentru studii în limba franceză.”',
        'autor-testimoniale4' => ' - Adrian A., cursant – nivel avansat (DALF C1)<br><br>',
        // termeni_conditii
        'titlu-termeni-conditii' => 'Termeni și condiții',

        'text-termeni-conditii1'=> '1. Informații generale<br>',
        'text-termeni-conditii2' => 'Prezentul document stabilește termenii și condițiile de utilizare ale site-ului Academia Chic, administrat de ' . $firma . ', cu sediul în București, ' . $cui . ', denumită în continuare „Furnizorul”.
Prin accesarea și utilizarea site-ului, utilizatorul acceptă acești termeni și condiții. Dacă nu sunteți de acord cu aceștia, vă rugăm să nu utilizați site-ul.<br><br>',

        'text-termeni-conditii3' => '2. Scopul site-ului<br>',
        'text-termeni-conditii4' => 'Site-ul are scop informativ și de prezentare a serviciilor de cursuri de limbi străine, organizate:<br>
• în format online;<br>
• în format fizic, la sediile sau locațiile stabilite de Furnizor.<br>
Informațiile prezentate pe site nu reprezintă, în sine, o ofertă contractuală fermă.<br><br>',

        'text-termeni-conditii5' => '3. Serviciile oferite<br>',
        'text-termeni-conditii6' => 'Furnizorul oferă:<br>
• cursuri de limbi străine pentru diferite niveluri;<br>
• cursuri individuale sau de grup;<br>
• cursuri pentru copii și/sau adulți.<br>
Condițiile concrete (durată, preț, program) sunt comunicate direct cursanților, prin mijloace de comunicare directă (email, telefon, contract).<br><br>',

        'text-termeni-conditii7' => '4. Drepturi de autor<br>',
        'text-termeni-conditii8' => 'Conținutul site-ului este protejat conform legislației în vigoare. Unele materiale vizuale pot fi realizate cu ajutorul inteligenței artificiale și sunt utilizate legal.<br><br>',

        'text-termeni-conditii9' => '5. Utilizarea site-ului<br>',
        'text-termeni-conditii10' => 'Utilizatorii se obligă:<br>
• să utilizeze site-ul doar în scopuri legale;<br>
• să nu aducă atingere securității site-ului;<br>
• să nu încerce accesarea neautorizată a sistemelor informatice.<br>
Furnizorul își rezervă dreptul de a restricționa accesul utilizatorilor care încalcă aceste condiții.<br><br>',

        'text-termeni-conditii11' => '6. Limitarea răspunderii<br>',
        'text-termeni-conditii12' => 'Furnizorul nu răspunde, în limitele permise de lege, pentru:<br>
• eventuale erori sau omisiuni din conținutul site-ului;<br>
• întreruperi temporare ale funcționării site-ului;<br>
• daune rezultate din utilizarea informațiilor prezentate pe site.<br><br>',

        'text-termeni-conditii13' => '7. Politica de confidențialitate<br>',
        'text-termeni-conditii14' => 'Prelucrarea datelor cu caracter personal se realizează conform Politicii de confidențialitate, disponibilă pe site, document distinct care face parte integrantă din prezentele Termeni și condiții.<br><br>',

        'text-termeni-conditii15' => '8. Politica de cookie-uri<br>',
        'text-termeni-conditii16' => 'Site-ul utilizează doar cookie-uri strict necesare funcționării sale. Detalii suplimentare sunt disponibile în Politica de cookie-uri, document distinct.<br><br>',

        'text-termeni-conditii17' => '9. Modificarea termenilor și condițiilor<br>',
        'text-termeni-conditii18' => 'Furnizorul își rezervă dreptul de a modifica prezentul document, fără notificare individuală prealabilă. Versiunea actualizată va fi publicată pe site și va produce efecte de la data publicării.<br><br>',

        'text-termeni-conditii19' => '10. Legea aplicabilă<br>',
        'text-termeni-conditii20' => 'Prezentul document este guvernat de legislația română. Eventualele litigii vor fi soluționate de instanțele competente din România.<br><br>',
        // politica_confidentialitate
        'titlu-politica' => 'Politica de confidențialitate',

        'text-politica1' => '1. Informații generale<br>',
        'text-politica2' => '' . $firma . ', cu sediul în București, ' . $cui . ', în calitate de operator de date cu caracter personal, respectă confidențialitatea datelor persoanelor care accesează site-ul Academia Chic și se angajează să le prelucreze în conformitate cu Regulamentul (UE) 2016/679 privind protecția datelor cu caracter personal (GDPR) și legislația națională aplicabilă.<br>
Prezenta Politică de confidențialitate explică modul în care sunt colectate, utilizate și protejate datele cu caracter personal ale utilizatorilor site-ului.<br><br>',

        'text-politica3' => '2. Categorii de date cu caracter personal prelucrate<br>',
        'text-politica4' => 'În funcție de interacțiunea utilizatorului cu site-ul, pot fi prelucrate următoarele date:<br>
• nume și prenume;<br>
• adresă de e-mail;<br>
• număr de telefon;<br>
• informații furnizate voluntar prin formularele de contact;<br>
• date tehnice (adresă IP, tip browser, sistem de operare), colectate automat pentru funcționarea site-ului.<br><br>',

        'text-politica5' => '3. Scopurile prelucrării datelor<br>',
        'text-politica6' => 'Datele cu caracter personal sunt prelucrate în următoarele scopuri:<br>
• comunicarea cu utilizatorii care solicită informații despre cursuri;<br>
• transmiterea de răspunsuri la solicitările primite;<br>
• furnizarea de informații privind serviciile oferite;<br>
• îmbunătățirea funcționării și securității site-ului;<br>
• respectarea obligațiilor legale ale operatorului.<br><br>',

        'text-politica7' => '4. Temeiul legal al prelucrării<br>',
        'text-politica8' => 'Prelucrarea datelor se realizează în baza unuia sau mai multora dintre următoarele temeiuri legale:<br>
• consimțământul utilizatorului;<br>
• necesitatea executării unor demersuri la cererea utilizatorului;<br>
• îndeplinirea obligațiilor legale;<br>
• interesul legitim al operatorului pentru funcționarea și securitatea site-ului.<br><br>',

        'text-politica9' => '5. Durata stocării datelor<br>',
        'text-politica10' => 'Datele cu caracter personal sunt păstrate doar pe perioada necesară îndeplinirii scopurilor pentru care au fost colectate sau pe durata impusă de obligațiile legale aplicabile.<br><br>',

        'text-politica11' => '6. Dezvăluirea datelor către terți<br>',
        'text-politica12' => 'Datele cu caracter personal nu sunt vândute, transferate sau divulgate către terți, cu excepția:<br>
• furnizorilor de servicii IT implicați în funcționarea site-ului;<br>
• autorităților publice, atunci când există o obligație legală.<br>
Toți partenerii care pot avea acces la date sunt obligați să respecte confidențialitatea acestora.<br><br>',

        'text-politica13' => '7. Drepturile persoanelor vizate<br>',
        'text-politica14' => 'Conform GDPR, utilizatorii beneficiază de următoarele drepturi:<br>
• dreptul de acces la date;<br>
• dreptul la rectificarea datelor;<br>
• dreptul la ștergerea datelor („dreptul de a fi uitat”);<br>
• dreptul la restricționarea prelucrării;<br>
• dreptul la opoziție;<br>
• dreptul la portabilitatea datelor;<br>
• dreptul de a retrage consimțământul, în orice moment;<br>
• dreptul de a depune o plângere la Autoritatea Națională de Supraveghere a Prelucrării Datelor cu Caracter Personal (ANSPDCP).<br><br>',

        'text-politica15' => '8. Securitatea datelor<br>',
        'text-politica16' => 'Operatorul implementează măsuri tehnice și organizatorice adecvate pentru a proteja datele cu caracter personal împotriva accesului neautorizat, pierderii, distrugerii sau divulgării accidentale.<br><br>',

        'text-politica17' => '9. Politica de cookie-uri<br>',
        'text-politica18' => 'Site-ul utilizează cookie-uri strict necesare pentru funcționarea sa. Informații detaliate sunt disponibile în Politica de cookie-uri, document distinct, disponibil pe site.<br><br>',

        'text-politica19' => '10. Modificări ale politicii de confidențialitate<br>',
        'text-politica20' => '' . $firma . ' își rezervă dreptul de a actualiza prezenta Politică de confidențialitate. Versiunea actualizată va fi publicată pe site și va produce efecte de la data publicării.<br><br>',

        'text-politica21' => '11. Contact<br>',
        'text-politica22' => 'Pentru orice solicitări privind protecția datelor cu caracter personal, ne puteți contacta la datele de contact afișate pe site.<br><br>',
        // politica_cookies
        'titlu-cookies' => 'Politica de cookie-uri',

        'text-cookies1' => '1. Informații generale<br>',
        'text-cookies2' => 'Prezenta Politică de cookie-uri se aplică site-ului Academia Chic, administrat de ' . $firma . ', cu sediul în București, ' . $cui . ', și are rolul de a informa utilizatorii cu privire la utilizarea cookie-urilor pe acest site.<br><br>',

        'text-cookies3' => '2. Ce sunt cookie-urile<br>',
        'text-cookies4' => 'Cookie-urile sunt fișiere de mici dimensiuni, formate din litere și cifre, stocate pe dispozitivul utilizatorului (computer, telefon mobil, tabletă) atunci când acesta accesează un site web. Cookie-urile permit recunoașterea dispozitivului utilizatorului și contribuie la funcționarea corectă și eficientă a site-ului.<br><br>',

        'text-cookies5' => '3. Tipurile de cookie-uri utilizate<br>',
        'text-cookies6' => 'Site-ul Academia Chic utilizează exclusiv cookie-uri strict necesare, care sunt esențiale pentru funcționarea corectă a site-ului și pentru asigurarea securității acestuia.<br>
Aceste cookie-uri :<br>
• nu colectează date cu caracter personal în scopuri de marketing;<br>
• nu sunt utilizate pentru analiză sau publicitate;<br>
• nu necesită consimțământul prealabil al utilizatorului, conform legislației aplicabile.<br><br>',

        'text-cookies7' => '4. Scopul utilizării cookie-urilor<br>',
        'text-cookies8' => 'Cookie-urile strict necesare sunt utilizate pentru :<br>
• asigurarea funcționării tehnice a site-ului;<br>
• gestionarea sesiunilor de utilizare;<br>
• protejarea site-ului împotriva accesului neautorizat;<br>
• optimizarea securității.<br><br>',

        'text-cookies9' => '5. Durata de viață a cookie-urilor<br>',
        'text-cookies10' => 'Cookie-urile utilizate pot fi :<br>
• cookie-uri de sesiune, care sunt șterse automat la închiderea browserului;<br>
• cookie-uri persistente, care sunt stocate pentru o perioadă limitată, necesară funcționării site-ului.<br><br>',

        'text-cookies11' => '6. Controlul cookie-urilor<br>',
        'text-cookies12' => 'Utilizatorii pot seta browserul astfel încât să blocheze sau să șteargă cookie-urile.<br>
În acest caz, anumite funcționalități ale site-ului pot fi afectate.<br>
Setările privind cookie-urile pot fi modificate din browserul utilizatorului.<br><br>',

        'text-cookies13' => '7. Legătura cu alte politici<br>',
        'text-cookies14' => 'Pentru informații suplimentare privind prelucrarea datelor cu caracter personal, utilizatorii sunt încurajați să consulte Politica de confidențialitate, disponibilă pe site.<br><br>',

        'text-cookies15' => '8. Modificări ale politicii de cookie-uri<br>',
        'text-cookies16' => '' . $firma . ' își rezervă dreptul de a actualiza prezenta Politică de cookie-uri. Versiunea actualizată va fi publicată pe site și va produce efecte de la data publicării.<br><br>',

        'text-cookies17' => '9. Contact<br>',
        'text-cookies18' => 'Pentru întrebări sau solicitări privind utilizarea cookie-urilor, ne puteți contacta la datele de contact afișate pe site.<br><br>',


],
    'fr' => [
        //general 
        'nume_aplicatie' =>  "Academia Chic",
        // header
        'titlu-acasa' => 'Accueil',
        'titlu-despre' => 'À propos de nous',
        'cursuri-franceza' => 'Cours de français',
        'franceza-medicala' => 'Français médical',
        'franceza-business' => 'Français des affaires',
        'franceza-generala' => 'Français général',
        'pregatire-examene-fr' => 'Préparation aux examens DELF/DALF',
        'cursuri-romana' => 'Cours de roumain pour étrangers',
        'romana-medicala' => 'Roumain médical',
        'romana-business' => 'Roumain des affaires',
        'romana-generala' => 'Roumain général',
        'pregatire-examene-ro' => 'Préparation aux examens (A1–C2)',
        'durata-si-formatul-cursurilor' => 'Durée et format des cours –  flexibilité totale',
        'contact' => 'Contact',
        'login' => 'Connexion',
        // footer
        'testimoniale' => 'Témoignages',
        'politica' => 'Politique de confidentialité',
        'cookies' => 'Politique relative aux cookies',
        'termeni' => 'Termes et conditions',
        'drepturi' => 'Tous droits réservés.',
        'retele-sociale' => 'Réseaux sociaux',
        // index
        'titlu-cursuri' => "Vivez l'expérience de L'Académie Chic",
        // despre_noi
        'titlu-despre' => 'À propos de nous',
        'text-despre' => '<p>Notre mission est de vous accompagner dans l’apprentissage du français et du roumain grâce à une équipe d’enseignants hautement qualifiés et passionnés par la transmission des langues étrangères.</p><br>
<p>Nous réunissons des professeurs dont l’expérience couvre un large éventail de domaines : langage médical, langage business et langage général, afin de répondre aux besoins variés des apprenants – qu’il s’agisse de professionnels, d’étudiants, d’expatriés ou de personnes désireuses d’élargir leurs compétences linguistiques.</p><br>
<p>Une partie de notre équipe a enseigné le roumain comme langue étrangère au sein d’organisations internationales, en travaillant avec des apprenants issus de milieux culturels variés. Cette expérience internationale leur a permis de développer une pédagogie interculturelle, adaptable et profondément humaine.</p><br>
<p>Nos enseignants spécialisés dans le langage médical français disposent d’une solide expertise acquise notamment entre 2010 et 2018, période durant laquelle la demande de formation en français médical a fortement augmenté, suite au départ d’un grand nombre de médecins roumains vers la France et la Belgique. Ils maîtrisent non seulement le vocabulaire spécialisé, mais aussi les réalités du système de santé francophone, ce qui permet un apprentissage authentique, concret et immédiatement utile.</p><br>
<p>Nos enseignants disposent également d’une solide expérience dans l’enseignement du langage médical en roumain, qu’ils ont transmis à des étudiants en médecine ainsi qu’à des médecins français et belges installés à Bucarest, Iași, Cluj-Napoca ou Timișoara. Grâce à cette expertise, ils ont développé une approche précise, rigoureuse et parfaitement adaptée aux besoins linguistiques du domaine médical en contexte roumain.</p><br>
<p>D’autres professeurs sont experts dans l’enseignement du français et du roumain business et général, qu’ils ont dispensé dans des entreprises de renommée internationale. Leur expérience du milieu professionnel leur permet d’aborder la langue de manière concrète : communication interne, présentations, négociation, rédaction de documents, interactions interculturelles, etc.</p><br>',
        'intrebare-despre' => 'Pourquoi choisir notre centre de langues?',
        'raspuns-despre' => 'Une méthodologie moderne, flexible et orientée résultats<br><br>
        Des cours personnalisés pour professionnels, entreprises et particuliers<br><br>
        Une équipe d’enseignants qui maîtrise parfaitement les besoins linguistiques du monde médical et des affaires<br><br>',
        // franceza_medicala
        'titlu-franceza-medicala' => 'Cours de français médical',
        'text-franceza-medicala' => '<p>Nos cours de français médical sont conçus par des professeurs qui enseignent ce domaine depuis de nombreuses années et qui maîtrisent parfaitement les exigences des médecins souhaitant travailler dans un environnement francophone. Grâce à leur expérience, ils ont développé une méthodologie structurée, où la grammaire est toujours intégrée dans un contexte médical réel, afin d’assurer un apprentissage cohérent, utile et immédiatement applicable.</p><br>
<p>Nous accordons une importance essentielle au vocabulaire quotidien, indispensable pour comprendre les patients, communiquer de manière naturelle et transmettre clairement toute information médicale. L’objectif est simple : permettre au médecin d’être autonome, précis et confiant dans toute situation de communication.</p><br>
<p>Nos professeurs couvrent toutes les spécialités médicales, et nos cours incluent un large éventail de compétences pratiques :</p>
<br>•	réaliser une anamnèse complète ;
<br>•	conduire une auscultation et décrire les observations ;
<br>•	formuler un diagnostic clair et structuré ;
<br>•	expliquer une prescription et un traitement ;
<br>•	interagir avec les patients dans un langage naturel et compréhensible ;
<br>•	préparer les médecins aux tests et grilles d’évaluation demandés pour les postes en France, Belgique et Suisse.<br><br>
<p>Les apprenants ont accès à des supports variés et professionnels :</p>
<br>•	cas cliniques ;
<br>•	QCM corrigés et commentés ;
<br>•	travaux pratiques ;
<br>•	simulations de consultations ;
<br>•	entraînements intensifs aux situations de communication médico-administrative.
<p>Grâce à notre approche complète et ciblée, vous progressez rapidement dans le vocabulaire médical, la communication avec les patients, et la maîtrise du français professionnel, indispensable pour exercer en milieu hospitalier francophone.</p><br>',
        // franceza_business
        'titlu-franceza-business' => 'Cours de français business – Communiquez efficacement en entreprise',
        'text-franceza-business' => '<p>Nos cours de français business s’adressent aux professionnels qui souhaitent améliorer leur communication dans un environnement francophone. Ils sont animés par des professeurs expérimentés, qui ont enseigné le français professionnel dans des entreprises de renommée internationale, auprès de collaborateurs issus de secteurs variés : comptabilité, ingénierie, management, logistique, ressources humaines, IT, et bien d’autres.</p><br>
<p>Grâce à cette expertise, nos enseignants ont développé une approche pratique et orientée résultats, permettant aux apprenants de maîtriser le langage business dans des situations professionnelles réelles. Les cours couvrent toutes les compétences essentielles :</p>
<br>• communiquer avec aisance lors de réunions, présentations et entretiens ;
<br>• rédiger et envoyer des e-mails professionnels clairs et efficaces ;
<br>• argumenter, négocier et interagir avec des partenaires francophones ;
<br>• participer activement à la vie interne de l’entreprise (discussions, briefs, feedback, coordination) ;
<br>• comprendre les documents techniques et administratifs dans leurs domaines spécifiques (comptabilité, ingénierie, finance, etc.).<br><br>
<p>Nos formations combinent vocabulaire professionnel, mises en situation, jeux de rôle, études de cas et exercices personnalisés. Résultat : les apprenants gagnent en confiance, en fluide communication, et en autonomie dans leur travail quotidien.</p><br>
<p>Que vous soyez débutant ou déjà avancé, nos cours de français business vous permettent de progresser rapidement, d’améliorer vos performances au travail et de communiquer de manière professionnelle dans un environnement francophone.</p>',
        // franceza_generala
        'titlu-franceza-generala' => 'Cours de français général',
        'text-franceza-generala' => '<p>Nos cours de français général s’adressent à tous ceux qui souhaitent améliorer leur maîtrise du français dans la vie quotidienne, au travail ou dans leurs études. Ils sont animés par des professeurs expérimentés, qui accompagnent les apprenants à chaque étape pour développer une communication naturelle, fluide et précise.</p><br>
<p>Les cours couvrent l’ensemble des compétences essentielles :</p>
<br>• expression orale et compréhension du français parlé ;
<br>• enrichissement du vocabulaire utile au quotidien ;
<br>• grammaire expliquée de façon simple et pratique ;
<br>• expression écrite : messages, textes courts, communications courantes ;
<br>• prononciation et confiance à l’oral.<br><br>
<p>Nous proposons également une préparation complète aux examens DELF, DALF et autres certifications de français langue étrangère. Nos professeurs guident les apprenants dans la méthodologie des épreuves, leur fournissent des exercices types, des simulations d’examen et des corrections personnalisées pour garantir une réussite optimale.</p><br>
<p>Notre approche est interactive, dynamique et centrée sur l’apprenant : mises en situation réelles, dialogues guidés, jeux de rôle, activités de compréhension et exercices adaptés aux objectifs individuels. L’objectif est que chaque apprenant puisse parler, comprendre et écrire le français avec aisance, quel que soit son niveau de départ.</p><br>
<p>Que vous débutiez en français ou que vous souhaitiez perfectionner vos compétences, nos cours vous offrent un cadre convivial, structuré et efficace pour progresser rapidement.</p>',
        // romana_medicala
        'titlu-romana-medicala' => 'Cours de roumain médical',
        'text-romana-medicala' => '<p>Nos cours de roumain médical sont conçus par des professeurs qui enseignent ce domaine depuis de nombreuses années et qui maîtrisent parfaitement les besoins des médecins étrangers souhaitant travailler ou vivre en Roumanie. Grâce à leur expérience, ils ont développé une méthodologie structurée, où la grammaire est toujours intégrée dans un contexte médical réel, afin d’assurer un apprentissage cohérent, utile et immédiatement applicable.</p><br>
<p>Nous accordons une importance essentielle au vocabulaire utilisé au quotidien dans les hôpitaux et cabinets médicaux, indispensable pour comprendre les patients roumains, communiquer de manière naturelle et transmettre clairement toute information médicale. L’objectif est simple : permettre au médecin d’être autonome, précis et confiant dans toute situation de communication.</p><br>
<p>Nos professeurs couvrent toutes les spécialités médicales, et nos cours incluent un large éventail de compétences pratiques :</p>
<br>• réaliser une anamnèse complète ;
<br>• mener une auscultation et décrire les observations ;
<br>• formuler un diagnostic clair et structuré ;
<br>• expliquer une prescription et un traitement en roumain ;
<br>• interagir avec les patients dans un langage naturel et compréhensible ;
<br>• préparer les médecins aux tests linguistiques ou procédures d’embauche dans les hôpitaux de Roumanie.<br><br>
<p>Les apprenants ont accès à des supports variés et professionnels :</p>
<br>• cas cliniques ;
<br>• QCM corrigés et commentés ;
<br>• travaux pratiques ;
<br>• simulations de consultations ;
<br>• entraînements intensifs aux situations de communication médico-administrative.<br><br>
<p>Grâce à notre approche complète et ciblée, vous progressez rapidement dans le vocabulaire médical, la communication avec les patients roumains et la maîtrise du roumain professionnel, indispensable pour exercer en milieu hospitalier en Roumanie.</p>',
        // romana_business
        'titlu-romana-business' => 'Cours de roumain business – Communiquez efficacement en entreprise',
       'text-romana-business' => '<p>Nos cours de roumain business s’adressent aux professionnels étrangers qui souhaitent améliorer leur communication dans un environnement de travail roumain. Ils sont animés par des professeurs expérimentés, qui ont enseigné le roumain professionnel dans des entreprises de renommée internationale, auprès de collaborateurs issus de secteurs variés : comptabilité, ingénierie, management, logistique, ressources humaines, IT, service client, et bien d’autres.</p><br>
<p>Grâce à cette expertise, nos enseignants ont développé une approche pratique et orientée résultats, permettant aux apprenants de maîtriser le langage professionnel dans des situations réelles. Les cours couvrent toutes les compétences essentielles :</p>
<br>• communiquer avec aisance lors de réunions, présentations et entretiens ;
<br>• rédiger et envoyer des e-mails professionnels clairs et efficaces en roumain ;
<br>• argumenter, négocier et interagir avec des partenaires ou collègues roumains ;
<br>• participer activement à la vie interne de l’entreprise (discussions, briefs, feedback, coordination) ;
<br>• comprendre les documents techniques et administratifs liés à leur domaine (comptabilité, ingénierie, finance, etc.).<br><br>
<p>Nos formations combinent vocabulaire professionnel, mises en situation, jeux de rôle, études de cas et exercices personnalisés. Résultat : les apprenants gagnent en confiance, en fluidité et en autonomie dans leur travail quotidien en Roumanie.</p><br>
<p>Que vous soyez débutant ou déjà avancé, nos cours de roumain business vous permettent de progresser rapidement, d’améliorer vos performances au travail et de communiquer de manière professionnelle dans un environnement roumain.</p>',
        // romana_generala
        'titlu-romana-generala' => 'Cours de roumain général',
        'text-romana-generala' => '<p>Nos cours de roumain général s’adressent à toutes les personnes étrangères qui souhaitent améliorer leur maîtrise du roumain dans la vie quotidienne, au travail ou dans leurs études. Ils sont animés par des professeurs expérimentés, qui accompagnent les apprenants à chaque étape afin de développer une communication naturelle, fluide et précise.</p><br>
<p>Les cours couvrent l’ensemble des compétences essentielles :</p>
<br>• expression orale et compréhension du roumain parlé ;
<br>• enrichissement du vocabulaire utile au quotidien ;
<br>• grammaire expliquée de manière simple et pratique ;
<br>• expression écrite : messages, textes courts, communications courantes ;
<br>• prononciation et assurance à l’oral.<br><br>
<p>Nous proposons également une préparation complète aux examens de langue roumaine (A1–C2) destinés aux apprenants étrangers. Nos professeurs guident les apprenants dans la méthodologie des épreuves, leur fournissent des exercices types, des simulations d’examen et des corrections personnalisées pour garantir une réussite optimale.</p><br>
<p>Notre approche est interactive, dynamique et centrée sur l’apprenant : mises en situation réelles, dialogues guidés, jeux de rôle, activités de compréhension et exercices adaptés aux objectifs individuels. L’objectif est que chaque apprenant puisse parler, comprendre et écrire le roumain avec aisance, quel que soit son niveau de départ.</p><br>
<p>Que vous débutiez en roumain ou que vous souhaitiez perfectionner vos compétences, nos cours offrent un cadre convivial, structuré et efficace pour progresser rapidement.</p>',
        // durata_formatul_cursurilor
        'titlu-durata-formatul-cursurilor' => 'Durée et format des cours – flexibilité totale',
        'text-durata-formatul-cursurilor' => '<p>Nos cours sont entièrement personnalisés afin de répondre aux besoins spécifiques de chaque apprenant. Que vous suiviez un cours de français médical, de français des affaires ou de français général, vous pouvez choisir la durée et le format qui vous conviennent le mieux.</p><br>
<p>Nous proposons des cours aussi bien en ligne qu’en présentiel, en fonction de vos préférences et de vos disponibilités.</p><br>
<p>Formats disponibles :</p>
<br>• Cours individuels – idéals pour progresser rapidement vers un objectif précis, grâce à un accompagnement totalement personnalisé ;
<br>• Cours en groupe – parfaits pour développer la communication orale dans un cadre collaboratif et interactif.<br><br>
<p>Durée des séances :</p>
<br>• Séances courtes : 20 minutes<br>
Parfaites pour la révision d’un vocabulaire ciblé, des conversations rapides ou pour maintenir le contact avec la langue lorsque vous disposez de peu de temps (en voiture, en déplacement, pendant une pause, etc.) ;
<br>• Séances standards : 45 à 90 minutes<br>
Idéales pour un apprentissage structuré, couvrant la grammaire, le vocabulaire, la compréhension et l’expression orale ;
<br>• Séances longues : jusqu’à 3 heures<br>
Recommandées pour des formations intensives en groupe, la préparation aux examens ou pour des besoins professionnels urgents.<br><br>
<p>Une flexibilité pensée pour votre rythme :</p>
<p>Grâce à cette organisation flexible, nos cours s’intègrent facilement à tout emploi du temps, même les plus chargés. Vous bénéficiez ainsi d’un apprentissage personnalisé, efficace et progressif, quel que soit votre niveau ou vos objectifs.</p><br>
<p>Pour recevoir une offre personnalisée, adaptée à vos besoins, n’hésitez pas à nous contacter.</p>',
        // contact
        'titlu-contact' => 'Contact',
        'text-contact' => '<p>Pour plus de détails concernant les cours de langue française et de langue roumaine, avec un accent sur la communication générale, professionnelle et médicale, tu peux nous contacter directement:</p>
<br>Téléphone : ' . $phone_contact . '
<br>E-mail : ' . $mail_contact .'<br><br>
<p>Nous te répondrons avec plaisir et t’aiderons à choisir le cours le plus adapté à tes besoins.</p>',
        // pregatire_examene_delf 
        'titlu-pregatire-delf' => 'Préparation aux examens DELF / DALF',
        'text-pregatire-delf' => '<p>Nous proposons des cours de préparation dédiés aux examens DELF (A1–B2) et DALF (C1–C2), adaptés au niveau, aux objectifs et au rythme de chaque apprenant. La préparation est structurée conformément aux exigences officielles des examens et vise le développement équilibré de toutes les compétences évaluées : compréhension orale, compréhension écrite, production écrite et expression orale.</p><br>
<p>Les cours comprennent :</p>
<br>• la familiarisation avec la structure et la typologie des épreuves DELF/DALF ;
<br>• des exercices spécifiques pour chaque épreuve, avec des stratégies de résolution efficaces ;
<br>• des simulations d’examen en conditions réelles ;
<br>• des corrections détaillées et un retour personnalisé ;
<br>• l’amélioration du vocabulaire, de la grammaire et de la cohérence du discours, à l’oral comme à l’écrit.<br><br>
<p>La préparation s’appuie sur des supports actualisés et des méthodes interactives, avec pour objectif de renforcer la confiance du candidat et de maximiser les chances de réussite.</p>',
        // pregatire_examene_a1
        'titlu-pregatire-a1' => 'Préparation aux examens (A1–C2) – Langue roumaine',
        'text-pregatire-a1' => '<p>Nous proposons des cours spécialisés de préparation aux examens de certification des compétences en langue roumaine, correspondant aux niveaux A1–C2, conformément au Cadre européen commun de référence pour les langues (CECRL). Le programme de préparation est adapté au niveau de chaque apprenant et vise le développement de toutes les compétences linguistiques évaluées lors des examens : compréhension orale, compréhension écrite, production écrite et expression orale.</p><br>
<p>Les cours comprennent :</p>
<br>• la présentation de la structure de l’examen et des critères d’évaluation ;
<br>• des exercices spécifiques pour chaque épreuve, adaptés aux niveaux A1–C2 ;
<br>• le renforcement du vocabulaire et des structures grammaticales essentielles ;
<br>• des simulations d’examen et des évaluations périodiques ;
<br>• un feedback individualisé et des recommandations personnalisées.<br><br>
<p>Les méthodes de travail sont interactives et orientées vers des résultats concrets, avec pour objectif d’améliorer la fluidité, la précision linguistique et la confiance en communication, en vue de l’obtention réussie du certificat de compétence linguistique en langue roumaine.</p>',
        // testimoniale
        'titlu-testimoniale' => 'Témoignages',
        'text-testimoniale1' => '« Avant de commencer mes études à la Faculté de médecine de Iași, la terminologie médicale en roumain me paraissait insurmontable. Grâce à une approche pédagogique fondée sur des cas réels, des simulations de consultations et des exercices pratiques, le professeur m’a permis d’appliquer immédiatement les connaissances acquises. Je recommande vivement ce cours à tous les étudiants étrangers en médecine à Iași. »',
        'autor-testimoniale1' => ' - Camille M., étudiante en médecine<br><br>',
        'text-testimoniale2' => '« J’ai étudié le roumain des affaires afin de mieux communiquer avec mes partenaires professionnels en Roumanie. Cette formation m’a permis d’acquérir rapidement le vocabulaire essentiel du monde économique et de gagner en aisance lors des échanges professionnels. Aujourd’hui, cette compétence est un véritable atout dans mon activité et facilite considérablement mes relations commerciales. »',
        'autor-testimoniale2' => ' - Marie D., comptable (France)<br><br>',
        'text-testimoniale3' => '“I learned Romanian in order to communicate directly with local communities and professionals involved in counter-human trafficking efforts. Mastering general Romanian has allowed me to build trust, better understand realities on the ground, and work more effectively. This language skill has become essential in my daily work in Romania.”',
        'autor-testimoniale3' => ' - Mark E., Consultant – Counter-Human Trafficking<br><br>',
        'text-testimoniale4' => '« L’obtention d’une certification en langue roumaine a marqué une étape importante dans mon parcours linguistique. Cette reconnaissance officielle m’a permis de valider mes compétences en roumain général et de renforcer ma confiance, tant dans des contextes professionnels que personnels. Aujourd’hui, cette certification représente un véritable atout pour mes projets en lien avec la Roumanie. »',
        'autor-testimoniale4' => ' - Thomas L. (France), titulaire d’une certification en langue roumaine',
  
        // termeni_conditii
        'titlu-termeni-conditii' => 'Termes et conditions',

        'text-termeni-conditii1'=> '1. Informations générales<br>',
        'text-termeni-conditii2' => 'Le présent document établit les termes et conditions d’utilisation du site Academia Chic, administré par ' . $firma . ', dont le siège social est situé à Bucarest, code d’identification fiscale (CUI) ' . $cui . ', ci-après dénommée le « Fournisseur ».<br>
En accédant au site et en l’utilisant, l’utilisateur accepte les présents termes et conditions. Si vous n’êtes pas d’accord avec ceux-ci, veuillez ne pas utiliser le site.<br><br>',

        'text-termeni-conditii3' => '2. Objet du site<br>',
        'text-termeni-conditii4' => 'Le site a un objectif informatif et de présentation des services de cours de langues étrangères, organisés :<br>
• en format en ligne ;<br>
• en format présentiel, dans les locaux ou lieux établis par le Fournisseur.<br>
Les informations présentées sur le site ne constituent pas, en elles-mêmes, une offre contractuelle ferme.<br><br>',

        'text-termeni-conditii5' => '3. Services proposés<br>',
        'text-termeni-conditii6' => 'Le Fournisseur propose :<br>
• des cours de langues étrangères pour différents niveaux ;<br>
• des cours individuels ou en groupe ;<br>
• des cours pour enfants et/ou adultes.<br>
Les conditions concrètes (durée, prix, horaires) sont communiquées directement aux apprenants, par des moyens de communication directe (e-mail, téléphone, contrat).<br><br>',

        'text-termeni-conditii7' => '4. Droits d’auteur<br>',
        'text-termeni-conditii8' => 'Le contenu du site est protégé conformément à la législation en vigueur. Certains supports visuels peuvent être réalisés à l’aide de l’intelligence artificielle et sont utilisés de manière légale.<br><br>',

        'text-termeni-conditii9' => '5. Utilisation du site<br>',
        'text-termeni-conditii10' => 'Les utilisateurs s’engagent :<br>
• à utiliser le site uniquement à des fins légales ;<br>
• à ne pas porter atteinte à la sécurité du site ;<br>
• à ne pas tenter d’accéder de manière non autorisée aux systèmes informatiques.<br>
Le Fournisseur se réserve le droit de restreindre l’accès aux utilisateurs qui ne respectent pas ces conditions.<br><br>',

        'text-termeni-conditii11' => '6. Limitation de responsabilité<br>',
        'text-termeni-conditii12' => 'Dans les limites prévues par la loi, le Fournisseur ne saurait être tenu responsable :<br>
• des éventuelles erreurs ou omissions dans le contenu du site ;<br>
• des interruptions temporaires du fonctionnement du site ;<br>
• des dommages résultant de l’utilisation des informations présentées sur le site.<br><br>',

        'text-termeni-conditii13' => '7. Politique de confidentialité<br>',
        'text-termeni-conditii14' => 'Le traitement des données à caractère personnel est effectué conformément à la Politique de confidentialité, disponible sur le site. Ce document distinct fait partie intégrante des présents Termes et conditions.<br><br>',

        'text-termeni-conditii15' => '8. Politique relative aux cookies<br>',
        'text-termeni-conditii16' => 'Le site utilise uniquement des cookies strictement nécessaires à son fonctionnement. Des informations complémentaires sont disponibles dans la Politique relative aux cookies, document distinct.<br><br>',

        'text-termeni-conditii17' => '9. Modification des termes et conditions<br>',
        'text-termeni-conditii18' => 'Le Fournisseur se réserve le droit de modifier le présent document sans notification individuelle préalable. La version mise à jour sera publiée sur le site et prendra effet à compter de sa date de publication.<br><br>',

        'text-termeni-conditii19' => '10. Loi applicable<br>',
        'text-termeni-conditii20' => 'Le présent document est régi par la législation roumaine. Tout litige éventuel sera soumis aux juridictions compétentes de Roumanie.<br><br>',
        //politica_confidentialitate
        'titlu-politica' => 'Politique de confidentialité',

        'text-politica1' => '1. Informations générales<br>',
        'text-politica2' => '' . $firma . ', dont le siège social est situé à Bucarest, code d’identification fiscale (CUI) ' . $cui . ', en qualité de responsable du traitement des données à caractère personnel, respecte la confidentialité des données des personnes qui accèdent au site Academia Chic et s’engage à les traiter conformément au Règlement (UE) 2016/679 relatif à la protection des données à caractère personnel (RGPD) ainsi qu’à la législation nationale applicable.<br>
La présente Politique de confidentialité explique la manière dont les données à caractère personnel des utilisateurs du site sont collectées, utilisées et protégées.<br><br>',

        'text-politica3' => '2. Catégories de données à caractère personnel traitées<br>',
        'text-politica4' => 'Selon l’interaction de l’utilisateur avec le site, les catégories de données suivantes peuvent être traitées :<br>
• nom et prénom ;<br>
• adresse e-mail ;<br>
• numéro de téléphone ;<br>
• informations fournies volontairement via les formulaires de contact ;<br>
• données techniques (adresse IP, type de navigateur, système d’exploitation), collectées automatiquement pour le bon fonctionnement du site.<br><br>',

        'text-politica5' => '3. Finalités du traitement des données<br>',
        'text-politica6' => 'Les données à caractère personnel sont traitées aux fins suivantes :<br>
• communiquer avec les utilisateurs qui demandent des informations sur les cours ;<br>
• répondre aux demandes reçues ;<br>
• fournir des informations concernant les services proposés ;<br>
• améliorer le fonctionnement et la sécurité du site ;<br>
• respecter les obligations légales du responsable du traitement.<br><br>',

        'text-politica7' => '4. Base légale du traitement<br>',
        'text-politica8' => 'Le traitement des données est fondé sur une ou plusieurs des bases légales suivantes :<br>
• le consentement de l’utilisateur ;<br>
• la nécessité d’exécuter des démarches à la demande de l’utilisateur ;<br>
• le respect d’obligations légales ;<br>
• l’intérêt légitime du responsable du traitement lié au fonctionnement et à la sécurité du site.<br><br>',

        'text-politica9' => '5. Durée de conservation des données<br>',
        'text-politica10' => 'Les données à caractère personnel sont conservées uniquement pendant la durée nécessaire à la réalisation des finalités pour lesquelles elles ont été collectées ou pendant la période imposée par les obligations légales applicables.<br><br>',

        'text-politica11' => '6. Communication des données à des tiers<br>',
        'text-politica12' => 'Les données à caractère personnel ne sont ni vendues, ni transférées, ni divulguées à des tiers, sauf dans les cas suivants :<br>
• prestataires de services informatiques impliqués dans le fonctionnement du site ;<br>
• autorités publiques, lorsqu’une obligation légale l’exige.<br>
Tous les partenaires susceptibles d’avoir accès aux données sont tenus de respecter leur confidentialité.<br><br>',

        'text-politica13' => '7. Droits des personnes concernées<br>',
        'text-politica14' => 'Conformément au RGPD, les utilisateurs bénéficient des droits suivants :<br>
• droit d’accès aux données ;<br>
• droit de rectification des données ;<br>
• droit à l’effacement des données (« droit à l’oubli ») ;<br>
• droit à la limitation du traitement ;<br>
• droit d’opposition ;<br>
• droit à la portabilité des données ;<br>
• droit de retirer le consentement à tout moment ;<br>
• droit d’introduire une réclamation auprès de l’Autorité nationale de surveillance du traitement des données à caractère personnel (ANSPDCP).<br><br>',

        'text-politica15' => '8. Sécurité des données<br>',
        'text-politica16' => 'Le responsable du traitement met en œuvre des mesures techniques et organisationnelles appropriées afin de protéger les données à caractère personnel contre tout accès non autorisé, perte, destruction ou divulgation accidentelle.<br><br>',

        'text-politica17' => '9. Politique relative aux cookies<br>',
        'text-politica18' => 'Le site utilise uniquement des cookies strictement nécessaires à son fonctionnement. Des informations détaillées sont disponibles dans la Politique relative aux cookies, document distinct accessible sur le site.<br><br>',

        'text-politica19' => '10. Modifications de la politique de confidentialité<br>',
        'text-politica20' => '' . $firma . ' se réserve le droit de mettre à jour la présente Politique de confidentialité. La version mise à jour sera publiée sur le site et produira ses effets à compter de la date de publication.<br><br>',

        'text-politica21' => '11. Contact<br>',
        'text-politica22' => 'Pour toute demande relative à la protection des données à caractère personnel, vous pouvez nous contacter aux coordonnées indiquées sur le site.<br><br>',
        // politica_cookies
        'titlu-cookies' => 'Politique relative aux cookies',

        'text-cookies1' => '1. Informations générales<br>',
        'text-cookies2' => 'La présente Politique relative aux cookies s’applique au site Academia Chic, administré par ' . $firma . ', dont le siège social est situé à Bucarest, code d’identification fiscale (CUI) ' . $cui . '. Elle a pour objet d’informer les utilisateurs sur l’utilisation des cookies sur ce site.<br><br>',

        'text-cookies3' => '2. Qu’est-ce qu’un cookie ?<br>',
        'text-cookies4' => 'Les cookies sont de petits fichiers composés de lettres et de chiffres, stockés sur l’appareil de l’utilisateur (ordinateur, téléphone mobile, tablette) lorsqu’il accède à un site web. Les cookies permettent de reconnaître l’appareil de l’utilisateur et contribuent au bon fonctionnement et à l’efficacité du site.<br><br>',

        'text-cookies5' => '3. Types de cookies utilisés<br>',
        'text-cookies6' => 'Le site Academia Chic utilise exclusivement des cookies strictement nécessaires, essentiels au bon fonctionnement du site et à la garantie de sa sécurité.<br>
Ces cookies :<br>
• ne collectent pas de données à caractère personnel à des fins de marketing ;<br>
• ne sont pas utilisés à des fins d’analyse ou de publicité ;<br>
• ne nécessitent pas le consentement préalable de l’utilisateur, conformément à la législation applicable.<br><br>',

        'text-cookies7' => '4. Finalité de l’utilisation des cookies<br>',
        'text-cookies8' => 'Les cookies strictement nécessaires sont utilisés afin de :<br>
• assurer le fonctionnement technique du site ;<br>
• gérer les sessions des utilisateurs ;<br>
• protéger le site contre tout accès non autorisé ;<br>
• optimiser la sécurité.<br><br>',

        'text-cookies9' => '5. Durée de vie des cookies<br>',
        'text-cookies10' => 'Les cookies utilisés peuvent être :<br>
• des cookies de session, qui sont supprimés automatiquement à la fermeture du navigateur ;<br>
• des cookies persistants, qui sont stockés pour une durée limitée, nécessaire au fonctionnement du site.<br><br>',

        'text-cookies11' => '6. Gestion des cookies<br>',
        'text-cookies12' => 'Les utilisateurs peuvent configurer leur navigateur afin de bloquer ou de supprimer les cookies.<br>
Dans ce cas, certaines fonctionnalités du site peuvent être affectées.<br>
Les paramètres relatifs aux cookies peuvent être modifiés directement dans le navigateur de l’utilisateur.<br><br>',

        'text-cookies13' => '7. Lien avec d’autres politiques<br>',
        'text-cookies14' => 'Pour plus d’informations concernant le traitement des données à caractère personnel, les utilisateurs sont invités à consulter la Politique de confidentialité, disponible sur le site.<br><br>',

        'text-cookies15' => '8. Modifications de la politique relative aux cookies<br>',
        'text-cookies16' => '' . $firma . ' se réserve le droit de mettre à jour la présente Politique relative aux cookies. La version mise à jour sera publiée sur le site et prendra effet à compter de la date de publication.<br><br>',

        'text-cookies17' => '9. Contact<br>',
        'text-cookies18' => 'Pour toute question ou demande concernant l’utilisation des cookies, vous pouvez nous contacter aux coordonnées indiquées sur le site.<br><br>',
],

     'en' => [
        //general 
        'nume_aplicatie' =>  "L’Académie Chic",
        //header
        'acasa' => 'Home',
        'login' => 'Login',
        'titlu-cursuri' => 'Courses',
        'text-cursuri' => 'Text cursuri eng',
        'titlu-contact' => 'Contact',
        'text-contact' => 'Text cursuri eng',
        'titlu-blog' => 'Blogs',
        'text-blog' => 'Text blog eng',
        'titlu-despre' => 'About us',
        'text-despre' => 'Text despre eng',
    ],

];


// ---------- LIMBA SELECTATA ----------
// 1. Dacă e GET, salvăm în sesiune
if (isset($_GET['lang']) && isset($translations[$_GET['lang']])) {
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang;
}
// 2. Dacă nu e GET, verificăm sesiunea
elseif (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
}
// 3. Altfel, limba default
else {
    $lang = 'ro';
}

// Preluăm traducerile pentru această limba
$t = $translations[$lang];

// Highlight header pagina curenta
$currentPage = basename($_SERVER['PHP_SELF']);
