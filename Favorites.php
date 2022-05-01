<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="Free Web Scrape , Search products " name="description">
    <meta content="Scrape , Crawl , Web Scrape , Web Crawler" name="keywords">
    <meta content="Vajko Norbert" name="author">
    <meta content="30" http-equiv="refresh">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Favorites</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="assets/css/favorites-page.css" rel="stylesheet">
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
                    <button type="button" class="log-in-btn">Log In</button>
                </li>
                <li class="nav-item me-3 me-lg-0 ">
                    <button type="button" class="register-btn">Register</button>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--------------------------------------------- End Nav Bar Area ------------------------------------------------------>

<header>
    <div class="favorites-content-description">
        <h1>Your favorite products   / HEADER</h1>
        <ul>
            <li><a href="#">Favorite products</li>
            <li><a href="#">Recent views</a></li>
        </ul>
    </div>
</header>


<main class="content">
    <section>
        <h2>From here is the content</h2>
        <img src="assets/images/empty-cart.jpg" alt="empty cart" id="empty-cart">
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

            <div class="col-md-6 text-end contact-section">
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
    </div>
    <div class="container text-center copyright-section">
        <p>Copyright © 2022 Scrappy. All rights reserved.</p>
    </div>
</footer>


<script src="assets/js/logInPopUp.js"></script>


</body>
</html>