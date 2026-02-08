<?php
require_once "config.php";
?>

<head>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style-header.css">
    <!-- footer styles (added) -->
    <link rel="stylesheet" href="css/style-footer.css">
    <style>
        :root {
            --body-color: <?= $culoareBody ?>;
            --h1-color: <?= $culoareH1 ?>;
            --label-color: <?= $culoareLabel ?>; 
            --primary-color: <?= $culoarePrincipala ?>;
            --secondary-color: <?= $culoareSecundara ?>;
        }
    </style>
</head>

<footer class="main-footer">
    <div class="footer-container">

        <!-- Left Section -->
        <div class="footer-links">
            <a href="testimoniale.php" class="footer-link"><?= $t['testimoniale'] ?></a>
            <a href="politica_confidentialitate.php" class="footer-link"><?= $t['politica'] ?></a>
            <a href="politica_cookies.php" class="footer-link"><?= $t['cookies'] ?></a>
            <a href="termeni_conditii.php" class="footer-link"><?= $t['termeni'] ?></a>

            <p class="footer-info">&copy; 2026 <?= $t['nume_aplicatie'] ?>.<?= $t['drepturi'] ?></p>
            <p class="footer-info"><?= $t['contact'] ?>: <?= $mail_contact ?></p>
        </div>

        <!-- Right Section -->
        <div class="footer-social">
            <h3><?= $t['retele-sociale'] ?>:</h3>

            <div class="social-icons">
                <a href="#" class="social-icon" title="Facebook">
                    <img src="assets/facebook.png" alt="Facebook">
                </a>
                <a href="#" class="social-icon" title="Instagram">
                    <img src="assets/instagram.png" alt="Instagram">
                </a>
                <a href="#" class="social-icon" title="YouTube">
                    <img src="assets/youtube.png" alt="YouTube">
                </a>
                <a href="#" class="social-icon" title="TikTok">
                    <img src="assets/tiktok.png" alt="TikTok">
                </a>
            </div>
        </div>

    </div>
</footer>