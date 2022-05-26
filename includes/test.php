<?php

//    $url = 'https://www.flanco.ro/telefoane-tablete/smartphone.html';
//
//    $ch = curl_init();
//
//    curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
//    curl_setopt($ch, CURLOPT_HEADER, 0);
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//    curl_setopt($ch, CURLOPT_URL, $url);
//    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
//
//    $result = curl_exec($ch);
//
//    $regexLink = '!<a class="product-item-link" href="(.*?)">!';
//
//    preg_match_all($regexLink, $result, $matches);
//
//    for ($i = 0; $i < count($matches[1]); $i++) {
//    echo $matches[$i][1];
//        $newPage = file_get_contents_curl($matches[$i][1]);
//
//        $specsRegex = '!(<div class="spec-table-col">.*<\/div>)!';
//        preg_match_all($specsRegex, $newPage, $descriptions);
//
//        echo $descriptions[$i][1];
//
//    }


//np_get_contents_curl('https://www.flanco.ro/telefoane-tablete/smartphone.html',
//    '<a class="product-item-link" href="(.*?)">',
//    '!(<div class="spec-table-col">.*<\/div>)!');


function np_get_contents_curl($url,$secondPageLink,$secondPageContent)
{

    $result = get_contents($url);
    sec_page($secondPageLink,$result,$secondPageContent);

}

function get_contents($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);

    $result = curl_exec($ch);

    return $result;
}
function sec_page($secondPageLink,$result,$secondPageContent) {
    preg_match_all($secondPageLink, $result, $matches);

    for ($i = 0; $i < count($matches[1]); $i++) {
//        echo $matches[$i][1];
        $newPage = get_contents($matches[$i][1]);

        preg_match_all($secondPageContent, $newPage, $descriptions);

        echo $descriptions[$i][1];

    }

    return $matches[1];
}