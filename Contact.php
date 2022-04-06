<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web Scrape , Search products ">
    <meta name="keywords" content="Scrape , Crawl , Web Scrape , Web Crawler">
    <meta name="author" content="Vajko Norbert">
    <meta http-equiv="refresh" content="30">
    <!--Setting the viewport to make your website look good on all devices:-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Scrape Products you want</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="header">
    <video autoplay loop class="video" muted playsinline>
        <source src="assets/home-video.mp4" type="video/mp4">
    </video>
    <nav>
        <img src="assets/logo.jpg" class="logo">
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="About Us.php">About Us</a></li>
            <li class="nav-dropdown">
                <a class="nav-dropdown-main-link" href="Services.php">Services</a>
                <div class="s-submenu nav-dropdown-links">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                </div>
            </li>
            <li><a href="Contact.php">Contact</a></li>
            <li class="btn">Sign up</li>
        </ul>
    </nav>

    <div class="contact">
        <h1>Contact Us</h1>
        <form class="contactus">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name">

            <label for="email">E-mail</label>
            <input type="text" id="email" name="mail" placeholder="Your E-mail">

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