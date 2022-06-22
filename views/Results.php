<?php
session_start();
?>
<?php
include '../includes/connDB.php';

//preia product id din url
$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

//var_dump($actual_link);
$url_components = parse_url($actual_link);

// Use parse_str() function to parse the
// string passed via URL
parse_str($url_components['query'], $params);
$idParam = $params['productId'];

$sql = " SELECT name, price, images, in_stock, reviews, link, logo FROM products WHERE id = '$idParam'";
$result = mysqli_query($GLOBALS['conn'],$sql);
//var_dump($result);

if ($result) {
    foreach ($result as $row) {
//        $title = $row['name'];
//        $date = date("Y-m-d H:i:s");
//
//        if (empty($_POST['valueToSearch'])) {
//
//            $newSQL = "INSERT INTO recent_searches (query, time) VALUES ('$title','$date') ";
//            mysqli_query($GLOBALS['conn'], $newSQL);
//        }
    }
}
//echo json_encode($data);

?>





<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta charset="UTF-8">
    <meta content="Search engine for IT products and compare them" name="description">
    <meta content="Best offer, IT Products , Scrape" name="keywords">
    <meta content="Vojko Norbert" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Results</title>

    <!-- Icons -->
    <link rel="stylesheet"
          href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="icon" type="image/x-icon" href="../assets/images/spider-title-logo.png">
    <link href="../assets/css/home-page.css" rel="stylesheet">
    <link href="../assets/css/results.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous">
    </script>


</head>
<body>

<!--------------------------------------------- Start Nav Bar Area ---------------------------------------------------->

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top bor-sha">
    <?php include "components/navbar.php"; ?>
</nav>
<!--------------------------------------------- End Nav Bar Area ------------------------------------------------------>

<!--------------------------------------------- Start Banner Area ----------------------------------------------------->

