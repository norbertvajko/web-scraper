<?php

$curl = curl_init();

$url = 'https://www.flanco.ro/telefoane-tablete/smartphone/p/1.html';

curl_setopt($curl, CURLOPT_URL , $url);
curl_setopt($curl , CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($curl);

$products = array();

# Match phones name
$regex_title = '!<h2>.*?<\/h2>!';
preg_match_all($regex_title,$result,$match);
$phones['name'] = $match[0];
//print_r($phones['name']);


# Match phone price
$regex_price = '!<span class="special-price"><span class="price">(.*?)(?:,)<sup class="decimal">(.*?)<\/sup> lei<\/span><\/span>!';
preg_match_all($regex_price,$result,$match);
$phones['price'] = $match[1] . '.' . $match[2];
//print_r($phones['price']);


# Match phone rating
$regex_rating = '!<span><span>(.*?)<\/span><\/span>!';
preg_match_all($regex_rating , $result , $match);
$phones['rating'] = $match[0];
print_r($phones['rating']);



