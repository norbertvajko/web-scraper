<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>


    <meta charset="UTF-8">
    <meta content="Search engine for IT products and compare them" name="description">
    <meta content="Best offer, IT Products , Scrape" name="keywords">
    <meta content="Vojko Norbert" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Products</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="icon" type="image/x-icon" href="../assets/images/spider-title-logo.png">
    <link href="../assets/css/home-page.css" rel="stylesheet">
    <link href="../assets/css/results-page.css " rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>
<body>

<!--------------------------------------------- Start Nav Bar Area ---------------------------------------------------->

<?php include "components/searchNavBar.php"; ?>

<!--------------------------------------------- End Nav Bar Area ------------------------------------------------------>

<header class="banner-area mt-56">

    <div class="container">
        <div class="row">
            <div class="banner-title">
                <h1>238 results for "X"</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <form class="search-form ">
            <div class="input-form w-50 m-auto position-relative ">
                <form id="getForm">
                    <input type="text" class="form-control" placeholder="Search" id="inputText">
                    <button class="search-btn position-absolute" type="button" id="button"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </form>
    </div>

</header>

<!----------------------------------------------- End Banner Area ----------------------------------------------------->

<!----------------------------------------------- Start Main Area ----------------------------------------------------->
<main class="main-content">
    <div class="products" id="products1">
        <div class="card">
            <img class="card-img"
                 src="https://lcdn.altex.ro/media/catalog/product/T/e/Telefon_APPLE_iPhone_13_5G_128GB_Midnight_4_.jpg"
                 alt="card-photo">
            <div class="card-info">
                <h1 class="card-title" id="cardTitle"></h1>
                <span class="card-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <a class="rating-number" href="#">(13)</a>
                </span>
                <div class="card-price">
                    1209 lei
                </div>
                <div class="card-offer">
                    <a href="#" class="card-btn">Offers</a>
                </div>
            </div>
        </div>
        <div class="card">
            <img class="card-img"
                 src="https://lcdn.altex.ro/media/catalog/product/T/e/Telefon_APPLE_iPhone_13_5G_128GB_Midnight_4_.jpg"
                 alt="card-photo">
            <div class="card-info">
                <h1 class="card-title">Iphone 13 MAX 12 GB</h1>
                <span class="card-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <a class="rating-number" href="#">(13)</a>
                </span>
                <div class="card-price">
                    1209 lei
                </div>
                <div class="card-offer">
                    <a href="#" class="card-btn">Offers</a>
                </div>
            </div>
        </div>
        <div class="card">
            <img class="card-img"
                 src="https://lcdn.altex.ro/media/catalog/product/T/e/Telefon_APPLE_iPhone_13_5G_128GB_Midnight_4_.jpg"
                 alt="card-photo">
            <div class="card-info">
                <h1 class="card-title">Iphone 13 MAX 12 GBdsadasdsa dsadas dsa asdas das dsa as</h1>
                <span class="card-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    <a class="rating-number" href="#">(13)</a>
                </span>
                <div class="card-price">
                    1209 lei
                </div>
                <div class="card-offer">
                    <a href="#" class="card-btn">Offers</a>
                </div>
            </div>
        </div>
    </div>
</main>

<!----------------------------------------------- Start Footer Area --------------------------------------------------->

<?php include "views/components/footer.php"; ?>

<!------------------------------------------------ End Footer Area ---------------------------------------------------->

<script src="../assets/js/request.js"></script>
<script src="../assets/js/logInPopUp.js"></script>
</body>
</html>