<div class="blur" id="blur">

    <header class="banner-results mt-100">
        <div class="container p-3">
            <div class="box" id="containerBox">
                <div class="row product-page-top position-relative">
                    <button class="btn btn-danger" id="addToFav" name="btnFav"
                            onclick="favorite(<?php echo $idParam ?>);"><i class="fa fa-heart -o" id="heartIcon" "></i>
                    </button>
                    <div class="favorites-popup" id="favoritesPopup">
                        <div class="content">
                            <h6 id="fav-popup-text"></h6>
                        </div>
                    </div>

                    <div class="added-to-fav hide-c " id="addedToFav"></div>
                    <h1 class="product-up-title d-block d-sm-none text-center p-3"><?php echo $row['name'] ?></h1>
                    <div class="col-lg-4 col-md-3 col-sm-6 col-xs-5 d-flex justify-content-center product-image">
                        <img id="productImagee" src="<?php echo $row['images'] ?>" alt="" class="product-img">
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center col-lg-4 col-md-5 col-sm-6 col-xs-8 product-details pt-2">
                        <h1 class="prod-title d-none d-sm-block mb-3" id="productTitle"
                            style="font-size: 17px;font-weight: bold;"><?php echo $row['name'] ?></h1>
                        <div class="hidden-xs">
                            <div class="stars-outer">
                                <div class="stars-inner" id="productReviews">
                                </div>
                            </div>
                            <div class="offer-instock">
                                <span id="productInStock"><b><?php echo $row['in_stock'] ?></b></span>
                            </div>
                        </div>

                        <div class="user-functions my-4 ">
                            <ul class="product-description-list ps-20 ">
                                <li class="product-description-items">
                                    Memorie interna: <span>64 GB</span>
                                </li>
                                <li class="product-description-items">
                                    Sistem de operare: <span>iOS</span>
                                </li>
                                <li class="product-description-items">
                                    Dimensiune ecran: <span>6.1 inch</span>
                                </li>
                                <li class="product-description-items">
                                    Numar nuclee: <span>6</span>
                                </li>
                                <li class="product-description-items">
                                    Model procesor: <span>Apple A14 Bionic</span>
                                </li>
                            </ul>
                        </div>
                        <h3 class="lowest-price d-flex flex-md-wrap">Lowest price:<span id="productPrice"><?php echo $row['price'] ?></span >&nbsp;lei</h3>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 featured-offers">
                        <div class="featured-content position-relative d-xs-flex justify-content-between d-sm-flex justify-content-between d-md-block h-100 p-4">
                            <div class="product-log">
                                <img src="<?php echo $row['logo'] ?>" id="productLogo"  alt="">
                            </div>
                            <div class="product-btn-site">
                                <a href="<?php echo $row['link'] ?>" class="btn btn-warning" target="_blank">See product</a>
                            </div>
                        </div>
                    </div>
                </div>
                <i class="fa fa-heart-o favorite-icon" type="button" id="favorite-icon-add"></i>
            </div>
    </header>
    <!----------------------------------------------- End Banner Area ----------------------------------------------------->

    <!----------------------------------------------- Start Main Area ----------------------------------------------------->

    <main class="main-results">

        <section class="offers">
            <div class="container">
                <div class="row mt-3">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs position-relative" id="nav-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="bestOffer-tab" data-bs-toggle="tab" data-bs-target="#bestOffer"
                                    type="button" role="tab" aria-controls="bestOffer" aria-selected="true">Best Offer
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="description-tab" data-bs-toggle="tab"
                                    data-bs-target="#description" type="button" role="tab" aria-controls="description"
                                    aria-selected="false">Description
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="statistics-tab" data-bs-toggle="tab"
                                    data-bs-target="#statistics" type="button" role="tab" aria-controls="statistics"
                                    aria-selected="false">Statistics
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="photo-gallery-tab" data-bs-toggle="tab"
                                    data-bs-target="#photoGallery" type="button" role="tab" aria-controls="photoGallery"
                                    aria-selected="false">Photos
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="reviews-tab" data-bs-toggle="tab"
                                    data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews"
                                    aria-selected="false">Reviews
                            </button>
                        </li>
                        <li>
                            <div class="filter">
                                <a href="#" class="btn btn-default btn-sm order hidden-xs dropdown-toggle "
                                   data-toggle="dropdown" id="order-dropdown">
                                    <span class="icon-order"></span> Filter
                                </a>
                                <div class="dropdown-menu" aria-labelledby="order-dropdown">
                                    <ul class="">
                                        <li class="">
                                            <button type="button" class="ratings-button">No of ratings</button>
                                        </li>
                                        <li class="">
                                            <button type="button" class="ratings-price-asc">price ASC</button>
                                        </li>
                                        <li class="">
                                            <button type="button" class="ratings-price-des">price DES</button>
                                        </li>
                                        <li class="">
                                            <button type="button" class="ratings-in-stock">In stock</button>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                </div>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="bestOffer" role="tabpanel"
                         aria-labelledby="bestOffer-tab">
                        <div class="container my-4 mx-2 p-3 ">
                            <div class="row align-items-center my-2 mx-1 ">
                                <div class="col-2 best-offer-logo w-fc">
                                    <div class="offer-company-logo">
                                        <img src="<?php echo $row['logo'] ?>" id="companyLogoOne" class="mw-120 img-fluid product-logo"
                                             alt="company-logo">
                                    </div>
                                </div>
                                <div class="col-2 best-offer-stars w-fc d-none d-lg-block">
                                    <div class="offer-rating" id="offerRatingOne">
                                        <?php echo $row['reviews'] ?>
                                    </div>

                                </div>
                                <div class="col-6 best-offer-title ">
                                    <h3 id="offerNameOne"><?php echo $row['name'] ?></h3>
                                </div>
                                <div class="col-2 best-offer-price w-fc d-flex justify-content-end">
                                    <div class="offer-price">
                                                <span class="best-offer-price" id="offerPriceOne">
                                                    <?php echo $row['price'] ?>
                                                </span>
                                        </div>
                                    </div>

                                </div>
                                <div class="row align-items-center my-2 mx-1 ">
                                    <div class="col-2 best-offer-logo w-fc">
                                        <div class="offer-company-logo">
                                            <img src="<?php echo $row['logo'] ?>" id="companyLogoTwo" class="mw-120 img-fluid"
                                                 alt="company-logo">
                                        </div>
                                    </div>
                                    <div class="col-2 best-offer-stars w-fc d-none d-lg-block">
                                        <div class="offer-rating" id="offerRatingTwo">

                                        </div>

                                    </div>
                                    <div class="col-6 best-offer-title ">
                                        <h3 id="offerNameTwo"></h3>
                                    </div>
                                    <div class="col-2 best-offer-price w-fc d-flex justify-content-end">
                                        <div class="offer-price">
                                                <span class="best-offer-price" id="offerPriceTwo">
                                                                    <?php echo $row['price'] ?>
                                                </span>
                                        </div>
                                    </div>

                                </div>
                                <div class="row align-items-center my-2 mx-1 ">
                                    <div class="col-2 best-offer-logo w-fc ">
                                        <div class="offer-company-logo">
                                            <img src="" id="companyLogoThree" class="mw-120 img-fluid"
                                                 alt="company-logo">
                                        </div>
                                    </div>
                                    <div class="col-2 w-fc best-offer-stars d-none d-lg-block">
                                        <div class="offer-rating" id="offerRatingThree">

                                        </div>
                                    </div>
                                    <div class="col-6 best-offer-title">
                                        <h3 id="offerNameThree"></h3>
                                    </div>
                                    <div class="col-2 w-fc best-offer-price d-flex justify-content-end">
                                        <div class="offer-price">
                                               <span class="best-offer-price" id="offerPriceThree">

                                                </span>
                                        </div>
                                    </div>
                                </div>
                            <div class="container">
                                <div class="row">
                                    <div class="rest-offers-content my-4">
                                        <div class="rest-offers-header my-4">
                                            <h3>Restul ofertelor</h3>
                                            <div class="row align-items-center my-2 mx-1 ">
                                                <div class="col-2 best-offer-logo w-fc ">
                                                    <div class="offer-company-logo">
                                                        <img src="" id="companyLogoRest" class="mw-120 img-fluid"
                                                             alt="company-logo">
                                                    </div>
                                                </div>
                                                <div class="col-2 w-fc best-offer-stars d-none d-lg-block">
                                                    <div class="offer-rating" id="offerRatingRest">

                                                    </div>
                                                </div>
                                                <div class="col-6 best-offer-title">
                                                    <h3 id="offerNameThree"></h3>
                                                </div>
                                                <div class="col-2 w-fc best-offer-price d-flex justify-content-end">
                                                    <div class="offer-price">
                                               <span class="best-offer-price" id="offerPriceRest">

                                                </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section class="rest-offers">
