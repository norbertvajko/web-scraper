<?php

for ($page = 1; $page < 13; $page++) {

    $curl = curl_init();
    $urls = 'https://www.flanco.ro/telefoane-tablete/smartphone/p/' . $page . '.html';

    curl_setopt($curl, CURLOPT_URL, $urls);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($curl);


    $regexName = '!<h2>(.*?)<\/h2>!';
    $regexRating = '!<div class="rating-result" id="rating-result_.*?"><span><span>(.*?)(?:%)<\/span><\/span><\/div>!';
    $regexStock = '!<div class="produs-status">.*>(.*?)<\/span>  <\/div> <\/div>!';
    $regexImage = '!<span class=""><img class=""  src="(.*?)" .*"\/><\/span><\/span>!';
    $regexPrice = '!<span class="special-price"><span class="price">(.*?)(?:,)<|<span class="singlePrice"><span class="price">(.*?)(?:,)<!';

    $phones = [
        'name' => scrape_data($regexName, $result),
        'rating' => scrape_data($regexRating, $result),
        'inStock' => scrape_data($regexStock, $result),
        'images' => scrape_data($regexImage, $result),
        'price' => scrape_data($regexPrice, $result)
    ];

    print_r($phones);
    curl_close($curl);
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
