<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta content="Search engine for IT products and compare them" name="description">
    <meta content="Best offer, IT Products , Scrape" name="keywords">
    <meta content="Vajko Norbert" name="author">
    <meta content="30" http-equiv="refresh">
    <!--Setting the viewport to make your website look good on all devices:-->
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Search for the best deal</title>
        <link href="css/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class="home-header">
<!--    <video autoplay class="video" loop muted playsinline>-->
<!--        <source src="assets/home-video.mp4" type="video/mp4">-->
<!--    </video>-->

<section>
    <nav>
        <img class="logo" src="assets/logo.jpg" alt="logo-image">
        <button id="play-btn"><i class="fa fa-play"></i></button>

        <ul class="nav-links">
            <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>

            <li class="nav-dropdown"><i class="fa fa-list"></i>
                <a class="nav-dropdown-main-link" href="#">Products</a>
                <div class="s-submenu nav-dropdown-links">
                    <a href="Products.php">Computers</a>
                    <a href="#">Laptops</a>
                    <a href="#">Phones</a>
                    <a href="#">TV</a>
                </div>
            </li>

            <li><i class="fa fa-heart-o"></i><a href="Favorites.php">Favorites</a></li>
            <li><i class="fa fa-envelope-open"></i><a href="Contact.php">Contact</a></li>

            <li><button class="button-collapse" type="button"> <img src="assets/navbar-icon-17.jpg  " height =50" width="50" alt="navbar-button"/></button>
                <div class="button-collapse-content">

                </div>
            </li>

        </ul>
    </nav>
</section>



    <section>
        <div class="content">
            <div class="content-description">
                <h1>With Scrappy you can easily search for the best deal of any product you want!</h1>
            </div>

            <h2>Search your product! </h2>
            <form>
                <input placeholder="Search product.." type="text">
                <button type="submit">Search</button>
            </form>

            <ul class="social-vertical-items">
                <li> <a href="www.github.com/norbertvajko"><i class="fa fa-github fa-5x"></i></a></li>
                <li><i class="fa fa-linkedin fa-5x"></i></li>
                <li><i class="fa fa-twitter fa-5x"></i></li>
                <li><i class="fa fa-facebook fa-5x"></i></li>
            </ul>

        </div>
    </section>
</div>

<section id="results-table">
    <h1>Results</h1>
    <table class="result-table">
        <thead>
        <tr>
            <th scope=col>Product name</th>
            <th scope=col>Provider</th>
            <th scope=col>Ratings</th>
            <th scope=col>Reviews</th>
            <th scope=col>Price</th>
        </tr>
        </thead>
    </table>
    <tbody>
    <tr>
        <th scope="row"></th>
        <td>Result</td>
        <td>Result</td>
        <td>Result</td>
        <td>Result</td>
        <td>Result</td>
    </tr>
    </tbody>
</section>

<!--<section>-->
<!--    <div id="daily-offer">-->
<!--        <h3><a href="#">Don't miss our daily offer!</a></h3>-->
<!--    </div>-->
<!--</section>-->

<footer>
    <p>Author: Vajko Norbert</p>
    <p><a href="mailto:hege@example.com">norbertvajko@yahoo.com</a></p>
    <p><a href="Favorites.php">Favorites</a></p>
</footer>
</body>
</html>