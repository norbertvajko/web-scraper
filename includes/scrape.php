<?php

include "connDB.php";
//
//$flancoProducts = [
//    'name' => '!<h2>(.*?)<\/h2>!',
//    'price' => '!<span class="special-price"><span class="price">(.*?)(?:,)<|<span class="singlePrice"><span class="price">(.*?)(?:,)<!',
//    'rating' => '!<div class="rating-result" id="rating-result_.*?"><span><span>(.*?)(?:%)<\/span><\/span><\/div>!',
//    'inStock' => '!<div class="produs-status">.*>(.*?)<\/span>  <\/div> <\/div>!',
//    'images' => '!<span class=""><img class=""  src="(.*?)" .*"\/><\/span><\/span>!',
//    'link' => '!<a class="product-item-link" href="(.*?)">!'
//];
//
//for ($page = 1; $page < 13; $page++) { webCrawl('https://www.flanco.ro/telefoane-tablete/smartphone/p/' . $page. '.html', $flancoProducts); }
//
//$ideallProducts = [
//    'name' => '!<a href="\/.*?\/.*" title=".*">(.*?)<\/a>!',
//    'price' => '!<span class=".*?">(.*?)<sup>.*?<\/sup>.*?<\/span>!',
//    'rating' => '!!',
//    'inStock' => '!<span class="category-delivery-text">(.*?)<\/span>|<div class="category-delivery-container">
//
//.*<span class="">(.*?)<\/span>
//
//                        <\/div>!',
//    'images' => '!<img src="(.*?)\?w=200&h=200" id=".*?"!',
//    'link' => '!!'
//];
//for ($page = 1; $page <27; $page++) { webCrawl('https://www.ideall.ro/magazin-telefoane-mobile?pag='.$page , $ideallProducts); }

//$celProducts = [
//    'name' => '!class="productListing-data-b product_link product_name"><span >(.*?)<\/span>!'
//];
//webCrawl('https://www.cel.ro/telefoane-mobile/',$celProducts);

//$quickProducts = [
//    'name' => '!<a\s\shref=".*?"\s>
//.*?<div class="card-product-title" translate="no" style="white-space: nowrap; max-width: 200px; overflow: hidden;">
//.*?.*?
//.*?<\/div>
//.*?<div class="card-product-description ">
//.*?(.*?)
//.*?<\/div>
//.*?<\/a>!',
//    'price' => '!<div class="priceFormat card-price" translate="no">(.*?)<sup>.*?<\/sup><sub>Lei<\/sub><\/div>!'
//];
//webCrawl('https://www.quickmobile.ro/telefoane-si-accesorii/telefoane-mobile', $quickProducts);

//$altexProducts = [
//  'name' => '!<h2 class="Product-nameHeading leading-20 text-sm truncate-3-lines min-h-60px">(.*?)<\/h2>!',
//    'price' => '!<span class="Price-int leading-none">(.*?)<\/span>!'
//];
//webCrawl('https://altex.ro/telefoane/cpl/',$altexProducts);

//$emagProducts = [
//    'name' => '!class="card-v2-title semibold mrg-btm-xxs js-product-url" data-zone="title">(.*?)<\/a>!',
//    'reviews' => '!<span class="average-rating semibold">(.*?)<\/span>!'
//];
//webCrawl('https://www.emag.ro/telefoane-mobile/c?tree_ref=13&ref=cat_tree_93',$emagProducts);

function webCrawl($url, $products)
{

    $curlOptions = [
        '0' => [
            'option_name' => CURLOPT_URL,
            'option_value' => $url
        ],
        '1' => [
            'option_name' => CURLOPT_RETURNTRANSFER,
            'option_value' => true
        ],
        '2' => [
            'option_name' => CURLOPT_FAILONERROR,
            'option_value' => true
        ],
        '3' => [
            'option_name' => CURLOPT_USERAGENT,
            'option_value' => 'Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.204 Safari/534.16'
        ],
        '4' => [
            'option_name' => CURLOPT_FOLLOWLOCATION,
            'option_value' => true
        ],
        '5' => [
            'option_name' => CURLOPT_AUTOREFERER,
            'option_value' => true
        ],
        '6' => [
            'option_name' => CURLOPT_SSL_VERIFYPEER,
            'option_value' => false
        ],
        '7' => [
            'option_name' => CURLOPT_HEADER,
            'option_value' => true
        ]

    ];

    $result = curl_data($curlOptions);

    foreach ($products as $key => $value) {
        $products[$key] = scrape_data($value, $result);
    }
    print_r($products);

    $obj = json_encode($products);
    $test = json_decode($obj);

//    for ($i = 0; $i < count($test->name); $i++) {
//        upload_data($test, $i);
//    }
}
function scrape_data($regex_stock, $result)
{
    preg_match_all($regex_stock, $result, $match);

    for ($i = 0; $i < count($match[1]); $i++) {
        if ($match[1][$i] == '') {
            $match[1][$i] = $match[2][$i];
        }
    }

    return $match[1];
}
function upload_data($phones, $index)
{
    $phoneName = $phones->name[$index];
    $phoneReviews = $phones->rating[$index];
    $phonePrice = str_replace(',', '', $phones->price[$index]);
    $phoneInStock = $phones->inStock[$index];
    $phoneImages = $phones->images[$index];
    $phoneLink = $phones->link[$index];

    $query = "INSERT INTO products (shop_id, category_id, name, description, reviews, price, in_stock, images , link)
  			  VALUES('4', '1', '$phoneName', 'fdsfsd', '$phoneReviews', '$phonePrice', '$phoneInStock', '$phoneImages', '$phoneLink')";

    if (!mysqli_query($GLOBALS['conn'], $query))
        echo mysqli_error($GLOBALS['conn']) . '<br>';

}
function curl_data($options)
{
    $curl = curl_init();

    for ($i = 0; $i < count($options); $i++) {
        curl_setopt($curl, $options[$i]['option_name'], $options[$i]['option_value']);
    }

    if (!$curl) {
        echo "Page not reached!";
        exit();
    }
    return curl_exec($curl);
}


