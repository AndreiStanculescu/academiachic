<link rel="stylesheet" href="css/style-cookies.css">
<div id="cookie-banner" class="cookie-banner">
    <div class="cookie-content">
        <p><?=  $t['mesaj-cookies'] ?>
            <a href="./politica_cookies.php"><?= $t['cookies'] ?></a>.
        </p>

        <div class="cookie-buttons">
            <button id="accept-cookies" class="cookie-btn accept"><?= $t['accept'] ?></button>
            <button id="reject-cookies" class="cookie-btn reject"><?= $t['refuz'] ?></button>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const banner = document.getElementById("cookie-banner");
        const accept = document.getElementById("accept-cookies");
        const reject = document.getElementById("reject-cookies");

        if (!localStorage.getItem("cookieConsent")) {
            banner.style.display = "block";
        }

        accept.onclick = () => {
            localStorage.setItem("cookieConsent", "accepted");
            banner.style.display = "none";
        };

        reject.onclick = () => {
            localStorage.setItem("cookieConsent", "rejected");
            banner.style.display = "none";
        };
    });
</script>