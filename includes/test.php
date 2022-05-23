<?php

$url = 'https://www.flanco.ro/telefoane-tablete/smartphone.html';

$ch = curl_init();

curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);

$result = curl_exec($ch);

$regexLink = '!<a class="product-item-link" href="(.*?)">!';

preg_match_all($regexLink, $result, $matches);

for ($i = 0; $i < count($matches[1]); $i++) {
    echo $matches[$i][1];
   $newPage = file_get_contents_curl($matches[$i][1]);
   echo $newPage;
//   $descriptionRegex = '!<div class="spec-table-col">(.*)><\/div>!';
//   $a = explode('<div class="spec-table-col">' ,$newPage);
//    echo $a[0];


}

function file_get_contents_curl($url)
{

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);

    $result = curl_exec($ch);

    return $result;
}