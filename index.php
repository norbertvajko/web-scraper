<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>


    <meta charset="UTF-8">
    <meta content="Search engine for IT products and compare them" name="description">
    <meta content="Best offer, IT Products , Scrape" name="keywords">
    <meta content="Vojko Norbert" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Scrappy</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="icon" type="image/x-icon" href="assets/images/spider-title-logo.png">
    <link href="assets/css/home-page.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"-->
    <!--            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"-->
    <!--            crossorigin="anonymous"></script>-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>


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
                <div class="terminal-body position-relative">
                    <div class="terminal-question px-5 py-5" id="msgText">
                    </div>
                    <div class="terminal-answer">
<!--                       <form method="POST" action="Products.php>    -->
                                <input type="text" id="inputText" class="terminal-search"/>
<!--                        </form>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!----------------------------------------------- End Banner Area ----------------------------------------------------->


<!----------------------------------------------- Start Main Area ----------------------------------------------------->
<main class="main-content">
    <section class="main-features p-3">
        <div class="container p-4">
            <div class="row">
                <h2 class="main-features-title text-center">MAIN FEATURES</h2>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="price-comparassion p-3 my-3 ">
                        <div class="price-comparassion-header d-flex justify-content-between align-items-center flex-lg-row flex-column" >
                            <img src="assets/images/output-onlinepngtools.png " class="img-fluid price-comparassion-logo ">
                            <h2 class="price-comparassion-title text-center ">Detailed price comparison</h2>
                        </div>
                        <div class="price-comparassion-description">
                            <ul class="price-comparassion-list py-3">
                                <li class="price-list "><i class="fa fa-check me-2" aria-hidden="true"></i>Gather data at
                                    scale from a majority of websites
                                </li>
                                <li class="price-list"><i class="fa fa-check me-2" aria-hidden="true"></i>Real-time data
                                    collection in HTML format
                                </li>
                                <li class="price-list"><i class="fa fa-check me-2" aria-hidden="true"></i>100% data
                                    delivery
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="price-comparassion p-3 my-3 ">
                        <div class="price-comparassion-header d-flex justify-content-between align-items-center flex-lg-row flex-column">
                            <img src="assets/images/price-alert.png " class="img-fluid price-comparassion-logo">
                            <h2 class="price-comparassion-title text-center ">
                                Price Change Alerts
                            </h2>
                        </div>
                        <div class="price-comparassion-description">
                            <ul class="price-comparassion-list py-3">
                                <li class="price-list"><i class="fa fa-check me-2" aria-hidden="true"></i>Gather
                                    data at
                                    scale from a majority of websites
                                </li>
                                <li class="price-list"><i class="fa fa-check me-2" aria-hidden="true"></i>Real-time
                                    data
                                    collection in HTML format
                                </li>
                                <li class="price-list"><i class="fa fa-check me-2" aria-hidden="true"></i>100% data
                                    delivery
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="price-comparassion p-3 my-3">
                        <div class="price-comparassion-header d-flex justify-content-between align-items-center flex-lg-row flex-column">
                            <img src="assets/images/price-analyt.png " class="img-fluid price-comparassion-logo">
                            <h2 class="price-comparassion-title text-center ">Reporting & Price Analytics</h2>
                        </div>
                        <div class="price-comparassion-description">
                            <ul class="price-comparassion-list py-3">
                                <li class="price-list"><i class="fa fa-check me-2" aria-hidden="true"></i>Gather data at
                                    scale from a majority of websites
                                </li>
                                <li class="price-list"><i class="fa fa-check me-2" aria-hidden="true"></i>Real-time data
                                    collection in HTML format
                                </li>
                                <li class="price-list"><i class="fa fa-check me-2" aria-hidden="true"></i>100% data
                                    delivery
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="carousel-best-offer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="carousel-header">
                        <h3 class="carousel-title my-3">Most searched products</h3>
                    </div>
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner py-3 px-py-88">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="assets/images/product1.jpg" class="img-fluid"
                                                     alt="product-img">
                                            </div>
                                            <div class="thumb-content">
                                                <h6>Telefon mobil Motorola Moto E7 Power, Dual SIM, 64GB, 4GB RAM, 5000
                                                    mAh, 4G, Tahiti Blue</h6>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star-o"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p class="item-price">
                                                    <span style="text-decoration: line-through;">500 lei</span>
                                                    <span>300 lei</span>
                                                </p>
                                                <i class="fa fa-heart favorite-icon position-absolute top-0 right-0"
                                                   href="#"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="assets/images/product2.jpg" class="img-fluid"
                                                     alt="product-img">
                                            </div>
                                            <div class="thumb-content">
                                                <h6>Telefon mobil Motorola Moto E7 Power, Dual SIM, 64GB, 4GB RAM, 5000
                                                    mAh, 4G, Tahiti Blue</h6>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star-o"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p class="item-price">
                                                    <span style="text-decoration: line-through;">500 lei</span>
                                                    <span>300 lei</span>
                                                </p>
                                                <i class="fa fa-heart favorite-icon" href="#"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="assets/images/product1.jpg" class="img-fluid"
                                                     alt="product-img">
                                            </div>
                                            <div class="thumb-content">
                                                <h6>Telefon mobil Motorola Moto E7 Power, Dual SIM, 64GB, 4GB RAM, 5000
                                                    mAh, 4G, Tahiti Blue</h6>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star-o"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p class="item-price">
                                                    <span style="text-decoration: line-through;">500 lei</span>
                                                    <span>300 lei</span>
                                                </p>
                                                <i class="fa fa-heart favorite-icon" href="#"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="assets/images/product3.jpg" class="img-fluid"
                                                     alt="product-img">
                                            </div>
                                            <div class="thumb-content">
                                                <h6>Telefon mobil Motorola Moto E7 Power, Dual SIM, 64GB, 4GB RAM, 5000
                                                    mAh, 4G, Tahiti Blue</h6>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star-o"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p class="item-price">
                                                    <span style="text-decoration: line-through;">500 lei</span>
                                                    <span>300 lei</span>
                                                </p>
                                                <i class="fa fa-heart favorite-icon" href="#"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="assets/images/product3.jpg" class="img-fluid"
                                                     alt="product-img">
                                            </div>
                                            <div class="thumb-content">
                                                <h6>Telefon mobil Motorola Moto E7 Power, Dual SIM, 64GB, 4GB RAM, 5000
                                                    mAh, 4G, Tahiti Blue</h6>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star-o"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p class="item-price">
                                                    <span style="text-decoration: line-through;">500 lei</span>
                                                    <span>300 lei</span>
                                                </p>
                                                <i class="fa fa-heart favorite-icon" href="#"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="assets/images/product2.jpg" class="img-fluid"
                                                     alt="product-img">
                                            </div>
                                            <div class="thumb-content">
                                                <h6>Telefon mobil Motorola Moto E7 Power, Dual SIM, 64GB, 4GB RAM, 5000
                                                    mAh, 4G, Tahiti Blue</h6>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star-o"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p class="item-price">
                                                    <del>500 lei</del>
                                                    <span>300 lei</span>
                                                </p>
                                                <i class="fa fa-heart favorite-icon" href="#"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="assets/images/product1.jpg" class="img-fluid"
                                                     alt="product-img">
                                            </div>
                                            <div class="thumb-content">
                                                <h6>Telefon mobil Motorola Moto E7 Power, Dual SIM, 64GB, 4GB RAM, 5000
                                                    mAh, 4G, Tahiti Blue</h6>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star-o"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p class="item-price">
                                                    <span style="text-decoration: line-through;">500 lei</span>
                                                    <span>300 lei</span>
                                                </p>
                                                <i class="fa fa-heart favorite-icon" href="#"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="assets/images/product3.jpg" class="img-fluid"
                                                     alt="product-img">
                                            </div>
                                            <div class="thumb-content">
                                                <h6>Telefon mobil Motorola Moto E7 Power, Dual SIM, 64GB, 4GB RAM, 5000
                                                    mAh, 4G, Tahiti Blue</h6>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star-o"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p class="item-price">
                                                    <span style="text-decoration: line-through;">500 lei</span>
                                                    <span>300 lei</span>
                                                </p>
                                                <i class="fa fa-heart favorite-icon" href="#"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="assets/images/product3.jpg" class="img-fluid"
                                                     alt="product-img">
                                            </div>
                                            <div class="thumb-content">
                                                <h6>Telefon mobil Motorola Moto E7 Power, Dual SIM, 64GB, 4GB RAM, 5000
                                                    mAh, 4G, Tahiti Blue</h6>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star-o"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p class="item-price">
                                                    <span style="text-decoration: line-through;">500 lei</span>
                                                    <span>300 lei</span>
                                                </p>
                                                <i class="fa fa-heart favorite-icon" href="#"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="assets/images/product3.jpg" class="img-fluid"
                                                     alt="product-img">
                                            </div>
                                            <div class="thumb-content">
                                                <h6>Telefon mobil Motorola Moto E7 Power, Dual SIM, 64GB, 4GB RAM, 5000
                                                    mAh, 4G, Tahiti Blue</h6>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star-o"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p class="item-price">
                                                    <del>500 lei</del>
                                                    <span>300 lei</span>
                                                </p>
                                                <i class="fa fa-heart favorite-icon" href="#"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="assets/images/product3.jpg" class="img-fluid"
                                                     alt="product-img">
                                            </div>
                                            <div class="thumb-content">
                                                <h6>Telefon mobil Motorola Moto E7 Power, Dual SIM, 64GB, 4GB RAM, 5000
                                                    mAh, 4G, Tahiti Blue</h6>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star-o"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p class="item-price">
                                                    <span style="text-decoration: line-through;">500 lei</span>
                                                    <span>300 lei</span>
                                                </p>
                                                <i class="fa fa-heart favorite-icon" href="#"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="thumb-wrapper">
                                            <div class="img-box">
                                                <img src="assets/images/product3.jpg" class="img-fluid"
                                                     alt="product-img">
                                            </div>
                                            <div class="thumb-content">
                                                <h6>Telefon mobil Motorola Moto E7 Power, Dual SIM, 64GB, 4GB RAM, 5000
                                                    mAh, 4G, Tahiti Blue</h6>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star-o"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <p class="item-price">
                                                    <span style="text-decoration: line-through;">500 lei</span>
                                                    <span>300 lei</span>
                                                </p>
                                                <i class="fa fa-heart favorite-icon" href="#"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleInterval"
                                    data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleInterval"
                                    data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="scrappy-benefits">
        <div class="container">
            <h2>BENEFITS AREA</h2>
        </div>
    </section>

    <section class="newsletter">

    </section>
</main>
<!------------------------------------------------- End Main Area ----------------------------------------------------->

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
                        <div class="d-flex justify-content-center flex-column flex-md-row w-50 align-items-center m-auto">
                            <input type="email" class="form-control mt-3 " placeholder="Enter e-mail">
                            <a href="#" class="subscribe-button position-relative d-flex flex-wrap ms-3 mt-3">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                Subscribe
                            </a>
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

<script src="assets/js/terminalText.js"></script>
</body>
</html>