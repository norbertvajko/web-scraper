<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="Free Web Scrape , Search products " name="description">
    <meta content="Scrape , Crawl , Web Scrape , Web Crawler" name="keywords">
    <meta content="Vajko Norbert" name="author">
    <meta content="30" http-equiv="refresh">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Favorites</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="../assets/css/favorites-page.css" rel="stylesheet">
    <link href="../assets/css/home-page.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<!--------------------------------------------- Start Nav Bar Area ---------------------------------------------------->

<?php include "components/searchNavBar.php"; ?>

<!--------------------------------------------- End Nav Bar Area ------------------------------------------------------>
<header>
    <div class="favorites-content-description">
        <h1>Your favorite products   / HEADER</h1>
        <ul>
            <li><a href="#">Favorite products</li>
            <li><a href="#">Recent views</a></li>
        </ul>
    </div>
</header>


<main class="content">
    <section>
        <h2>From here is the content</h2>
        <img src="../assets/images/empty-cart.jpg" alt="empty cart" id="empty-cart">
    </section>
</main>


<!----------------------------------------------- Start Footer Area --------------------------------------------------->

<?php include "views/components/footer.php"; ?>

<!------------------------------------------------ End Footer Area ---------------------------------------------------->


<script src="../assets/js/logInPopUp.js"></script>


</body>
</html>