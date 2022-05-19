<?php
$productsConfig = [
    [
        'url' => 'https://www.flanco.ro/telefoane-tablete/smartphone/p/',
        'products' => [
            'name' => '!<h2>(.*?)<\/h2>!',
            'price' => '!<span class="special-price"><span class="price">(.*?)(?:,)<|<span class="singlePrice"><span class="price">(.*?)(?:,)<!',
            'rating' => '!<div class="rating-result" id="rating-result_.*?"><span><span>(.*?)(?:%)<\/span><\/span><\/div>!',
            'inStock' => '!<div class="produs-status">.*>(.*?)<\/span>  <\/div> <\/div>!',
            'images' => '!<span class=""><img class=""  src="(.*?)" .*"\/><\/span><\/span>!',
            'link' => '!<a class="product-item-link" href="(.*?)">!'
        ],
        'url' => 'https://www.ideall.ro/magazin-telefoane-mobile?pag=',
        'products' => [
            'name' => '!<a href="\/.*?\/.*" title=".*">(.*?)<\/a>!',
            'price' => '!<span class=".*?">(.*?)<sup>.*?<\/sup>.*?<\/span>!',
            'rating' => '!!',
            'inStock' => '!<span class="category-delivery-text">(.*?)<\/span>|<div class="category-delivery-container">

                    .*<span class="">(.*?)<\/span>

                        <\/div>!',
            'images' => '!<img src="(.*?)\?w=200&h=200" id=".*?"!',
            'link' => '!<span class="titlewrapper">
               .*<a href="(.*?)" title=".*<\/a>
               .*<\/span>!'
        ],
        'url' => 'https://www.quickmobile.ro/telefoane-si-accesorii/telefoane-mobile',
        'products' => [
            'name' => '!<div class="card-product-description ">
                (.*?)
            <\/div>!',
            'price' => '!<div class="priceFormat card-price" translate="no">(.*?)<sup>.*?<\/sup><sub>Lei<\/sub><\/div>!'
        ],
        'url' => 'https://www.evomag.ro/solutii-mobile-telefoane-mobile/',
        'products' => [
            'name' => '!<h2>
            <a href=".*?"> (.*?)<\/a>        <\/h2>!',
            'price' => '!<div style=".*?"><span class="real_price">(.*?) .*<\/span><\/div>!',
            'rating' => '!<div class="rating-result" id="rating-result_.*?"><span><span>(.*?)(?:%)<\/span><\/span><\/div>!',
            'inStock' => '!class="stock_instocmagazin">
                    .(.*?).\/span>!',
            'images' => '!<span class=""><img class=""  src="(.*?)" .*"\/><\/span><\/span>!',
            'link' => '! <a href="(.*?)"> .*<\/a>        <\/h2>!'
        ]
    ]

];