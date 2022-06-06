<link href="../../assets/css/consent-banner.css" rel="stylesheet">

<div class="cookie-container" id="cookieContainer">
    <div class="consent-title text-center">
        <h1>We value your privacy <img src="../../assets/images/cookie.png" class="img-fluid ms-2" alt=""></h1>

    </div>
    <div class="consent-description">
        <p>
            We and selected third parties use cookies or similar technologies for technical purposes and, with your
            consent, for other purposes as specified in the <a href="#">cookie policy.</a> Denying consent may make
            related features
            unavailable.

            You can consent to the use of such technologies by using the “Allow” button. By closing this notice, you
            continue without accepting.
        </p>
    </div>
    <div class="consent-button">
<!--        --><?php
//            if ($_POST('acceptCookies') !== null) {
//                setcookie('consent_cookie','User consented',time()+4800);
//            }
//        ?>
        <button class="btn-accept-cookies" id="consentButton" name="acceptCookies">Allow cookies</button>
    </div>
</div>
<script src="../../assets/js/consentPopUp.js"></script>







