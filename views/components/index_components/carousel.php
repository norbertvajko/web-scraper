


<div class="container">
    <h3 class="mb-30">Cele mai cautate produse</h3>
    <div class="splide" role="group" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list">


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

                if ($newResult->num_rows == 1) {

                foreach ($newResult as $item) {
                    ?>

                <li class="splide__slide">
                    <div class="card">
                        <div class="card-body">
                            <div class="img-box px-4">
                                <img src="<?= $item['images'] ?>" class="img-fluid"
                                     alt="product-img">
                            </div>
                            <h6><a href="<?=$item['link'] ?>" target="_blank"><?= str_replace('Telefon mobil','',$item['name']) ?></a></h6>
                            <div class="stars-outer">
<!--                                <div class="stars-inner text-center" id="productReviews">-->
<!--                                   --><?//= $item['reviews'] ?>
<!--                                </div>-->
                                <div class="prd-logo">
                                    <img class="w-50" src="<?= $item['logo'] ?>">
                                </div>
                            </div>
                            <p class="item-price my-2">
                                <?= $item['price'] ?> <span id="lei">RON</span>
                            </p>
                            <button class="add-to-fav-button" id="cardAddToFav">
                                <i class="fa fa-heart-o"></i>
                            </button>
                            <!--                                    <a href="#" class="card-link">Another link</a>-->
                        </div>
                    </div>
                </li>

                <?php

                } ?>


                <?php

                 }
            }

} else {
    echo "Not found";
}
?>


            </ul>
        </div>
    </div>

</div>





<script>
    document.addEventListener('DOMContentLoaded', function () {



        const splide = new Splide('.splide', {
            type: 'loop',
            perPage: 3,
            perMove: 1,
        });

        splide.mount();

    });

</script>

<script src="/assets/js/getStars.js"></script>