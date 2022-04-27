<!DOCTYPE html>
<body lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>


    <meta charset="UTF-8">
    <meta content="Search engine for IT products and compare them" name="description">
    <meta content="Best offer, IT Products , Scrape" name="keywords">
    <meta content="Vojko Norbert" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Products</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="icon" type="image/x-icon" href="assets/images/spider-title-logo.png">
    <link href="assets/css/home-page.css" rel="stylesheet">
    <link href="assets/css/results-page.css " rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>

<!--------------------------------------------- Start Nav Bar Area ---------------------------------------------------->

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top bor-sha">
    <div class="container">
        <a class="navbar-brand" href="#">
            <i class="navbar-logo mx-3 ps-1">Scrappy</i>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-menu"
                aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-menu" id="navbar1">
            <form class="search-form me-3">
                <div class="input-form w-100 position-relative">
                    <form id="getForm">
                        <input type="text" class="form-control" placeholder="Search" id="inputText">
                        <button type="button" id="button">get Data</button>
                    </form>
                </div>
            </form>
            <ul class="navbar-nav fw-500">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Products.php">Favorites</a>
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

<!----------------------------------------------- Start Main Area ----------------------------------------------------->
<main class="main-content">
    <div class="products" id="products1">
        <div class="card">
            <img class="card-img"
                 src="https://lcdn.altex.ro/media/catalog/product/T/e/Telefon_APPLE_iPhone_13_5G_128GB_Midnight_4_.jpg"
                 alt="card-photo">
            <div class="card-info">
                <h1 class="card-title" id="cardTitle"></h1>
                <span class="card-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <a class="rating-number" href="#">(13)</a>
                </span>
                <div class="card-price">
                    1209 lei
                </div>
                <div class="card-offer">
                    <a href="#" class="card-btn">Offers</a>
                </div>
            </div>
        </div>
<!--        <div class="card">-->
<!--            <img class="card-img"-->
<!--                 src="https://lcdn.altex.ro/media/catalog/product/T/e/Telefon_APPLE_iPhone_13_5G_128GB_Midnight_4_.jpg"-->
<!--                 alt="card-photo">-->
<!--            <div class="card-info">-->
<!--                <h1 class="card-title">Iphone 13 MAX 12 GB</h1>-->
<!--                <span class="card-rating">-->
<!--                    <i class="fa fa-star"></i>-->
<!--                    <i class="fa fa-star"></i>-->
<!--                    <i class="fa fa-star"></i>-->
<!--                    <i class="fa fa-star"></i>-->
<!--                    <i class="fa fa-star-o"></i>-->
<!--                    <a class="rating-number" href="#">(13)</a>-->
<!--                </span>-->
<!--                <div class="card-price">-->
<!--                    1209 lei-->
<!--                </div>-->
<!--                <div class="card-offer">-->
<!--                    <a href="#" class="card-btn">Offers</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="card">-->
<!--            <img class="card-img"-->
<!--                 src="https://lcdn.altex.ro/media/catalog/product/T/e/Telefon_APPLE_iPhone_13_5G_128GB_Midnight_4_.jpg"-->
<!--                 alt="card-photo">-->
<!--            <div class="card-info">-->
<!--                <h1 class="card-title">Iphone 13 MAX 12 GBdsadasdsa dsadas dsa asdas das dsa as</h1>-->
<!--                <span class="card-rating">-->
<!--                    <i class="fa fa-star"></i>-->
<!--                    <i class="fa fa-star"></i>-->
<!--                    <i class="fa fa-star"></i>-->
<!--                    <i class="fa fa-star"></i>-->
<!--                    <i class="fa fa-star-o"></i>-->
<!--                    <a class="rating-number" href="#">(13)</a>-->
<!--                </span>-->
<!--                <div class="card-price">-->
<!--                    1209 lei-->
<!--                </div>-->
<!--                <div class="card-offer">-->
<!--                    <a href="#" class="card-btn">Offers</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</main>

<!----------------------------------------------- Start Footer Area --------------------------------------------------->

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
                        <div
                                class="d-flex justify-content-center flex-column flex-md-row w-50 align-items-center m-auto">
                            <label>
                                <input type="email" class="form-control mt-3 " placeholder="Enter e-mail">
                            </label>
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
<!------------------------------------------------ End Footer Area ---------------------------------------------------->

<script src="assets/js/request.js"></script>

</body>
</html>
