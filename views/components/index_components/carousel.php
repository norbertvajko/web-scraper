





<?php

include 'includes/connDB.php';

//$sql = "SELECT * FROM recent_searches";

//$sql = "SELECT name, reviews, price, images, in_stock, link, logo FROM products LEFT JOIN recent_searches ON products.id = recent_searches.product_id WHERE recent_searches.product_id = products.id";

//$sql = "SELECT COUNT(product_id) as NUM FROM recent_searches";
$sql = "SELECT product_id, count(*) AS c FROM recent_searches GROUP BY product_id HAVING MAX(c) ORDER BY c ASC";
$result = mysqli_query($GLOBALS['conn'], $sql);


//var_dump($result);

if ($result) {
//var_dump($result);

    foreach ($result as $row) {
//       var_dump($row['product_id']);
        $prod_id = $row['product_id'];

        $newSQL = "SELECT name, reviews, price, images, in_stock, link, logo FROM products LEFT JOIN recent_searches ON products.id = recent_searches.product_id WHERE recent_searches.product_id = '$prod_id'";
        $newResult = mysqli_query($GLOBALS['conn'], $newSQL);


        foreach ($newResult as $item ) {


        }
    }


} else {
    echo "Not found";
}


?>


<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="carousel-header">
                <h3 class="carousel-title my-3">Most searched products</h3>
            </div>
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner py-3 px-py-88">
                    <div class="carousel-item active">
                        <div class="row">

                            <div class="col-sm-3 item-col-wrap ">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="<?= $item['images'] ?>" class="img-fluid"
                                             alt="product-img">
                                    </div>
                                    <div class="thumb-content">
                                        <h6><a href="<?= $item['link'] ?>"><?= $item['name'] ?></a></h6>
                                        <div class="star-rating my-2" id="carouselItemStars">
                                            <?= $item['reviews'] ?>
                                        </div>
                                        <p class="item-price my-2">
                                            <?= $item['price'] ?> <span id="lei">RON</span>
                                        </p>
<!--                                        <button class="btn btn-danger " id="addToFav" name="btnFav" onclick="favorite(2564);"><i class="fa fa-heart -o" id="heartIcon" "=""></i>-->
<!--                                        </button>-->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleInterval"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleInterval"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/assets/js/getStars.js"></script>
<script>

    let stars = document.getElementsByClassName('star-rating');
    document.addEventListener('DOMContentLoaded',() => {
        // console.log(getStars(4));
        // for (var i=0; i<stars.length;i++) {
        for (let i = 0; i < stars.length; i++) {

            stars[i].innerHTML = getStars(<?= $item['reviews']?>)
        }

            // i++;
        // }

    })


</script>

