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
      --h1-color: <?= $culoareH1 ?>;
      --label-color: <?= $culoareLabel ?>;
      --header-color: <?= $culoareHeader ?>;
      --footer-color: <?= $culoareFooter ?>;
    }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>

    <section class="hero">
        <div class="hero-content">
            <h1><?= $t['titlu-despre'] ?></h1>
            <label><?= $t['text-despre'] ?></label>

            <div class="faq-single">
                <div class="faq-item">
                    <button class="faq-question"><?= $t['intrebare-despre'] ?></button>
                    <div class="faq-answer">
                        <p><?= $t['raspuns-despre'] ?></p>
                    </div>
                </div>
            </div>
        </div>

        <img src="assets/despre_noi.png" alt="Despre Noi">

    </section>

    <?php include 'footer.php'; ?>

</body>

</html>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        const faqQuestions = document.querySelectorAll('.faq-question');

        faqQuestions.forEach(q => {
            q.addEventListener('click', function() {
                const answer = this.nextElementSibling;
                if (answer.style.maxHeight) {
                    answer.style.maxHeight = null;
                } else {
                    answer.style.maxHeight = answer.scrollHeight + "px";
                }
            });
        });
    });
</script>