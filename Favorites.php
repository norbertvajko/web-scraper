<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="Free Web Scrape , Search products " name="description">
    <meta content="Scrape , Crawl , Web Scrape , Web Crawler" name="keywords">
    <meta content="Vajko Norbert" name="author">
    <meta content="30" http-equiv="refresh">
    <!--Setting the viewport to make your website look good on all devices:-->
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Favorites</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class="header">
    <video autoplay class="video" loop muted playsinline>
        <source src="assets/home-video.mp4" type="video/mp4">
    </video>
    <nav>
        <img class="logo" src="assets/logo.jpg">
        <button id="play-btn"><i class="fa fa-play"></i></button>

        <ul class="nav-links">
            <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>

            <li class="nav-dropdown"><i class="fa fa-list"></i>
                <a class="nav-dropdown-main-link" href="Products.php">Products</a>
                <div class="s-submenu nav-dropdown-links">
                    <a href="#">Computers</a>
                    <a href="#">Laptops</a>
                    <a href="#">Phones</a>
                    <a href="#">TV</a>
                </div>
            </li>


            <li><i class="fa fa-heart-o"></i><a href="Favorites.php">Favorites</a></li>

            <li><i class="fa fa-envelope-open"></i><a href="Contact.php">Contact</a></li>

            <li class="btn">Sign up</li>
        </ul>
    </nav>

    <section>
        <div class="menu-content-fav">
            <h2>Hey , now you are annonymous.</h2>
            <p>You can log in to keep your favorite products</p>
            <button id="log-in-btn" type="button">Log in</button>
            <button id="sign-up-btn" type="button">New account</button>
        </div>
    </section>

    <section>
        <div class="favorites-content">
            <h1>Favorites: You have 0 products</h1>
            <img alt="empty-cart" src="assets/empty-cart.jpg">
        </div>
    </section>

</div>
<footer>
    <p>Author: Vajko Norbert</p>
    <p><a href="mailto:hege@example.com">norbertvajko@yahoo.com</a></p>
</footer>
</body>
</html>