<!--                            <div class="container">-->
<!--                                <div class="row">-->
<!--                                    <div class="rest-offers-content my-4">-->
<!--                                        <div class="rest-offers-header my-4">-->
<!--                                            <h3>Restul ofertelor</h3>-->
<!---->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
                        </section>
                    </div>
                    <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">
                        <div class="container">
                            <div class="row">
                                <div class="description-header d-flex justify-content-center align-items-center p-3 my-5 da-border w-50 m-auto">
                                    <h1 class="description-title">Apple iPhone 13 128GB</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="description-photo da-border m-auto w-75 my-5 p-3 d-flex">
                                    <div class="col w-50">
                                        <div class="photo-wrap">
                                            <img src="https://s13emagst.akamaized.net/products/40685/40684397/images/res_9aa260aaaa84abf7f2a3db2bd2f85a8e.jpg?width=450&height=450&hash=E0DAEFC55242E20912D93D61E9D3C782"
                                                 class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col w-50">
                                        <div class="photo-wrap d-flex mx-3 my-4 ">
                                            <img src="https://s13emagst.akamaized.net/products/40685/40684428/images/res_4ddfcf30bbe34261b9e32e2adccf07fb.jpg?width=450&height=450&hash=249094D6E4AB5AD0D0DBFD1C1D3F9269"
                                                 class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="description-general">

                                </div>
                            </div>
                            <div class="row">
                                <div class="descriptiom-util1 d-flex justify-content-center align-items-center flex-column p-3 my-5 da-border w-50 m-auto">
                                    <div class="row">
                                        <div class="col">
                                            <h2 class="capacity-title">
                                                Capacity
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <ul class="capacity-list my-2 mx-3 d-inline-flex w-100 ">
                                                <li class="capacity-list-items mx-4">128 <span>GB</span></li>
                                                <li class="capacity-list-items mx-4">256 <span>GB</span></li>
                                                <li class="capacity-list-items mx-4">512 <span>GB</span></li>
                                                <li class="capacity-list-items mx-4">1<span>TB</span></li>
                                                <li class="capacity-list-items mx-4">2<span>TB</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="statistics" role="tabpanel"
                         aria-labelledby="statistics-tab"></div>
                    <div class="tab-pane fade" id="photoGallery" role="tabpanel"
                         aria-labelledby="photo-gallery-tab">
                        <div class="container">
                            <div class="products" id="products1">
                                <div class="card photos-card">
                                    <img class="card-img"
                                         src="https://lcdn.altex.ro/media/catalog/product/T/e/Telefon_APPLE_iPhone_13_5G_128GB_Midnight_4_.jpg"
                                         alt="card-photo">
                                </div>
                                <div class="card photos-card">
                                    <img class="card-img"
                                         src="https://lcdn.altex.ro/media/catalog/product/T/e/Telefon_APPLE_iPhone_13_5G_128GB_Midnight_4_.jpg"
                                         alt="card-photo">
                                </div>
                                <div class="card photos-card">
                                    <img class="card-img"
                                         src="https://lcdn.altex.ro/media/catalog/product/T/e/Telefon_APPLE_iPhone_13_5G_128GB_Midnight_4_.jpg"
                                         alt="card-photo">
                                </div>
                                <div class="card photos-card">
                                    <img class="card-img"
                                         src="https://lcdn.altex.ro/media/catalog/product/T/e/Telefon_APPLE_iPhone_13_5G_128GB_Midnight_4_.jpg"
                                         alt="card-photo">
                                </div>
                                <div class="card photos-card">
                                    <img class="card-img"
                                         src="https://lcdn.altex.ro/media/catalog/product/T/e/Telefon_APPLE_iPhone_13_5G_128GB_Midnight_4_.jpg"
                                         alt="card-photo">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="reviews" role="tabpanel">

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!--</div>-->

