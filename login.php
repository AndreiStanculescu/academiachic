<?php
require_once "config.php";
session_start();

// Rate-limit în sesiune
if (!isset($_SESSION['login_attempts'])) $_SESSION['login_attempts'] = 0;
$max_attempts = 6;
$lockout_seconds = 60;

// CSRF token
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(16));
}

$error_login = '';
$error_register = '';
$success = '';

// lockout check
if (isset($_SESSION['lockout_until']) && time() < $_SESSION['lockout_until']) {
    $remaining = $_SESSION['lockout_until'] - time();
    $error_login = "Prea multe încercări. Încearcă din nou peste {$remaining} secunde.";
}

// Procesare LOGIN
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login_submit'])) {
    $token = $_POST['csrf_token'] ?? '';
    if (!hash_equals($_SESSION['csrf_token'], $token)) {
        $error_login = "Cerere invalidă (CSRF).";
    } else {
        $email = trim($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';

        if ($email === '' || $password === '') {
            $error_login = "Completează toate câmpurile.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_login = "Adresa de email nu este validă.";
        } else {
            $sql = "SELECT nr, email, password FROM utilizatori WHERE email = ? LIMIT 1";
            if ($stmt = mysqli_prepare($link, $sql)) {
                mysqli_stmt_bind_param($stmt, "s", $email);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) === 1) {
                    mysqli_stmt_bind_result($stmt, $nr, $email_db, $hashed_password);
                    mysqli_stmt_fetch($stmt);

                    if (password_verify($password, $hashed_password)) {
                        // succes
                        $_SESSION['login_attempts'] = 0;
                        unset($_SESSION['lockout_until']);
                        session_regenerate_id(true);
                        $_SESSION['loggedin'] = true;
                        $_SESSION['nr'] = $nr;
                        mysqli_stmt_close($stmt);
                        header("Location: index.php");
                        exit;
                    } else {
                        $error_login = "Email sau parolă incorectă.";
                    }
                } else {
                    $error_login = "Email sau parolă incorectă.";
                }
                mysqli_stmt_close($stmt);
            } else {
                $error_login = "Eroare internă (DB).";
            }
        }

        if ($error_login) {
            $_SESSION['login_attempts']++;
            if ($_SESSION['login_attempts'] >= $max_attempts) {
                $_SESSION['lockout_until'] = time() + $lockout_seconds;
            }
        }
    }
}

// Procesare REGISTER
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register_submit'])) {
    $token = $_POST['csrf_token'] ?? '';
    if (!hash_equals($_SESSION['csrf_token'], $token)) {
        $error_register = "Cerere invalidă (CSRF).";
    } else {
        $reg_name = trim($_POST['reg_name'] ?? '');
        $reg_surname = trim($_POST['reg_surname'] ?? '');
        $reg_email = trim($_POST['reg_email'] ?? '');
        $reg_password = $_POST['reg_password'] ?? '';
        $reg_password2 = $_POST['reg_password2'] ?? '';
        $reg_terms = $_POST['reg_terms'] ?? '';

        if ($reg_name === '' || $reg_surname === '' || $reg_email === '' || $reg_password === '' || $reg_password2 === '') {
            $error_register = "Completează toate câmpurile de înregistrare.";
        } elseif (!filter_var($reg_email, FILTER_VALIDATE_EMAIL)) {
            $error_register = "Email invalid.";
        } elseif ($reg_password !== $reg_password2) {
            $error_register = "Parolele nu coincid.";
        } elseif (strlen($reg_password) < 6) {
            $error_register = "Parola trebuie să aibă cel puțin 6 caractere.";
        } elseif ($reg_terms === '') {
            $error_register = "Trebuie să accepți termenii și condițiile pentru a te înregistra.";
        } else {
            $sql_check = "SELECT nr FROM utilizatori WHERE email = ? LIMIT 1";
            if ($stmt = mysqli_prepare($link, $sql_check)) {
                mysqli_stmt_bind_param($stmt, "s", $reg_email);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) > 0) {
                    $error_register = "Există deja un cont cu acest email.";
                    mysqli_stmt_close($stmt);
                } else {
                    mysqli_stmt_close($stmt);
                    $password_hash = password_hash($reg_password, PASSWORD_DEFAULT);
                    $sql_insert = "INSERT INTO utilizatori (email, password, nume, prenume) VALUES (?, ?, ?, ?)";
                    if ($stmt2 = mysqli_prepare($link, $sql_insert)) {
                        mysqli_stmt_bind_param($stmt2, "ssss", $reg_email, $password_hash, $reg_name, $reg_surname);
                        if (mysqli_stmt_execute($stmt2)) {
                            $success = "Înregistrare efectuată cu succes. Poți să te autentifici.";
                        } else {
                            $error_register = "Eroare la înregistrare (DB).";
                        }
                        mysqli_stmt_close($stmt2);
                    } else {
                        $error_register = "Eroare internă (DB).";
                    }
                }
            } else {
                $error_register = "Eroare internă (DB).";
            }
        }
    }
}

// Stabilim tab-ul activ
$active_tab = 'login';
if ($error_register) {
    $active_tab = 'register';
} elseif ($error_login) {
    $active_tab = 'login';
}


?>
<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="<?= $logo ?>">
    <title>Login - <?= $t['nume_aplicatie'] ?></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/9.2.0/mdb.min.css" rel="stylesheet" />
    <link href="css/style-login.css" rel="stylesheet" />
</head>

