<?php

include "connDB.php";

function web_crawl($pageSt , $pageIndex ) {
    for ($page = $pageSt; $page < $pageIndex; $page++) {

        $result = curl_data(
            [
                '0' => [
                    'option_name' => CURLOPT_URL,
                    'option_value' => 'https://www.flanco.ro/telefoane-tablete/smartphone/p/' . $page . '.html'
                ],
                '1' => [
                    'option_name' => CURLOPT_RETURNTRANSFER,
                    'option_value' => true
                ],
            ]
        );

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
            'price' => scrape_data($regexPrice, $result),
//        'description' => scrape_data($regexDescription, $result),
//        'link' => scrape_data(link, $result)
        ];

        $obj = json_encode($phones);
        $test = json_decode($obj);

        for ($i = 0; $i < count($test->name); $i++)
            upload_data($test, $i);
    }
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
    $phonePrice = $phones->price[$index];
    $phoneInStock = $phones->inStock[$index];
    $phoneImages = $phones->images[$index];

    $query = "INSERT INTO products (shop_id, category_id, name, description, reviews, price, in_stock, images)
  			  VALUES('4', '1', '$phoneName', 'fdsfsd', '$phoneReviews', '$phonePrice', '$phoneInStock', '$phoneImages')";

    if (!mysqli_query($GLOBALS['conn'], $query))
        echo mysqli_error($GLOBALS['conn']) . '<br>';

}

function curl_data($options)
{
    $curl = curl_init();

    for ($i = 0; $i < count($options); $i++) {
        curl_setopt($curl, $options[$i]['option_name'], $options[$i]['option_value']);
    }
    return curl_exec($curl);
}




web_crawl(1,5, );