<h1 align="center"><strong>Academia Chic – Website</strong></h1>

Website-ul Academia Chic este un site de prezentare realizat in PHP, destinat promovarii cursurilor de limba romana si franceza cu meditator.  
Proiectul functioneaza ca o carte de vizita online, punand accent pe continut, claritate si suport multi-limba.

## 📌 Project Overview

Aplicatia ofera:

- pagina „Acasa” interactiva
- pagini informative despre cursuri si servicii
- suport multi-language (🇷🇴 Romana / 🇫🇷 Franceza)
- date de contact pentru inscriere si informatii
- structura simpla, usor de extins

Nu include logica de autentificare, baze de date sau panou administrativ.

## 🧩 Application Structure

``` bash
academiachic/
│
└───www/
    ├───ajax/    # request-uri asincrone (backend logic)
    ├───assets/  # imagini, iconuri, media
    ├───controllers/    # clase controller pentru logica MVC
    ├───css/     # stiluri separate pe componente/pagini
    ├───lib/     # clase/helpers/tabele
    ├───models/  # modele de date (PHP classes pentru entitati)
    ├───*.php    # pagini site
    └───README.md   # documentatie locala pentru folderul www
├───changelog.txt   # log al modificarilor si update-urilor proiectului
├───config.php  # configurări globale
└───cron.php    # script PHP pentru task-uri programate (cron jobs)
```

## 🌍 Multi-language Support

Aplicatia este gandita pentru continut tradus, fara framework extern.  
Fișierul `config.php` contine un **array asociativ cu textele pentru fiecare limba**,  iar paginile site-ului folosesc **structura MVC** pentru a prelua si afisa continutul tradus.

---

## 🏠 Homepage (index.php)

Pagina principala:

- este interactiva  
- prezinta academia si cursurile disponibile  
- ofera navigare clara catre paginile interne  
- foloseste JavaScript pentru elemente dinamice (UI/UX)  

---

## 🎯 Scopul proiectului

- prezentarea serviciilor educationale  
- acces rapid la informatii  
- suport pentru public roman si francofon  
- baza solida pentru extinderi ulterioare  

---

## 🔮 Extensibilitate

Structura permite adaugarea usoara de:

- pagini sau sectiuni noi  
- traduceri de continut suplimentare  
- magazin online pentru cursuri  
- pagini de logare pentru utilizatori  
- pagini de administrare pentru managementul site-ului si cursurilor  
- integrare baza de date (MySQL)  
- module de programari sau gestionare cursuri  