<body>

    <section class="vh-100" style="background-color:#9A616D;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                                    alt="login form" class="img-fluid" style="height:100%;object-fit:cover;border-radius:1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <div class="d-flex align-items-center mb-3 pb-1 logo-title-container">
                                        <img src="<?= $logo ?>" alt="Logo" class="logo" style="height:48px; width:auto;">
                                        <h1 class="logo-title ms-3"><?= $t['nume_aplicatie'] ?></h1>
                                    </div>

                                    <?php if ($active_tab === 'login' && $error_login): ?>
                                        <div id="error-login" class="alert alert-danger"><?= htmlspecialchars($error_login) ?></div>
                                    <?php elseif ($active_tab === 'register' && $error_register): ?>
                                        <div id="error-register" class="alert alert-danger"><?= htmlspecialchars($error_register) ?></div>
                                    <?php elseif ($success): ?>
                                        <div class="alert alert-success"><?= htmlspecialchars($success) ?></div>
                                    <?php endif; ?>

                                    <!-- Nav pills -->
                                    <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link <?= ($active_tab === 'login') ? 'active' : '' ?>"
                                                id="tab-login" data-mdb-pill-init
                                                href="#pills-login" role="tab"
                                                aria-controls="pills-login"
                                                aria-selected="<?= ($active_tab === 'login') ? 'true' : 'false' ?>">Login</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link <?= ($active_tab === 'register') ? 'active' : '' ?>"
                                                id="tab-register" data-mdb-pill-init
                                                href="#pills-register" role="tab"
                                                aria-controls="pills-register"
                                                aria-selected="<?= ($active_tab === 'register') ? 'true' : 'false' ?>">Register</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <!-- LOGIN -->
                                        <div class="tab-pane fade <?= ($active_tab === 'login') ? 'show active' : '' ?>"
                                            id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                                            <form method="POST" action="" autocomplete="off" novalidate>
                                                <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token']) ?>">
                                                <div data-mdb-input-init class="form-outline mb-4">
                                                    <input type="email" id="loginName" name="email" class="form-control" required />
                                                    <label class="form-label" for="loginName">Email</label>
                                                </div>
                                                <div data-mdb-input-init class="form-outline mb-4">
                                                    <input type="password" id="loginPassword" name="password" class="form-control" required autocomplete="new-password" />
                                                    <label class="form-label" for="loginPassword">Password</label>
                                                </div>

                                                <!-- <div class="row mb-4">
                                                    <div class="col-md-6 d-flex justify-content-center">
                                                        <div class="form-check mb-3 mb-md-0">
                                                            <input class="form-check-input" type="checkbox" value="1" id="loginCheck" name="remember" />
                                                            <label class="form-check-label" for="loginCheck"> Remember me </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 d-flex justify-content-center">
                                                        <a href="#!">Forgot password?</a>
                                                    </div>
                                                </div> -->

                                                <button type="submit"
                                                    id="btnLogin"
                                                    name="login_submit"
                                                    class="btn btn-primary btn-block mb-4">
                                                    Log in
                                                </button>
                                            </form>
                                        </div>

                                        <!-- REGISTER -->
                                        <div class="tab-pane fade <?= ($active_tab === 'register') ? 'show active' : '' ?>"
                                            id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                                            <form method="POST" action="" autocomplete="off" novalidate>
                                                <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token']) ?>">
                                                <div data-mdb-input-init class="form-outline mb-4">
                                                    <input type="text" id="registerName" name="reg_name" class="form-control" required />
                                                    <label class="form-label" for="registerName">Name</label>
                                                </div>
                                                <div data-mdb-input-init class="form-outline mb-4">
                                                    <input type="text" id="registerSurname" name="reg_surname" class="form-control" required />
                                                    <label class="form-label" for="registerSurname">Surname</label>
                                                </div>
                                                <div data-mdb-input-init class="form-outline mb-4">
                                                    <input type="email" id="registerEmail" name="reg_email" class="form-control" required />
                                                    <label class="form-label" for="registerEmail">Email</label>
                                                </div>
                                                <div data-mdb-input-init class="form-outline mb-4">
                                                    <input type="password" id="registerPassword" name="reg_password" class="form-control" required />
                                                    <label class="form-label" for="registerPassword">Password</label>
                                                </div>
                                                <div data-mdb-input-init class="form-outline mb-4">
                                                    <input type="password" id="registerRepeatPassword" name="reg_password2" class="form-control" required />
                                                    <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                                                </div>

                                                <div class="form-check d-flex justify-content-center mb-4">
                                                    <input class="form-check-input me-2" type="checkbox" value="1" id="registerCheck" name="reg_terms" checked />
                                                    <label class="form-check-label" for="registerCheck">
                                                        I have read and agree to the terms
                                                    </label>
                                                </div>

                                                <button type="submit"
                                                    id="btnRegister"
                                                    name="register_submit"
                                                    class="btn btn-primary btn-block mb-3">
                                                    Sign up
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /tab-content -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/9.2.0/mdb.umd.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const tabs = document.querySelectorAll('.nav-link'); // tab-urile Login/Register
            const errorLoginDiv = document.querySelector('#error-login'); // div pentru $error_login
            const errorRegisterDiv = document.querySelector('#error-register'); // div pentru $error_register

            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    // Dacă schimbăm tab-ul, ascundem mesajele celuilalt tab
                    if (tab.id === 'tab-login' && errorRegisterDiv) {
                        errorRegisterDiv.style.display = 'none';
                    }
                    if (tab.id === 'tab-register' && errorLoginDiv) {
                        errorLoginDiv.style.display = 'none';
                    }
                });
            });
        });
    </script>

</body>

</html>