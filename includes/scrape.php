<?php

//$request_url = 'https://www.flanco.ro';
$request_url = 'https://www.cel.ro';

$ch = curl_init();
$userAgent = "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13";

curl_setopt($ch, CURLOPT_URL, $request_url);    // The url to get links from
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);    // We want to get the respone
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true);
curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
curl_setopt($ch, CURLOPT_VERBOSE, true);


$result = curl_exec($ch);

echo $result;

$info = curl_getinfo($ch);
$err = curl_error($ch);
$ern = curl_errno($ch);

if ($ern) {
    printf("An error occurred: (%d) %s\n", $ern, $err);
    exit(1);
}
//curl_close($ch);

//printf("Response body size: %d\n", $info["size_download"]);
//
//echo $result;
//
//$regex = '/EM.listingGlobals.items\s=\s(.*])/';
//preg_match_all($regex, $result, $parts);
//$links = $parts[0];
//foreach ($links as $link) {
//    echo $link . "<br>";
//}
curl_close($ch);