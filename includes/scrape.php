<?php

include "connDB.php";
include "test.php";


$flancoProducts = [
    'name' => '!<h2>(.*?)<\/h2>!',
    'price' => '!<span class="special-price"><span class="price">(.*?)(?:,)<|<span class="singlePrice"><span class="price">(.*?)(?:,)<!',
    'rating' => '!<div class="rating-result" id="rating-result_.*?"><span><span>(.*?)(?:%)<\/span><\/span><\/div>!',
    'inStock' => '!<div class="produs-status">.*>(.*?)<\/span>  <\/div> <\/div>!',
    'images' => '!<span class=""><img class=""  src="(.*?)" .*"\/><\/span><\/span>!',
    'link' => '!<a class="product-item-link" href="(.*?)">!',
    'logo' => '!aria-label="store logo"><img src="(.*?)"!',
];

for ($page = 1; $page < 13; $page++) {

    webCrawl('https://www.flanco.ro/telefoane-tablete/smartphone/p/' . $page. '.html', $flancoProducts); }
//
//
//
//
//$ideallProducts = [
//    'name' => '!<a href="\/.*?\/.*" title=".*">(.*?)<\/a>!',
//    'price' => '!<span class=".*?">(.*?)<sup>.*?<\/sup>.*?<\/span>!',
//    'rating' => '!!',
//    'inStock' => '!<span class="category-delivery-text">(.*?)<\/span>|<div class="category-delivery-container">
//
//                    .*<span class="">(.*?)<\/span>
//
//                        <\/div>!',
//    'images' => '!<img src="(.*?)\?w=200&h=200" id=".*?"!',
//    'link' => '!<span class="titlewrapper">
//               .*<a href="(.*?)" title=".*<\/a>
//               .*<\/span>!'
//];
//for ($page = 1; $page < 27; $page++) { webCrawl('https://www.ideall.ro/magazin-telefoane-mobile?pag=' . $page, $ideallProducts); }
//
//
//$quickProducts = [
//    'name' => '!<div class="card-product-description ">
//                (.*?)
//            <\/div>!',
//    'price' => '!<div class="priceFormat card-price" translate="no">(.*?)<sup>.*?<\/sup><sub>Lei<\/sub><\/div>!'
//];
//webCrawl('https://www.quickmobile.ro/telefoane-si-accesorii/telefoane-mobile', $quickProducts);
//
//$emagProducts = [
//    'name' => '!class="card-v2-title semibold mrg-btm-xxs js-product-url" data-zone="title">(.*?)<\/a>!',
//    'reviews' => '!<span class="average-rating semibold">(.*?)<\/span>!'
//];
//webCrawl('https://www.emag.ro/telefoane-mobile/p2/c',$emagProducts);
//
//$evoProducts = [
//    'name' => '!<h2>
//            <a href=".*?"> (.*?)<\/a>        <\/h2>!',
//    'price' => '!<div style=".*?"><span class="real_price">(.*?) .*<\/span><\/div>!',
//    'rating' => '!<div class="rating-result" id="rating-result_.*?"><span><span>(.*?)(?:%)<\/span><\/span><\/div>!',
//    'inStock' => '!class="stock_instocmagazin">
//                    .(.*?).\/span>!',
//    'images' => '!<span class=""><img class=""  src="(.*?)" .*"\/><\/span><\/span>!',
//    'link' => '! <a href="(.*?)"> .*<\/a>        <\/h2>!'
//
//
//];
//var_dump($evoProducts);
//webCrawl('https://www.evomag.ro/solutii-mobile-telefoane-mobile/', $evoProducts);


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
        $products[$key] = scrape_data($value, $result, $key);
    }
    print_r($products);

    $obj = json_encode($products);
    $test = json_decode($obj);

    for ($i = 0; $i < count($test->name); $i++) {
        upload_data($test, $i);
    }
}


function scrape_data($regex_stock, $result, $key)
{
    preg_match_all($regex_stock, $result, $match);

    for ($i = 0; $i < count($match[1]); $i++) {
        if ($match[1][$i] == '') {
            $match[1][$i] = $match[2][$i];
        }
        if ($key == "link"){
            var_dump($match[1][$i]);
//            np_get_contents_curl($match[1][$i],'<a class="product-item-link" href="(.*?)">','!(<div class="spec-table-col">.*<\/div>)!');
            var_dump(np_get_contents_curl($match[1][$i],'<a class="product-item-link" href="(.*?)">','!(<div class="spec-table-col">.*<\/div>)!'));
            die;
        }
    }
    return $match[1];
}
function upload_data($phones, $index)
{
    $phoneName = $phones->name[$index];
    $phoneReviews = $phones->rating[$index];
    $phonePrice = str_replace('.', '', $phones->price[$index]);
    $phonePrice = str_replace(',', '.', $phonePrice);
    $phoneInStock = $phones->inStock[$index];
    $phoneImages = $phones->images[$index];
    $phoneLink = $phones->link[$index];
    $phoneLogo = $phones->logo[0];


//    $query = "INSERT INTO products (shop_id, category_id, name, description, reviews, price, in_stock, images , link, logo)
//  			  VALUES('4', '1', '$phoneName', 'fdsfsd', '$phoneReviews', '$phonePrice', '$phoneInStock', '$phoneImages', '$phoneLink', '$phoneLogo')";
//
//    if (!mysqli_query($GLOBALS['conn'], $query))
//        echo mysqli_error($GLOBALS['conn']) . '<br>';

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
