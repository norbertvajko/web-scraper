<?php

$ch = curl_init("https://www.flanco.ro/telefoane-tablete/smartphone.html");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); //Untuk redirect absensi goblog
curl_setopt($ch, CURLOPT_POST, true); //POST request absensi ngeselin
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
curl_close($ch);
$doc = new DOMDocument();

$doc->loadHTML($result);



foreach ($doc->childNodes as $item)
if(!empty($href = $item->getAttribute('href')))
{
$ch2 = curl_init("https://www.flanco.ro/telefon-realme-c21y-32gb-3gb-ram-dual-sim-cross-black.html");
curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
//Your click results
$accountResults = curl_exec($ch2);
echo  $accountResults;
}
