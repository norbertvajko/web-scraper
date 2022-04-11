<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta content="Search engine for IT products and compare them" name="description">
    <meta content="Best offer, IT Products , Scrape" name="keywords">
    <meta content="Vojko Norbert" name="author">
    <!--    <meta content="30" http-equiv="refresh">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Search for the best deal right now!</title>

    <link rel="icon" type="image/x-icon" href="assets/images/spider-title-logo.png">

    <link href="assets/css/home-page.css" rel="stylesheet">
    <link href="assets/css/nav-bar.css" rel=stylesheet>
    <link href="assets/css/body.css" rel="stylesheet">
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
        <li><a href="About us">About us</a></li>
        <li>
            <button type="button">Log In</button>
        </li>
        <li>
            <button type="button">Register</button>
        </li>
    </ul>
</nav>


<header>
    <h1>With Scrappy you can easily search for the best deal of any product you want!</h1>
</header>
<hr/>

<main class="content">

    <section class="product-search">
        <div class="container">
            <form class="product-search-container">
                <h2>Search your product!</h2>
                <label>
                    <input placeholder="Search product.." type="text">
                </label>
                <button type="submit">Search</button>
            </form>
        </div>
    </section>

    <section class="social-items">
        <div class="social-items-container">
            <h6>Social elements</h6>
            <ul class="social-items-links">
                <li><a href="https://github.com/norbertvajko" target="_blank"><i class="fa fa-github fa-5x"></i></a>
                </li>
                <li><a href="#"><i class="fa fa-linkedin fa-5x"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter fa-5x"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook fa-5x"></i></a></li>
            </ul>
        </div>
    </section>

    <section class="product-results">
        <div class="product-results-container">
            <h3>Results</h3>
            <table class="product-results-table">
                <thead>
                <tr>
                    <th scope=col>Product name</th>
                    <th scope=col>Provider</th>
                    <th scope=col>Ratings</th>
                    <th scope=col>Reviews</th>
                    <th scope=col>Price</th>
                </tr>
                </thead>
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
            </table>
        </div>
    </section>

    <section class="apps">
        <div class="app-container-badges">
            <h4>Download the app on your mobile!</h4>
            <a href="#" class="app-badge">
                <img src="https://s13emagst.akamaized.net/assets/ro/images/google-play-badge.svg" alt="Store badge">
            </a>
            <a href="#" class="app-badge">
                <img src="https://s13emagst.akamaized.net/assets/ro/images/apple-store-badge.svg" alt="Store badge">
            </a>
        </div>
    </section>
    <hr/>
</main>

<footer>
    <p>Author:Vajko Norbert</p>
    <p><a href="mailto:hege@example.com">norbertvajko@yahoo.com</a></p>
    <p><a href="Favorites.php">Favorites</a></p>
</footer>
</body>
</html>