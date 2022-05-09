<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="Free Web Scrape , Search products " name="description">
    <meta content="Scrape , Crawl , Web Scrape , Web Crawler" name="keywords">
    <meta content="Vajko Norbert" name="author">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Favorites</title>

    <!-- Icons -->
    <link rel="stylesheet"
          href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="../assets/css/favorites-page.css" rel="stylesheet">
    <link href="../assets/css/home-page.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<!--------------------------------------------- Start Nav Bar Area ---------------------------------------------------->

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top bor-sha">
    <?php include "components/navbar.php"; ?>
</nav>

<!--------------------------------------------- End Nav Bar Area ------------------------------------------------------>

<!--------------------------------------------- Start Banner Area ----------------------------------------------------->

<header class="fav-header mt-62">
    <?php
    include "components/favorite_components/fav_header.php";
    ?>
</header>

<!----------------------------------------------- End Banner Area ----------------------------------------------------->


<!----------------------------------------------- Start Main Area ----------------------------------------------------->

<main class="main-favorites p-5">
    <div class="container">
        <section class="main-favorites-header">
            <div class="menu-user-container d-flex">
                <div class="menu-user-header p-5 w-25 ">
                    <div class="menu-user-logo text-center p-3">
                        <img src="https://s13emagst.akamaized.net/layout/ro/static-upload/icon_guest.png" alt="" class="img-fluid">
                    </div>
                    <div class="menu-user-body-title">
                        <h3>Hello , please sign in to track your favorite products!</h3>
                    </div>
                    <div class="menu-user-footer d-flex flex-column">
                        <button>Login</button>
                        <button>Register</button>
                    </div>
                </div>
                <div class="menu-user-body ms-35">
                    <div class="menu-user-content h-100">
                        <div class="menu-user-title text-start d-flex flex-row align-items-center p-3">
                            <h1>Favorites</h1>
                            <span>0 products</span>
                        </div>
                        <div class="menu-user-photo">
                            <div class="no-favorites-photo d-flex justify-content-center">
                                <img src="https://cdn.dribbble.com/users/1291846/screenshots/3720238/media/1038c769be34018f642b683e83fca9ea.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="menu-user-description d-flex justify-content-center">
                            <h4>You have no products in your list</h4>
                        </div>
                        <div class="menu-user-recomandation">
                            <div class="recomndation-p d-flex justify-content-center">
                                <p>Go take a look at the most popular products</p>
                            </div>
                            <div class="recomandation-btn d-flex justify-content-center"">
                                <button>See oferts</button>
                            </div>
                        </div>
                    </div>
            </div>
        </section>
    </div>
</main>

<!------------------------------------------------- End Main Area ----------------------------------------------------->

<!----------------------------------------------- Start Footer Area --------------------------------------------------->

<?php include "components/footer.php"; ?>

<!------------------------------------------------ End Footer Area ---------------------------------------------------->


</body>
</html>