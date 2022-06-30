<!--SPLIDE-->
<link rel="stylesheet" href="/assets/css/splide.min.css">
<!--SPLIDE-->
<script src="/assets/js/splide.min.js"></script>



<div class="container">
    <h3 class="mb-30">Most searched products</h3>
    <div class="splide" id="slider1" role="group" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list">


                <?php

include 'includes/db/connDB.php';

$sql = "SELECT product_id, count(*) AS c FROM recent_searches GROUP BY product_id HAVING MAX(c) ORDER BY c ASC";
$result = mysqli_query($GLOBALS['conn'], $sql);


if ($result) {


    foreach ($result as $row) {

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
                            <h6><a href="<?="views/Results.php?productId=".$prod_id ?>" target="_blank"><?= str_replace('Telefon mobil','',$item['name']) ?></a></h6>
                            <div class="stars-outer">
                                <div class="prd-logo">
                                    <a href="<?=$item['link']?>"target="_blank"><img class="w-50" alt="" src="<?= $item['logo'] ?>"></a>
                                </div>
                            </div>
                            <p class="item-price my-2">
                                <?= $item['price'] ?> <span id="lei">RON</span>
                            </p>
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



        const splide = new Splide('#slider1', {
            type: 'loop',
            perPage: 3,
            perMove: 1,
        });

        splide.mount();

    });

</script>



<!--<script>-->
<!--    document.addEventListener( 'DOMContentLoaded', function() {-->
<!--        new Splide('#slider1').mount();-->
<!--    } );-->
<!--</script>-->