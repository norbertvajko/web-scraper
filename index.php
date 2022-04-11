<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta content="Search engine for IT products and compare them" name="description">
    <meta content="Best offer, IT Products , Scrape" name="keywords">
    <meta content="Vojko Norbert" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Search for the best deal right now!</title>

    <link rel="icon" type="image/x-icon" href="assets/images/spider-title-logo.png">
    <link href="assets/css/home-page.css" rel="stylesheet">
    <link href="assets/css/nav-bar.css" rel=stylesheet>
    <link href="assets/css/footer.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<nav>
    <img id="logo" src="assets/images/new-logo.png" alt="logo-image">

    <ul class="nav-links">
        <li><i class="fa fa-home fa-2x"></i><a href="index.php">Home</a></li>
        <li><i class="fa fa-heart-o fa-2x"></i><a href="Favorites.php">Favorites</a></li>
        <li><i class="fa fa-envelope-open fa-2x"></i><a href="Contact.php">Contact</a></li>
        <li><a href="About%20Us.php">About us</a></li>
        <li>
            <button type="button">Log In</button>
        </li>
        <li>
            <button type="button">Register</button>
        </li>
    </ul>
</nav>
<hr/>

<header>
    <h1>With Scrappy you can easily search for the best deal of any product you want!</h1>
</header>

<hr/>
<main class="content">

    <section class="product-search">
        <h2>Search your product!</h2>
        <div class="search">
            <input class="input-box" placeholder="Search product.." type="text">
            <button type="submit" class="submit-button"><i class="fa fa-search"></i></button>
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
                <div class="card-toolbox">
                    <button type="button" class="add-to-favorite">
                        <i class="fa fa-heart-o fa-2x"></i>
                    </button>
                </div>
                <div class="card-info">
                    <img src="assets/images/product1.jpg"/>
                    <hr/>
                </div>
                <div class="card-content">
                    <ul>
                        <li>IPHONE X</li>
                        <li>SC ELECTRONIX SRL</li>
                        <li>5 STARS</li>
                        <li>View Reviews</li>
                        <li>1000$</li>
                    </ul>
                    <button><a href="#">Buy Now!</a></button>
                </div>
            </div>
        </div>
    </section>

    <section class="newsletter">
        <div class="subscribe">
            <h5>Subscribe to our newsletter</h5>
        </div>
    </section>
</main>
<hr/>

<footer>
    <p>Author:Vajko Norbert</p>
    <p><a href="mailto:hege@example.com">norbertvajko@yahoo.com</a></p>
    <p><a href="Favorites.php">Favorites</a></p>
</footer>
</body>
</html>