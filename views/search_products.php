<?php
session_start();

// preia query din URL
$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url_components = parse_url($actual_link);
parse_str($url_components['query'], $params);
$query = $params['query'];

include "../includes/db/connDB.php";
$conn = $GLOBALS['conn'];
include "../includes/products/searchAllProd.php";
$products = $products ?? null;
$number_of_products = $number_of_products ?? null;





?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta charset="UTF-8">
    <meta content="Search engine for IT products and compare them" name="description">
    <meta content="Best offer, IT Products , Scrape" name="keywords">
    <meta content="Vojko Norbert" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Products</title>

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
    <link href="../assets/css/filter-btn.css" rel="stylesheet">
    <link href="../assets/css/search-products.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous">
    </script>
    <script src="/assets/js/getStars.js"></script>

</head>
<body>

<!--------------------------------------------- Start Nav Bar Area ---------------------------------------------------->

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top bor-sha">
    <?php include "components/navbar.php"; ?>
</nav>
<!--------------------------------------------- End Nav Bar Area ------------------------------------------------------>

<div class="blur" id="blur">

    <!----------------------------------------------- Start Main Area ----------------------------------------------------->

    <div class="search-results">
        <!-- Topic Cards -->
        <div id="cards_landscape_wrap-2">
            <div class="container">
                <?php if ($number_of_products > 0 && $query != "") { ?>
                <div class="container mt-4" style="background: white; border-radius: 15px" >;
                    <div class="prod-res" style="border-bottom: 1px solid #eeeeee;">
                    <h1><?= $number_of_products ?> results for "<?= $query ?>" </h1>
                    </div>

                    <label for="standard-select">Sort by</label>
                    <div class="select">
                        <select name="selectedValue" id="standard-select">
                            <option value="optionPrice">Price</option>
                            <option value="optionReviews">Reviews</option>
                            <option value="optionRating">Rating</option>
                        </select>
                        <span class="focus"></span>
                    </div>
                </div>
                <?php if(isset($_POST['selectedValue']))
                    switch($_POST['selectedValue']){
                        case 'optionPrice':
                            break;
                        case 'optionReviews':
                            // do Something for optionReviews
                            break;
                        case 'optionRating':
                            // do Something for optionRating
                            break;
                        default:
                            // Something went wrong or form has been tampered.
                    }

                    ?>


                <div class="row">
                    <?php foreach ($products as $product) : ?>
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="card-flyer">
                                <div class="text-box">
                                    <div class="image-box">
                                        <img src="<?= $product['images'] ?>" alt="" style="max-width: min-content;"/>
                                    </div>
                                    <div class="text-container">
                                        <h6>
                                            <a href="<?= $product['link'] ?>"><?= str_replace('Telefon mobil', '', $product['name']) ?></a>
                                        </h6>
                                        <div class="stars-outer">
                                            <div class="stars-inner" id="productReviews">
                                                <!--                                                <script>-->
                                                <!---->
                                                <!--                                                    document.addEventListener('DOMContentLoaded',() => {-->
                                                <!---->
                                                <!--                                                        document.querySelector('.stars-outer .stars-inner').innerHTML = getStars(-->
                                                <? //= $product['reviews']?><!--//)-->
                                                <!--//-->
                                                <!--//                                                    });-->
                                                <!--//-->
                                                <!--//                                                </script>-->
                                            </div>
                                        </div>
                                        <div class="product-log">
                                            <img src="<?= $product['logo'] ?>" id="productLog" alt=""
                                                 class="img-fluid prod-log">
                                        </div>
                                        <h3 class="lowest-price text-center"><span
                                                    id="productPrice"><?= $product['price'] ?></span>&nbsp;lei</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <?php } else { ?>
                        <div class="container">
                            <img src="../assets/images/no_results_found.png" class="img-fluid" alt="no_results">
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>


    <!------------------------------------------------- End Main Area ----------------------------------------------------->
</div>
<!----------------------------------------------- Start Footer Area --------------------------------------------------->

<?php include "components/footer.php"; ?>

<!------------------------------------------------ End Footer Area ---------------------------------------------------->

<script src="/assets/js/filterBtn.js"></script>

</body>
</html>










































