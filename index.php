<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>


    <meta charset="UTF-8">
    <meta content="Search engine for IT products and compare them" name="description">
    <meta content="Best offer, IT Products , Scrape" name="keywords">
    <meta content="Vojko Norbert" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>Scrappy</title>

    <link rel="icon" type="image/x-icon" href="assets/images/spider-title-logo.png">
    <link href="assets/css/home-page.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

</head>
<body>

<!--------------------------------------------- Start Nav Bar Area ---------------------------------------------------->

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top bor-sha">
    <div class="container">
        <a class="navbar-brand" href="#">
            <i class="navbar-logo mx-3 ps-1">Scrappy</i>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-menu" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-menu" id="navbar1">
            <form class="search-form me-3">
                <div class="input-form w-100">
                    <input type="search" class="form-control" placeholder="Search"/>
                </div>
            </form>
            <ul class="navbar-nav fw-500">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Favorites.php">Favorites</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="About%20Us.php">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Contact.php">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav d-flex flex-row ms-auto">
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link log-in" href="#" role="button">Log In</a>
                </li>
                <li class="nav-item me-3 me-lg-0 ">
                    <a class="nav-link register" href="#" role="button">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--------------------------------------------- End Nav Bar Area ------------------------------------------------------>


<!--------------------------------------------- Start Banner Area ----------------------------------------------------->
<header class="banner-area">
    <div class="container">
        <div class="row py-6">
            <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12 banner-text">
                <h1>Scrappy <br>
                    Web Scraping tool</h1>
                <p>kdasndasodnndadlkdnaadansakd <br>
                    fdsnfsdkfnsflfsdfs</p>
            </div>
            <div class="terminal-banner col-lg-6 col-md-12 col-xs-12 col-sm-12">
                <div class="terminal-header">
                    <div class="terminal-icons">
                        <div class="terminal-icon-close"></div>
                        <div class="terminal-icon-min"></div>
                        <div class="terminal-icon-max"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!----------------------------------------------- End Banner Area ----------------------------------------------------->


<!----------------------------------------------- Start Main Area ----------------------------------------------------->
<main class="main-content">
    <section class="carousel-best-offer">
        <div class="container">
            <div class="carousel-header">
                <h3 class="carousel-title my-3">Oferta zilei</h3>
            </div>
            <div class="row">
                <div class="col-md-12 product-item ">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                            <div class="item-active">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="assets/images/product1.jpg" class="img-fluid product-image"
                                                     alt="product-image"/>
                                            </div>
                                            <div class="thumbnail-content">
                                                <h6 class="thumbnail-title">Laptop HP 250 G8 cu procesor Intel Celeron
                                                    N4020, 15.6", HD, 4GB, 256GB SSD, Intel UHD Graphics, Free DOS, Dark
                                                    Ash Silver</h6>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <p class="item-price"><strike>$400.00</strike> <span>$369.00</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!------------------------------------------------- End Main Area ----------------------------------------------------->

<!----------------------------------------------- Start Footer Area --------------------------------------------------->

<footer>
    <div class="footer-container">
        <div class="about-section">
            <h3>Little description</h3>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum."</p>
            <ul class="social-links">
                <li><a href="https://github.com/norbertvajko" target="_blank"><i class="fa fa-github"
                                                                                 aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <div class="util-links-section">
            <h3>Page links</h3>
            <ul class="util-links-ref">
                <li><a href="Contact.php">Contact</a></li>
                <li><a href="Contact.php">Sfdsfsdfsdfdsfs</a></li>
                <li><a href="Contact.php">FSFSDFDSFASD</a></li>
                <li><a href="Contact.php">gsdgsdfdsfasfassaf</a></li>
            </ul>
        </div>
        <div class="contact-section">
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
    <div class="copyright-section">
        <p>Copyright © 2022 Scrappy. All rights reserved.</p>
    </div>
</footer>
<!------------------------------------------------ End Footer Area ---------------------------------------------------->

</body>
</html>