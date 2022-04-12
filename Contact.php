<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="Free Web Scrape , Search products " name="description">
    <meta content="Scrape , Crawl , Web Scrape , Web Crawler" name="keywords">
    <meta content="Vajko Norbert" name="author">
    <meta content="30" http-equiv="refresh">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Contact</title>

    <link href="assets/css/contact-page.css" rel="stylesheet">
    <link href="assets/css/nav-bar.css" rel=stylesheet>
    <link href="assets/css/footer.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>


<nav>
    <div class="nav-main">
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
    </div>
</nav>

<header>
    <h1>Here is the header</h1>
</header>

<main class="content">
    <section>
        <h1>Contact</h1>
        <div class="contact-us">
        <form class="contact-us-form">

            <label for="fname">First Name</label>
            <input id="fname" name="firstname" placeholder="Your name" type="text"> <br>

            <label for="email">E-mail</label>
            <input id="email" name="mail" placeholder="Your E-mail" type="text"> <br>

            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Leave us a message"></textarea>
            <input type="submit" value="Submit">
        </form>
        </div>
    </section>
</main>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
    <div class="footer-main">
        <p>Author:Vajko Norbert</p>
        <p><a href="mailto:hege@example.com">norbertvajko@yahoo.com</a></p>
        <p><a href="Contact.php">Contact</a></p>
    </div>
</footer>

</body>
</html>