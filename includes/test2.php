<?php

function get_contents($url)
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
$pageOne = get_contents('https://www.flanco.ro/telefoane-tablete/smartphone.html');
$pageTwo = scrape_data('!<a class="product-item-link" href="(.*?)">!',$pageOne);


$data = array();
$data = [
    'name' =>scrape_data('!<h2>(.*?)<\/h2>!',$pageOne),
    'stock' => scrape_data('!<div class="produs-status">.*>(.*?)<\/span>  <\/div> <\/div>!',$pageOne),
    'link' => scrape_data('!<a class="product-item-link" href="(.*?)">!',$pageOne),
    'description' => scrape_data('!(<div class="spec-table-col">.*<\/div>)!',$pageTwo),

    ];

print_r($data);