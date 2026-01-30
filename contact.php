<?php
require_once "config.php";

?>
<!DOCTYPE php>
<html lang="<?= $lang ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?= $logo ?>">
    <title><?= $t['nume_aplicatie'] ?></title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style-pagini-text.css">
    <style>
        :root {
            --body-color: <?= $culoareBody ?>;
            --primary-color: <?= $culoarePrincipala ?>;
            --secondary-color: <?= $culoareSecundara ?>;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>


    <section class="hero">
        <div class="hero-content">
            <h1><?= $t['titlu-contact'] ?></h1>
            <label><?= $t['text-contact'] ?></label>
        </div>

        <img src="assets/contact.png" alt="Contact">

    </section>

    <?php include 'footer.php'; ?>

</body>

</html>