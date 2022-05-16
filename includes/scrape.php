<?php


for ($page = 0; $page < 13; $page++) {

    $curl = curl_init();
    $urls = 'https://www.flanco.ro/telefoane-tablete/smartphone/p/' . $page . '.html';

    curl_setopt($curl, CURLOPT_URL, $urls);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($curl);

    $phones = array();

# Match phones name

//    $regex_title = '!<h2>(.*?)<\/h2>!';
//    $regex_rating = '!<div class="rating-result" id="rating-result_.*?"><span><span>(.*?)(?:%)<\/span><\/span><\/div>!';
//    $regex_stock = '!<div class="produs-status">.*>(.*?)<\/span>  <\/div> <\/div>!';
//    $regex_image = '!<span class=""><img class=""  src="(.*?)" .*"\/><\/span><\/span>!';
    $regex_price = '!<span class="special-price"><span class="price">(.*?)(?:,)<|<span class="singlePrice"><span class="price">(.*?)(?:,)<!';

//    $phones['name'] = scrape_data($regex_title,$result);
//    $phones['rating'] = scrape_data($regex_rating,$result);
//    $phones['inStock'] = scrape_data($regex_stock,$result);
//    $phones['image'] = scrape_data($regex_image,$result);
    $phones['price'] = scrape_data($regex_price,$result);
//    $phones['price'][$i]


# Match phone price block
//    preg_match_all('!<div class="price-box price-final_price" data-role="priceBox" data-product-id=".*?" data-price-box="product-id-.*?">(.*)!', $result, $match);

# Match prices individually
//    $first_price = '!<span class="special-price"><span class="price">(.*?)(?:,)<!';
//    $second_price = '!<span class="singlePrice"><span class="price">(.*?)(?:,)<!';


//    for ($i = 0; $i < count($match[1]); $i++) {
//        if (preg_match($first_price, $match[1][$i], $nPhones_price)) {
//            $phones['price'][$i] = str_replace('.', '', $nPhones_price[1]);
//        if (preg_match($second_price, $match[1][$i], $nPhones_price)) {
//            $phones['price'][$i] = str_replace('.', '', $nPhones_price[1]);;
//        }
//    }

# Match stock


# Match image

//    $phones['shop'] = "Flanco";

    print_r($phones);
    curl_close($curl);
}

function scrape_data($regex_stock, $result) {
    preg_match_all($regex_stock, $result, $match);
    $full_match = $match[1];
    if (count($match) >= 3){
        var_dump(count($match));
        for ($i = 0; $i <=count($match); $i++) {
            for ($j = 0; $j <=count($match[$i]); $j++) {
                if ($full_match[$i] == '' && !empty($match[$i])) {
                    $full_match[$j] = $match[$i][$j];
                }
            }
        }
      //  return $full_match;
    }
    return $full_match;
}
