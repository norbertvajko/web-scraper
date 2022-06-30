<?php
session_start();

// preia query din URL
$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url_components = parse_url($actual_link);
parse_str($url_components['query'], $params);
$query = $params['query'];

include "../../../includes/db/connDB.php";
$conn = $GLOBALS['conn'];
include "../../../includes/products/searchAllProd.php";
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

    <link rel="icon" type="image/x-icon" href="../../../assets/images/spider-title-logo.png">
    <link href="../../../assets/css/home-page.css" rel="stylesheet">
    <link href="../../../assets/css/search-products.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous">
    </script>


</head>
<body>

<!--------------------------------------------- Start Nav Bar Area ---------------------------------------------------->

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top bor-sha">
    <?php include "../../components/navbar.php"; ?>
</nav>
<!--------------------------------------------- End Nav Bar Area ------------------------------------------------------>

<div class="blur" id="blur">

    <!----------------------------------------------- Start Main Area ----------------------------------------------------->

    <div class="search-results">
        <!-- Topic Cards -->
        <div id="cards_landscape_wrap-2">
            <div class="container">
                <h1><?= $number_of_products ?> rezultate pentru "<?= $query ?>" </h1>

                    <div class="row">
                        <?php foreach ($products as $product) : ?>
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="card-flyer">
                                <div class="text-box">
                                    <div class="image-box">
                                        <img src="<?= $product['images'] ?>" alt=""/>
                                    </div>
                                    <div class="text-container">
                                        <h6>   <a href="<?= $product['link'] ?>"><?= str_replace('Telefon mobil','',$product['name']) ?></a></h6>
                                        <p><?= $product['price'] ?> Lei</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

            </div>
        </div>
    </div>


    <!------------------------------------------------- End Main Area ----------------------------------------------------->
</div>
<!----------------------------------------------- Start Footer Area --------------------------------------------------->

<?php include "../../components/footer.php"; ?>

<!------------------------------------------------ End Footer Area ---------------------------------------------------->

<!--<script src="../../../assets/js/request.js"></script>-->
<!--<script src="../../../assets/js/liveSearchDropdown.js"></script>-->


</body>
</html>










































