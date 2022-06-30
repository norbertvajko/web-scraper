<!--SPLIDE-->
<link rel="stylesheet" href="/assets/css/splide.min.css">
<!--SPLIDE-->
<script src="/assets/js/splide.min.js"></script>


<div class="container">
    <h3 class="mb-30">Most searched products</h3>
    <div class="splide" id="slider2" role="group" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list">


                <?php

                include 'includes/db/connDB.php';



                $sql = "SELECT * FROM products ORDER BY reviews DESC LIMIT 10";
                $result = mysqli_query($GLOBALS['conn'], $sql);


//                        $newSQL = "SELECT name, reviews, price, images, in_stock, link, logo FROM products LEFT JOIN recent_searches ON products.id = recent_searches.product_id WHERE recent_searches.product_id = '$prod_id'";
//                        $newResult = mysqli_query($GLOBALS['conn'], $newSQL);

                        if ($result) {

                            foreach ($result as $item) {
                                ?>

                                <li class="splide__slide">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="img-box px-4">
                                                <img src="<?= $item['images'] ?>" class="img-fluid"
                                                     alt="product-img">
                                            </div>
                                            <h6><a href="<?= "views/Results.php?productId=" . $item['id'] ?>"
                                                   target="_blank"><?= str_replace('Telefon mobil', '', $item['name']) ?></a>
                                            </h6>
                                            <div class="stars-outer">
                                                <div class="prd-logo">
                                                    <a href="<?= $item['link'] ?>" target="_blank"><img class="w-50"
                                                                                                        alt=""
                                                                                                        src="<?= $item['logo'] ?>"></a>
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

                 else {
                    echo "Not found";
                }
                ?>


            </ul>
        </div>
    </div>

</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {


        const splide2 = new Splide('#slider2', {
            type: 'loop',
            perPage: 3,
            perMove: 1,
        });

        splide2.mount();

    });

</script>

