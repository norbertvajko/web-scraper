<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 about-section">
                <h3>Little description</h3>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                    deserunt mollit anim id est laborum."</p>
                <ul class="social-links d-flex ps-0">
                    <li><a href="https://github.com/norbertvajko" target="_blank"><i class="fa fa-github"
                                                                                     aria-hidden="true"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
            </div>

            <div class="col-md-6 text-end contact-section text-sm-center col text-center">
                <h3>Contact Info</h3>
                <ul class="contact-info">
                    <li><i class="fa fa-map-marker" aria-hidden="true"><a
                                href="https://www.google.com/maps/place/Strada+Nicolae+B%C4%83lcescu+22,+Arad/@46.1703727,21.3171513,17z/data=!3m1!4b1!4m5!3m4!1s0x474599016319a9b3:0xc7f128d36aedf597!8m2!3d46.170369!4d21.31934"
                                target="_blank">Strada Nicolae Bălcescu 22, Arad</a></i></li>
                    <li><i class="fa fa-phone" aria-hidden="true"><a href="tel:123-456-7890">070-000-0000</a></i></li>
                    <li><i class="fa fa-envelope" aria-hidden="true"><a
                                href="mailto:aaaa@email.com">norbertvajko@yahoo.com</a></i></li>
                </ul>
            </div>
        </div>

        <div class="newsletter-area container  my-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="newsletter-header m-auto text-center">
                        <h5>Do you want to receive smart shopping advice from us?</h5>
                        <p>Then subscribe to our newsletter!</p>
                    </div>

                    <form class="newsletter-form" action="/includes/newsLetterValidation.php" method="post" id="newsLetterForm">
                        <div class="d-flex justify-content-center flex-column flex-md-row w-50 align-items-center m-auto">
                            <label class="w-100">
                                <input type="email" class="form-control mt-3 " placeholder="Enter e-mail" id="newsletterEmail" name="newsLetterName">
                            </label>
                            <a  onclick="newsLetterPopup(); save_newsletter();return false;" class="subscribe-button position-relative d-flex flex-wrap ms-3 mt-3">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                Subscribe
                            </a>
                        </div>
                        <div class="newsletter-popup" id="newsLetterPopup">
                            <div class="overlay" onclick="newsLetterPopup();"></div>
                            <div class="content">
                                <div class="close-btn" onclick="newsLetterPopup();">&times;</div>
                                <h6 id="newsletterSuccess"></h6>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container text-center copyright-section">
            <p class="m-0">Copyright © 2022 Scrappy. All rights reserved.</p>
        </div>
    </div>
</footer>

<script src="/assets/js/newsLetterForm.js"></script>
<script src="/assets/js/newsLetterPopup.js"></script>