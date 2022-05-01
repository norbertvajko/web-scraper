<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="Free Web Scrape , Search products " name="description">
    <meta content="Scrape , Crawl , Web Scrape , Web Crawler" name="keywords">
    <meta content="Vajko Norbert" name="author">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Contact</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="assets/css/contact-page.css" rel="stylesheet">
    <link href="assets/css/home-page.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>


<!--------------------------------------------- Start Nav Bar Area ---------------------------------------------------->

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top bor-sha">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="https://avatars.githubusercontent.com/u/28140896?s=200&v=4">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-menu"
                aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-menu" id="navbar1">
            <ul class="navbar-nav col-md-5 fw-500 fb-fc">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Results.php">Favorites</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="About%20Us.php">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Contact.php">Contact</a>
                </li>
            </ul>
            <form class="search-form mx-5 w-50 m-auto">
                <div class="input-form">
                    <label class="input-label w-100">
                        <input type="search" class="form-control" placeholder="Search"/>
                    </label>
                </div>
            </form>

            <ul class="navbar-nav d-flex flex-row ms-auto">
                <li class="nav-item me-3 me-lg-0">
                    <button type="button" class="log-in-btn" id="showLogin">Log In</button>
                </li>
                <div class="popup ">
                    <div class="close-btn">&times;</div>
                    <div class="form">
                        <h3>Log In</h3>
                        <div class="form-element d-flex flex-column">
                            <label for="email">Email</label>
                            <input type="text" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-element d-flex flex-column">
                            <label for="password">Password</label>
                            <input type="text" id="password" placeholder="Enter password">
                        </div>
                        <div class="form-element">
                            <input type="checkbox" id="remember-me">
                            <label for="remember-me">Remember me</label>
                        </div>
                        <div class="form-element">
                            <button>Sign In</button>
                        </div>
                        <div class="form-element">
                            <a href="#">Forgot password?</a>
                        </div>
                    </div>
                </div>
                <li class="nav-item me-3 me-lg-0 ">
                    <button type="button" class="register-btn">Register</button>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--------------------------------------------- End Nav Bar Area ------------------------------------------------------>

<header>
    <h1>Here is the header</h1>
</header>

<main class="content">
    <section class="contact-us">
        <div class="container">
            <div class="contact-wrap">
                <form class="contact-form w-100 d-flex flex-wrap justify-content-between pb-5">
                    <h1 class="contact-form-title w-100 d-flex justify-content-start pb-5">Contact Us</h1>
                    <div class="contact-form-row row w-100 d-flex flex-row">
                        <div class="contact-input position-relative w-50">
                            <span class="label-input">Your Name</span>
                            <input class="input" type="text" name="name" id="formName" placeholder="Enter your name">
                        </div>
                        <div class="contact-input w-50">
                            <span class="label-input">E-mail</span>
                            <input class="input" type="email" name="email" id="formEmail" placeholder="Enter your e-mail">
                        </div>
                    </div>
                    <div class="contact-form-row row w-100 d-flex flex-row">
                        <div class="contact-input d-flex flex-column w-100 mt-40 ">
                            <span class="label-input">Message</span>
                            <textarea class="textarea-input" name="message" id="formMessage"
                                      placeholder="Your message here..."></textarea>
                        </div>
                    </div>
                    <div class="contact-form-button w-100 d-flex flex-wrap mt-40">
                        <button class="button-form" onclick="submitPopUp()">
                            <span>
                                Submit
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>


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
                    <form class="newsletter-form">
                        <div class="d-flex justify-content-center flex-column flex-md-row w-50 align-items-center m-auto">
                            <input type="email" class="form-control mt-3 " placeholder="Enter e-mail">
                            <button type="submit" class="subscribe-button d-flex flex-wrap ms-3 mt-3">Subscribe</button>
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

<script>   //ex 1
    function submitPopUp() {
        let name = document.getElementById("formName").value;
        let email = document.getElementById("formEmail").value;
        let message = document.getElementById("formMessage").value;
        const x = [name,email,message];
        if (x != null) {
            alert(x);
        }
    }
</script>
<script> //ex 2
    document.addEventListener('mouseleave' , () => console.log('Mouse left window'));
    document.addEventListener('mouseenter' , () => console.log('Mouse entered window'));
</script>

<script> //ex 3

    window.addEventListener('scroll',scrollEffect);

    let winHeight = window.innerHeight/2;

    function scrollEffect() {
        if (window.scrollY > winHeight) {
            alert('You scrolled more than 50% height');
                return;
       }
    }



</script>
<script src="assets/js/logInPopUp.js"></script>
</body>
</html>