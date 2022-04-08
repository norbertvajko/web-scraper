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
    <link href="css/contact-page.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
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
        <h1>Contact Us</h1>
        <form class="contact-us-form">
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
</section>
<footer>
    <span>Author:Vojko Norbert</span>
    <p><a href="mailto:hege@example.com">norbertvajko@yahoo.com</a></p>
    <p><a href="Favorites.php">Favorites</a></p>
</footer>
</body>
</html>