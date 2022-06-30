<?php



session_start();

$is_logged_in = isset($_SESSION['user_id']) && !empty($_SESSION['user_id']);
$noOfFavorites = 0;

?>

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
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="../assets/css/favorites-page.css" rel="stylesheet">
    <link href="../assets/css/home-page.css" rel="stylesheet">
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

    <header class="fav-header mt-62">
        <?php
        //    include "components/favorite_components/fav_header.php";
        ?>
    </header>

    <!----------------------------------------------- End Banner Area ----------------------------------------------------->


    <!----------------------------------------------- Start Main Area ----------------------------------------------------->
    <div class="container">
        <main class="main-favorites p-5 <?= $is_logged_in ? '' : 'd-flex' ?>">
            <div class="menu-user">
                <div class="menu-user-header p-5 ">

                    <div class="menu-user-logo text-center p-3">
                        <img src="https://s13emagst.akamaized.net/layout/ro/static-upload/icon_guest.png" alt=""
                             class="img-fluid">
                    </div>
                    <?php if ($is_logged_in) { ?>
                        <div class="menu-user-body-title">

                            <h5 class="text-center">
                                Hello, <b id="userNameStyle"><?= $_SESSION['username']; ?></b>
                                <h6 id="happyToseeYou" class="text-center text-success mt-4 ">We are happy to see you
                                    back!</h6>
                            </h5>


                        </div>
                        <?php
                    } else {
                        ?>
                        <div class="menu-user-body-title my-3">
                            <h5 class="text-center">
                                Hello, please sign in
                                <h6 class="text-center"> In order to have full control with our offers</h6>
                            </h5>
                        </div>

                        <div class="menu-user-footer d-flex flex-column">
                            <button type="button" class="btn btn-primary mb-2 w-50 m-auto" id="loginBTN">Login</button>
                            <button type="button" class="btn btn-primary w-50 m-auto" id="registerBTN">Register</button>
                        </div>
                    <?php } ?>
                </div>
            </div>


            <?php if ($is_logged_in) : ?>

                <?php
                $user_id = $_SESSION['user_id'];
                require_once "../includes/db/connDB.php";
                $sql = "SELECT name, reviews, price, images, in_stock, link, logo, favorites.id AS favId FROM products LEFT JOIN favorites ON products.id = favorites.product_id WHERE favorites.user_id = '$user_id'";
                $result = mysqli_query($GLOBALS['conn'], $sql);
                ?>

                <?php if ($result->num_rows) : ?>

                    <div id="list-of-favorites">

                    <?php foreach ($result as $row) : ?>

                        <?php $noOfFavorites++; ?>

                        <div class="list-of-favorites mx-auto">
                            <div class="product-card-account pad-sep-sm js-tracking-viewport-product">
                                <div class="d-flex">
                                    <div class="card-image px-5 flex-item flex-c"><a href="#"
                                                                                     class="thumbnail-wrapper js-product-url">
                                            <div class="thumbnail"><img src="<?= $row['images'] ?>" alt="Product Image"
                                                                        class="img-fluid">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-flex flex-item flex-column p-3 flex-wrap card-container">
                                        <div class="card-content pad-hrz-sm flex-item">
                                            <h2 class="mrg-sep-none  margin-card-content">
                                                <a href="<?=$row['link']?>" target="_blank" class="product-title font-semi-bold">
                                                    <span id="favCardTitleC"><?= str_replace("Telefon mobil",'',$row['name']) ?></span>
                                                </a>
                                            </h2>

                                        </div>
                                        <div class="card-secondary pad-hrz-sm flex-item text-right">
                                            <div class="mrg-btm-xs">
                                                <div class="stars-outer">
                                                    <div class="stars-inner" id="productRev">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="favorite-product-availability product-stock-status text-availability-in_stock">
                                                <b><?= $row['in_stock'] ?></b>
                                            </div>

                                            <div class="margin-card-content" style="font-size: 17px;">
                                                Vandut de:
                                                <div class="product-log">
                                                    <img src="<?= $row['logo'] ?>" id="productLogo" alt="">
                                                </div>
                                            </div>

                                            <div class="mrg-btm-xs product-pricing">
                                                <?= $row['price'] ?><span> lei</span>
                                            </div>
                                            <div class="actions-wrapper">
                                                <div class="content">
                                                    <div class="product-btn-site my-3">
                                                        <a href="<?php echo $row['link'] ?>" class="btn btn-warning"
                                                           target="_blank">See product</a>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button class="btn btn-link btn-sm" id="btnVeziProd" name="btnVeziProd"
                                                            onclick="deleteFavoriteProduct(<?= $row['favId'] ?>);">
                                                        <span class="hidden-sm hidden-xs gtm_9p2y1a">Sterge</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>

                </div>

                <?php endif; ?>

                <div class="menu-user-body <?= ($result->num_rows) ? 'hide-c' : ''?>" id="noFavItemsContainer">
                    <div class="menu-user-content h-100" id="menuUserContentNoFav">
                        <div class="menu-user-photo">
                            <div class="no-favorites-photo d-flex justify-content-center">
                                <img src="https://cdn.dribbble.com/users/1291846/screenshots/3720238/media/1038c769be34018f642b683e83fca9ea.png"
                                     class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="menu-user-description d-flex justify-content-center">
                            <h4>You have no products in your list</h4>
                        </div>
                        <div class="menu-user-recomandation">
                            <div class="recomndation-p d-flex justify-content-center">
                                <p>Go take a look at the most popular products</p>
                            </div>
                            <div class="recomandation-btn d-flex justify-content-center">
                            </div>
                        </div>
                    </div>
                </div>

            <?php endif; ?>

        </main>

    </div>


    <!------------------------------------------------- End Main Area ----------------------------------------------------->

    <!----------------------------------------------- Start Footer Area --------------------------------------------------->

    <?php include "components/footer.php"; ?>

    <!------------------------------------------------ End Footer Area ---------------------------------------------------->


    <script src="/assets/js/getStars.js"></script>
    <script>

        const logIN = document.getElementById('loginBTN');
        const register = document.getElementById('registerBTN')

        if (logIN) {
            logIN.addEventListener("click", () => {
                showLoginPopUp();
            });
        }
        if (register) {
            register.addEventListener("click", () => {
                showRegisterPopUp();
            });
        }

    </script>

    <script>

        function deleteFavoriteProduct(id) {

            const favoriteItemContainer = document.querySelector('.list-of-favorites');
            // const noFavoritesContainer = document.getElementsByClassName('menu-user-body');

            let ajax_request = new XMLHttpRequest();

            ajax_request.open('POST', '/includes/user/deleteFromFav.php', true);

            let formdata = new FormData;
            formdata.append('favorites_id', id);
            ajax_request.send(formdata);

            ajax_request.onreadystatechange = function () {
                if (ajax_request.readyState === 4 && ajax_request.status === 200) {

                    let response = JSON.parse(ajax_request.responseText);

                    if (response.success !== '') {

                        favoriteItemContainer.remove();

                        // console.log(document.getElementById('list-of-favorites'));

                        if (document.getElementById('list-of-favorites').childElementCount < 1) {
                            document.getElementById('noFavItemsContainer').classList.toggle("hide-c");
                        }
                    }
                }
            }
        }

    </script>


</body>

</html>