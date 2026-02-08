<?php
require_once "config.php";

?>
<!DOCTYPE html>
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
            --h1-color: <?= $culoareH1 ?>;
            --label-color: <?= $culoareLabel ?>; 
            --primary-color: <?= $culoarePrincipala ?>;
            --secondary-color: <?= $culoareSecundara ?>;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>


    <section class="hero">
        <div class="hero-content">
            <h1><?= $t['titlu-pregatire-a1'] ?></h1>
            <label><?= $t['text-pregatire-a1'] ?></label>
        </div>
        <img src="assets/pregatire_examene_a1.png" alt="Despre Noi">
    </section>

    <?php include 'footer.php'; ?>

</body>

</html>