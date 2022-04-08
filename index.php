<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta content="Search engine for IT products and compare them" name="description">
    <meta content="Best offer, IT Products , Scrape" name="keywords">
    <meta content="Vojko Norbert" name="author">
    <meta content="30" http-equiv="refresh">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Search for the best deal right now!</title>
    <link href="css/home-page.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<section>
    <div class="header">
        <nav>
            <img id="logo" src="assets/new-logo.png" alt="logo-image">

            <ul class="nav-links">
                <li><i class="fa fa-home fa-2x"></i><a href="index.php">Home</a></li>
                <li><i class="fa fa-heart-o fa-2x"></i><a href="Favorites.php">Favorites</a></li>
                <li><i class="fa fa-envelope-open fa-2x"></i><a href="Contact.php">Contact</a></li>
                <li>
                    <button type="button">Log In</button>
                </li>
                <li>
                    <button type="button">Register</button>
                </li>
            </ul>
        </nav>
    </div>
</section>

<section>
    <div class="content">
        <h1>With Scrappy you can easily search for the best deal of any product you want!</h1>

        <form>
            <h2>Search your product! </h2>
            <label>
                <input placeholder="Search product.." type="text">
            </label>
            <button type="submit">Search</button>
        </form>

        <ul class="social-vertical-items">
            <li><a href="https://github.com/norbertvajko" target="_blank"><i class="fa fa-github fa-5x"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin fa-5x"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter fa-5x"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook fa-5x"></i></a></li>
        </ul>

        <h3>Results</h3>
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

        <div class="app-container">
            <a href="#" class="app-badge">
                <img src="https://s13emagst.akamaized.net/assets/ro/images/google-play-badge.svg" alt="Store badge">
            </a>
            <a href="#" class="app-badge">
                <img src="https://s13emagst.akamaized.net/assets/ro/images/apple-store-badge.svg" alt="Store badge">
            </a>
        </div>
    </div>
</section>


<footer>
    <span>Author:Vojko Norbert</span>
    <p><a href="mailto:hege@example.com">norbertvajko@yahoo.com</a></p>
    <p><a href="Favorites.php">Favorites</a></p>
</footer>
</body>
</html>