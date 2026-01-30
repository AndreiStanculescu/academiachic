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


    <style>
        :root {
            --body-color: <?= $culoareBody ?>;
            --primary-color: <?= $culoarePrincipala ?>;
            --secondary-color: <?= $culoareSecundara ?>;
        }
    </style>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style-index.css">

</head>

<body>
    <?php include 'header.php'; ?>

    <section class="hero">
        <!-- <img src="assets/logo.png" alt="Logo"> -->

        <section class="cards-section">
            <!-- <h2 class="cards-title">L'académie Chic</h2> -->
            <div class="cards-container">

                <a href="franceza_medicala.php" class="card">
                    <h3><?= $t['franceza-medicala'] ?></h3>
                </a>

                <a href="romana_medicala.php" class="card">
                    <h3><?= $t['romana-medicala'] ?></h3>
                </a>

                <a href="franceza_business.php" class="card">
                    <h3><?= $t['franceza-business'] ?></h3>
                </a>

                <a href="romana_business.php" class="card">
                    <h3><?= $t['romana-business'] ?></h3>
                </a>

                <a href="franceza_generala.php" class="card">
                    <h3><?= $t['franceza-generala'] ?></h3>
                </a>

                <a href="romana_generala.php" class="card">
                    <h3><?= $t['romana-generala'] ?></h3>
                </a>

            </div>
        </section>
    </section>

    <?php include 'footer.php'; ?>
</body>

</html>