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

    <title>Contact</title>
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

    <div class="contact">
        <h1>Contact Us</h1>
        <form class="contactus">
            <label for="fname">First Name</label>
            <input id="fname" name="firstname" placeholder="Your name" type="text">

            <label for="lname">Last Name</label>
            <input id="lname" name="lastname" placeholder="Your last name" type="text">

            <label for="email">E-mail</label>
            <input id="email" name="mail" placeholder="Your E-mail" type="text">

            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Leave us a message"></textarea>
            <input type="submit" value="Submit">

        </form>
    </div>
</div>
<footer>
    <p>Author: Vajko Norbert</p>
    <p><a href="mailto:hege@example.com">norbertvajko@yahoo.com</a></p>
</footer>
</body>
</html>