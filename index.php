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
    <link href="assets/css/nav-bar.css" rel=stylesheet>
    <link href="assets/css/footer.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand m-4" href="#">Scrappy</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav px-5">
                <li><a href="index.php"><i class="fa fa-home"></i><span>Home</span></a></li>
                <li><a href="Favorites.php"><i class="fa fa-heart-o"></i><span>Favorites</span></a></li>
                <li><a href="Contact.php"><i class="fa fa-envelope-open"></i><span>Contact</span></a></li>
                <li><a href="About%20Us.php"><span>About us</span></a></li>
            </ul>
            <div class="sign-us">
                <button class="btn btn-primary" type="submit">Sign in</button>
                <button class="btn btn-secondary" type="submit">Register</button>
            </div>
        </div>
    </div>
</nav>

<header>
    <div class="grid">
        <div class="col">
            <div class="col-1-content">
                <h1>What you can accomplish with Scrappy?</h1>
                <ul class="col-1-content-list">
                    <li><i class="fa fa-check" aria-hidden="true"></i>Gather data at scale from a majority of websites
                    </li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>Real-time data collection in HTML format</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>100% data delivery</li>
                </ul>
            </div>
        </div>
        <div class="col">
            <div class="col-2-content">
                    <img src="assets/images/web-crawl.png" alt="web-crawl-development">
            </div>
        </div>
    </div>
</header>

<main class="content">

    <section class="product-search">
        <h2>Search your product!</h2>
        <div class="search">
            <div class="position-relative">
                <label>
                    <input class="input-box" placeholder="Search product.." type="text">
                </label>
                <button type="submit" class="submit-button"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </section>

    <!--    <section class="social-items">-->
    <!--        <h6>Social elements</h6>-->
    <!--        <div class="social-items-container">-->
    <!--            <ul class="social-items-links">-->
    <!--                <li><a href="https://github.com/norbertvajko" target="_blank"><i class="fa fa-github fa-5x"></i></a>-->
    <!--                </li>-->
    <!--                <li><a href="#"><i class="fa fa-linkedin fa-5x"></i></a></li>-->
    <!--                <li><a href="#"><i class="fa fa-twitter fa-5x"></i></a></li>-->
    <!--                <li><a href="#"><i class="fa fa-facebook fa-5x"></i></a></li>-->
    <!--            </ul>-->
    <!--        </div>-->
    <!--    </section>-->

    <section class="results">
        <h3>Results</h3>
        <div class="results-container">
            <div class="card">
                <div class="card-badge-box">
                    <span>Oferta Speciala!</span>
                </div>
                <div class="card-toolbox">
                    <button type="button" class="add-to-favorite">
                        <i class="fa fa-heart-o fa-2x"></i>
                    </button>
                </div>
                <div class="card-info">
                    <img src="assets/images/product1.jpg" alt="product-image"/>
                    <hr/>
                </div>
                <div class="card-title">
                    <a href="#">Telefon mobil Samsung Galaxy S21 FE, Dual SIM, 128GB, 6GB RAM, 5G, Olive</a>
                </div>
                <div class="card-rating">
                    <p>rating ******</p>
                </div>
                <div class="card-price">
                    <p>500 Lei</p>
                </div>
                <button>>Buy Now!</button>
            </div>
            <div class="card">
                <div class="card-toolbox">
                    <button type="button" class="add-to-favorite">
                        <i class="fa fa-heart-o fa-2x"></i>
                    </button>
                </div>
                <div class="card-badge-box">
                    <span>-20%</span>
                </div>
                <div class="card-info">
                    <img src="assets/images/product1.jpg" alt="product-image"/>
                    <hr/>
                </div>
                <div class="card-title">
                    <a href="#">Telefon mobil Samsung Galaxy S21 FE, Dual SIM, 128GB, 6GB RAM, 5G, Olive</a>
                </div>
                <div class="card-rating">
                    <p>rating ******</p>
                </div>
                <div class="card-price">
                    <p>500 Lei</p>
                </div>
                <button>Buy Now!</button>
            </div>
            <div class="card">
                <div class="card-toolbox">
                    <button type="button" class="add-to-favorite">
                        <i class="fa fa-heart-o fa-2x"></i>
                    </button>
                </div>
                <div class="card-info">
                    <img src="assets/images/product1.jpg" alt="product-img"/>
                    <hr/>
                </div>
                <div class="card-title">
                    <a href="#">Telefon mobil Samsung Galaxy S21 FE, Dual SIM, 128GB, 6GB RAM, 5G, Olive</a>
                </div>
                <div class="card-rating">
                    <p>rating ******</p>
                </div>
                <div class="card-price">
                    <p>500 Lei</p>
                </div>
                <button>Buy Now!</button>
            </div>
        </div>
    </section>

    <section class="newsletter">
        <div class="subscribe">
            <h5>Subscribe to our newsletter</h5>
        </div>
    </section>
</main>


<!--<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>-->
<footer>
    <div class="footer-container">
        <div class="about-section">
            <h3>Little description</h3>
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            <ul class="social-links">
                <li><a href="https://github.com/norbertvajko" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></li>
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

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>
</html>