<!------------------------------------------------- End Main Area ----------------------------------------------------->

<!----------------------------------------------- Start Footer Area --------------------------------------------------->

<?php include "components/footer.php"; ?>

<!------------------------------------------------ End Footer Area ---------------------------------------------------->
<!--<script>-->
<!--    function myFunction() {-->
<!--        const searchButton = document.getElementById('search-button');-->
<!--        const searchInput = document.getElementById('search-input');-->
<!--        searchButton.addEventListener('click', () => {-->
<!--            const inputValue = searchInput.value;-->
<!--            alert(inputValue);-->
<!--        });-->
<!--    }-->
<!--</script>-->

<script>

    function getStars(rating)  {
            const totalStars = 5;

            // Round to nearest half
            rating = Math.round(rating * totalStars) / 100;
            console.log(rating);
            let output = [];

            // Append all the filled whole stars
            for (var i = rating; i >= 1; i--)
                output.push('<i class="fa fa-star" aria-hidden="true" style="color: gold;"></i>&nbsp;');

            // If there is a half a star, append it
            // if (i == .5)  output.push('<i class="fa fa-star-half-o" aria-hidden="true" style="color: gold;"></i>&nbsp;');
            if (i >= .1) {
                output.push('<i class="fa fa-star-half-o" aria-hidden="true" style="color: gold;"></i>&nbsp;');
            }

            // if(i < .5)  output.pop('<i class="fa fa-star-half-o" aria-hidden="true" style="color: gold;"></i>&nbsp;');


            // Fill the empty stars
            for (let i = (5 - rating); i >= 1; i--)
                output.push('<i class="fa fa-star-o" aria-hidden="true" style="color: gold;"></i>&nbsp;');

            return output.join('');
    }

    document.addEventListener('DOMContentLoaded',() => {
        // console.log(getStars(4));
        document.getElementById('productReviews').innerHTML = getStars(<?= $row['reviews']?>)
        document.getElementById('offerRatingOne').innerHTML = getStars(<?= $row['reviews']?>)
    })

</script>


<script src="/assets/js/addToFavorites.js"></script>
<!--<script src="/assets/js/searchResults.js"></script>-->
</body>
</html>