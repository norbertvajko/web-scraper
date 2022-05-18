<?php
//
//// Create a user agent so websites don't block you
//$userAgent = 'Googlebot/2.1 (https://www.google.bot.com/bot.html)';
//
//// Create the initial link you want.
//$target_url = 'https://www.emag.ro/';
//
//// Initialize curl and following options
//$ch = curl_init();
//curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
//curl_setopt($ch, CURLOPT_URL,$target_url);
//curl_setopt($ch, CURLOPT_FAILONERROR, true);
//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
//curl_setopt($ch, CURLOPT_AUTOREFERER, true);
//curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
//curl_setopt($ch, CURLOPT_TIMEOUT, 10);
//
//
//// Grab the html from the page
//$html = curl_exec($ch);
//
//// Error handling
//if(!$html){
//    //handle error if page was not reachable, etc
//    exit();
//}
//
//
//// Create a new DOM Document to handle scraping
//$dom = new DOMDocument();
//@$dom->loadHTML($html);
//
//// $product_list = $dom->getElementById()
//
//$h1s = $dom->getElementsByTagName('h2'); //returns DOMNodeList object
//$h1_array = array();
//
//foreach($h1s as $h1) {
//    $title_text = $h1->textContent;
//    $h1_array[] = $title_text;
//    echo $title_text . '<br>';
//}
//
//// fix html5/svg errors
//libxml_use_internal_errors(true);
//
//// $dom->loadHTML("<section></section>");
//// $htmlNodes = $dom->getElementsByTagName('section');
//
//
//// get your element, you can do this numerous ways like getting by tag, id or using a DOMXPath object
//// This example gets elements with id forward-link which might be a div or ul or li, etc
//// It then gets all the a tags (links) within all those divs, uls, etc
//// Then it takes the first link in the array of links and then grabs the href from the link
//// $search = $dom->getElementById('main-container');
//// $forwardlink = $search->getElementsByTagName('a');
//// $forwardlink = $forwardlink->item(0);
//// // $forwardlink = $getNamedItem('');
//// $href = $forwardlink->textContent;
//
//
//// Now that you have the link you want to follow/click to
//// Set the target_url for the cUrl to the new url
//curl_setopt($ch, CURLOPT_URL, $target_url);
//
//$html = curl_exec($ch);
//
//
//// do what you want with your new link!
///
///
///

$url = file_get_contents("https://www.flanco.ro/telefoane-tablete/smartphone/p/1.html");
echo $url;
