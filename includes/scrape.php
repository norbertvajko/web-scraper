<?php

$curl = curl_init();

$url = 'https://www.flanco.ro/telefoane-tablete/smartphone/p/9.html';

curl_setopt($curl, CURLOPT_URL , $url);
curl_setopt($curl , CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($curl);

$phones = array();


# Match phones name
$regex_title = '!<h2>(.*?)<\/h2>!';
preg_match_all($regex_title,$result,$match);
$phones['name'] = $match[1];
//print_r($phones['name']);


# Match phone price block
preg_match_all('!<div class="price-box price-final_price" data-role="priceBox" data-product-id=".*?" data-price-box="product-id-.*?">(.*)!',$result , $match);

# Match prices individually
$first_price = '!<span class="special-price"><span class="price">(.*?)(?:,)<!';
$second_price = '!<span class="singlePrice"><span class="price">(.*?)(?:,)<!';

for ($i=0; $i<count($match[1]); $i++) {
    if (preg_match($first_price, $match[1][$i], $nPhones_price)) {
        $phones['price'][$i] = $nPhones_price[1];
    }
    elseif (preg_match($second_price, $match[1][$i], $nPhones_price)) {
        $phones['price'][$i] = $nPhones_price[1];
    }
}


# Match phone rating
$regex_rating = '!<div class="rating-result" id="rating-result_.*?"><span><span>(.*?)(?:%)<\/span><\/span><\/div>!';
preg_match_all($regex_rating , $result , $match);
$phones['rating'] = $match[1];
//print_r($phones['rating']);


# Match stock
$regex_stock = '!<div class="produs-status">.*>(.*?)<\/span>  <\/div> <\/div>!';
preg_match_all($regex_stock , $result , $match);
$phones['inStock'] = $match[1];


# Match image
$regex_image = '!<span class=""><img class=""  src="(.*?)" .*"\/><\/span><\/span>!';
preg_match_all($regex_image , $result , $match);
$phones['image'] = $match[1];

print_r($phones);