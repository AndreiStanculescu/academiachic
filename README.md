<h1 align="center"><strong>Academia Chic – Website</strong></h1>

Website-ul Academia Chic este un site de prezentare realizat în PHP, destinat promovării cursurilor de limba română și franceză cu meditator.
Proiectul funcționează ca o carte de vizită online, punând accent pe conținut, claritate și suport multi-limbă.

## 📌 Project Overview

Aplicația oferă:

- pagină „Acasă” interactivă
- pagini informative despre cursuri și servicii
- suport multi-language (🇷🇴 Română / 🇫🇷 Franceză)
- date de contact pentru înscriere și informații
- structură simplă, ușor de extins

Nu include logică de autentificare, baze de date sau panou administrativ.

## 🧩 Application Structure

``` bash
academiachic/
│
├── ajax/        # request-uri asincrone (backend logic)
├── assets/      # imagini, iconuri, media
├── css/         # stiluri separate pe componente/pagini
├── lib/         # clase/helpers/tabele
├── *.php        # pagini site
├── config.php   # configurări globale
├── header.php   # layout header comun
├── footer.php   # layout footer comun
└── index.php    # pagina principală
```

## 🌍 Multi-language Support

Aplicația este gândită pentru conținut tradus, fără framework extern.
Fisierul config.php returneaza un array care face selecția limbii.

## 🏠 Homepage (index.php)

Pagina principală:

- este interactivă
- prezintă academia și cursurile disponibile
- oferă navigare clară către paginile interne
- folosește JavaScript pentru elemente dinamice (UI/UX)

## 🎯 Scopul proiectului

- prezentarea serviciilor educaționale
- acces rapid la informații
- suport pentru public român și francofon
- bază solidă pentru extinderi ulterioare

## 🔮 Extensibilitate

Structura permite adăugarea ușoară de:

- pagini sau secțiuni noi
- limbi suplimentare
- componente UI reutilizabile
- endpoint-uri AJAX noi
- îmbunătățiri pentru formularul de contact
- autentificare și panou de administrare
- integrare bază de date (MySQL)
- module de programări sau gestionare cursuri