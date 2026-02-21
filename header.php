<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- import font logo -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">



  <!-- CSS -->
  <link rel="stylesheet" href="css/style-header.css">
  <style>
    :root {
      --body-color: <?= $culoareBody ?>;
      --h1-color: <?= $culoareH1 ?>;
      --label-color: <?= $culoareLabel ?>;
      --header-color: <?= $culoareHeader ?>;
      --footer-color: <?= $culoareFooter ?>;
    }
  </style>
</head>

<header class="main-header">
  <div class="header-container">

    <div class="logo">
      <a href="index.php" class="logo-link">
        <span><?= $t['nume_aplicatie'] ?></span>
      </a>
    </div>
    <!-- Linkuri vizibile mereu -->
    <!-- <div class="main-links">
      <a href="index.php" class="nav-link <?= ($currentPage === 'index.php') ? 'active' : '' ?>">
        <?= $t['titlu-acasa'] ?>
      </a>

    </div> -->

    <!-- Hamburger -->
    <button class="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </button>

    <!-- Meniul care intră în hamburger -->
    <nav class="navbar">
      <a href="despre_noi.php" class="nav-link <?= ($currentPage === 'despre_noi.php') ? 'active' : '' ?>">
        <?= $t['titlu-despre'] ?>
      </a>
      <div class="courses-switch">
        <button class="courses-btn"><?= $t['cursuri-franceza'] ?><span class="chevron"></span></button>
        <ul class="courses-dropdown">
          <li><a href="franceza_medicala.php" class="courses-link"><?= $t['franceza-medicala'] ?></a></li>
          <li><a href="franceza_business.php" class="courses-link"><?= $t['franceza-business'] ?></a></li>
          <li><a href="franceza_generala.php" class="courses-link"><?= $t['franceza-generala'] ?></a></li>
          <li><a href="pregatire_examene_delf.php" class="courses-link"><?= $t['pregatire-examene-fr'] ?></a></li>
        </ul>
      </div>

      <div class="courses-switch">
        <button class="courses-btn"><?= $t['cursuri-romana'] ?><span class="chevron"></span></button>
        <ul class="courses-dropdown">
          <li><a href="romana_medicala.php" class="courses-link"><?= $t['romana-medicala'] ?></a></li>
          <li><a href="romana_business.php" class="courses-link"><?= $t['romana-business'] ?></a></li>
          <li><a href="romana_generala.php" class="courses-link"><?= $t['romana-generala'] ?></a></li>
          <li><a href="pregatire_examene_a1.php" class="courses-link"><?= $t['pregatire-examene-ro'] ?></a></li>
        </ul>
      </div>

      <a href="durata_si_formatul.php" class="nav-link <?= ($currentPage === 'durata_si_formatul.php') ? 'active' : '' ?>">
        <?= $t['durata-si-formatul-cursurilor'] ?>
      </a>

      <a href="contact.php" class="nav-link <?= ($currentPage === 'contact.php') ? 'active' : '' ?>">
        <?= $t['contact'] ?>
      </a>

      <!-- Language switch -->
      <div class="lang-switch">
        <button class="lang-btn"><?= strtoupper($lang) ?> ▼</button>
        <ul class="lang-dropdown">
          <li><a href="?lang=ro" class="lang-link">Română</a></li>
          <!-- <li><a href="?lang=en" class="lang-link">English</a></li> -->
          <li><a href="?lang=fr" class="lang-link">Français</a></li>
        </ul>
      </div>
    </nav>

  </div>
</header>



<script>
  // ---------- DROPDOWN LIMBĂ ----------
  const langSwitch = document.querySelector('.lang-switch');
  const langBtn = document.querySelector('.lang-btn');

  langBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    // Închide toate dropdown-urile de cursuri
    document.querySelectorAll('.courses-switch').forEach(cs => cs.classList.remove('active'));
    langSwitch.classList.toggle('active');
  });

  // ---------- DROPDOWN-URI CURSURI ----------
  const allCoursesSwitches = document.querySelectorAll('.courses-switch');

  allCoursesSwitches.forEach(coursesSwitch => {
    const coursesBtn = coursesSwitch.querySelector('.courses-btn');

    coursesBtn.addEventListener('click', (e) => {
      e.stopPropagation();

      // Închide celelalte dropdown-uri de cursuri
      allCoursesSwitches.forEach(cs => {
        if (cs !== coursesSwitch) cs.classList.remove('active');
      });

      // Închide dropdown limbă
      langSwitch.classList.remove('active');

      // Toggle dropdown-ul curent
      coursesSwitch.classList.toggle('active');
    });
  });

  // ---------- CLICK ÎN AFARA DROPDOWN-URILOR ----------
  document.addEventListener('click', () => {
    langSwitch.classList.remove('active');
    allCoursesSwitches.forEach(cs => cs.classList.remove('active'));
  });

  // ---------- LOGO LA SCROLL ----------
  // const logo = document.querySelector(".logo-img");

  // // Stare inițială: logo mic + fade-out
  // logo.classList.add("logo-fade");

  // function updateLogo() {
  //   if (window.scrollY === 0) {
  //     // Ești sus → logo apare cu fade-in & zoom
  //     logo.classList.remove("logo-fade");
  //   } else {
  //     // La scroll → logo devine discret, mic + fade-out
  //     logo.classList.add("logo-fade");
  //   }
  // }

  // window.addEventListener("scroll", updateLogo);
  // updateLogo(); // rulează la încărcare


  // ---- HAMBURGER MENU ----
  const hamburger = document.querySelector('.hamburger');
  const nav = document.querySelector('.navbar');

  hamburger.addEventListener('click', (e) => {
    e.stopPropagation();
    hamburger.classList.toggle('active');
    nav.classList.toggle('open');
  });

  // Închide meniul când dai click în afara lui
  document.addEventListener('click', () => {
    nav.classList.remove('open');
    hamburger.classList.remove('active');
  });
</script>