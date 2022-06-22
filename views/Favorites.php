<?php

session_start();
$noOfFavorites = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="Free Web Scrape , Search products " name="description">
    <meta content="Scrape , Crawl , Web Scrape , Web Crawler" name="keywords">
    <meta content="Vajko Norbert" name="author">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Favorites</title>

    <!-- Icons -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="../assets/css/favorites-page.css" rel="stylesheet">
    <link href="../assets/css/home-page.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous">
    </script>
</head>
<body>

<!--------------------------------------------- Start Nav Bar Area ---------------------------------------------------->

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top bor-sha">
    <?php include "components/navbar.php"; ?>
</nav>

<!--------------------------------------------- End Nav Bar Area ------------------------------------------------------>

<!--------------------------------------------- Start Banner Area ----------------------------------------------------->
<div class="blur" id="blur">

<header class="fav-header mt-62">
    <?php
//    include "components/favorite_components/fav_header.php";
    ?>
</header>

    <!----------------------------------------------- End Banner Area ----------------------------------------------------->


    <!----------------------------------------------- Start Main Area ----------------------------------------------------->

    <main class="main-favorites  p-5">
        <div class="menu-user">
            <div class="menu-user-header p-5 ">

                <div class="menu-user-logo text-center p-3">
                    <img src="https://s13emagst.akamaized.net/layout/ro/static-upload/icon_guest.png" alt=""
                         class="img-fluid">
                </div>
                <?php if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) { ?>
                    <div class="menu-user-body-title">

                        <h5 class="text-center">
                            Hello, <?= $_SESSION['username']; ?>
                            <h6 class="text-center text-success mt-4">We are happy to see you back!</h6>
                        </h5>


                    </div>
                    <?php
                        } else {
                        ?>
                    <div class="menu-user-body-title">
                        <h5 class="text-center">
                            Hello, please sign in
                            <h6 class="text-center"> In order to have full control with our offers</h6>
                        </h5>
                    </div>

                    <div class="menu-user-footer d-flex flex-column">
                        <button type="button" class="btn btn-primary mb-2 w-50 m-auto" id="loginBTN">Login</button>
                        <button type="button" class="btn btn-primary w-50 m-auto" id="registerBTN">Register</button>
                    </div>
                <?php } ?>
            </div>
        </div>

        <?php if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {

            $user_id = $_SESSION['user_id'];
            require_once "../includes/connDB.php";
            $sql = "SELECT name, reviews, price, images, in_stock FROM products LEFT JOIN favorites ON products.id = favorites.product_id WHERE favorites.user_id = '$user_id'";
            $result = mysqli_query($GLOBALS['conn'], $sql);

            if ($result->num_rows) {

                foreach ($result as $row) {

                    $noOfFavorites++;

                    ?>
                    <div id="list-of-favorites" class="list-of-favorites mx-auto">
                        <div class="product-card-account pad-sep-sm js-tracking-viewport-product">
                            <div class="d-flex">
                                <div class="card-image px-5 flex-item flex-c"><a href="#"
                                                                                 class="thumbnail-wrapper js-product-url">
                                        <div class="thumbnail"><img src="<?= $row['images'] ?>" alt="Product Image">
                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex flex-item flex-wrap card-container">
                                    <div class="card-content pad-hrz-sm flex-item">
                                        <h2 class="mrg-sep-none  margin-card-content">
                                            <a href="#" class="product-title font-semi-bold">
                                                <span id="favCardTitleC"><?= $row['name'] ?></span>
                                            </a>
                                        </h2>
                                        <div class="mrg-btm-xs">
                                            <div class="stars-outer">
                                                <div class="stars-inner" id="productRevi">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-secondary pad-hrz-sm flex-item text-right">
                                        <div class="favorite-product-availability product-stock-status text-availability-in_stock">
                                            <b><?= $row['in_stock'] ?></b>
                                        </div>

                                        <div class="margin-card-content">
                                                   Vandut de:
                                            <span class="font-semi-bold inline-block--top nowrap-ellipsis">
                                                    eMAG
                                             </span>
                                        </div>

                                        <div class="mrg-btm-xs product-pricing">
                                         <?= $row['price'] ?> <span> lei</span>
                                        </div>
                                        <div class="actions-wrapper">
                                            <div class="content">
                                                <form action="https://www.emag.ro/newaddtocart?source=front&amp;ref=fav_add-to-cart-btn&amp;ref_zone=FavoritesPage&amp;X-Product-Id=6006799&amp;X-Search-Position=0&amp;X-Search-Page=&amp;X-Search-Id=&amp;X-Section=&amp;X-MB="
                                                      method="post" novalidate="true" data-id="6006799"><input
                                                            type="hidden" name="product[]" value="6006799">
                                                    <button class="btn btn-warning">Vezi produsul</button>
                                                </form>
                                            </div>
                                            <div>
                                                <button class="btn btn-link btn-sm" id="btnVeziProd"
                                                        data-product="{&quot;id&quot;:25858451,&quot;category&quot;:{&quot;id&quot;:492,&quot;name&quot;:&quot;Televizoare&quot;,&quot;sef_name&quot;:&quot;televizoare&quot;,&quot;display_type&quot;:&quot;default&quot;,&quot;department&quot;:{&quot;id&quot;:190,&quot;name&quot;:&quot;TV, Audio-Video &amp; Foto&quot;,&quot;sef_name&quot;:&quot;tv-audio-video-foto&quot;},&quot;subdepartment&quot;:{&quot;id&quot;:6,&quot;name&quot;:&quot;Televizoare &amp; accesorii&quot;,&quot;sef_name&quot;:&quot;televizoare-accesorii&quot;},&quot;trail&quot;:&quot;TV, Audio-Video &amp; Foto\/Televizoare &amp; accesorii\/Televizoare&quot;,&quot;listing_id&quot;:2,&quot;english_name&quot;:&quot;Televisions&quot;,&quot;configurator&quot;:{&quot;link&quot;:&quot;\/shopping-assistant\/televizoare&quot;,&quot;text&quot;:&quot;Gaseste usor televizorul potrivit&quot;,&quot;new&quot;:true,&quot;ref&quot;:&quot;config-TV&quot;,&quot;url&quot;:{&quot;path&quot;:&quot;\/shopping-assistant\/televizoare&quot;,&quot;desktop_base&quot;:&quot;https:\/\/www.emag.ro&quot;,&quot;mobile_base&quot;:&quot;https:\/\/www.emag.ro&quot;},&quot;icon&quot;:&quot;https:\/\/s13emagst.akamaized.net\/layout\/ro\/static-upload\/icon-bec-shopping-assistant.png&quot;,&quot;headline&quot;:&quot;Cu Product Finder&quot;,&quot;body_text&quot;:&quot;gasesti usor ce iti doresti&quot;,&quot;button_text&quot;:&quot;Alege produsul potrivit&quot;}},&quot;name&quot;:&quot;Televizor LED Star-Light, 80 cm, 32DM3501, HD&quot;,&quot;part_number_key&quot;:&quot;DV5WW6BBM&quot;,&quot;image&quot;:{&quot;original&quot;:&quot;https:\/\/s13emagst.akamaized.net\/products\/25859\/25858451\/images\/res_f38f45a53a499462c3fd0fd684ff07a0.jpg&quot;,&quot;resized_images&quot;:[{&quot;size&quot;:&quot;200x200&quot;,&quot;url&quot;:&quot;https:\/\/s13emagst.akamaized.net\/products\/25859\/25858451\/images\/res_f38f45a53a499462c3fd0fd684ff07a0.jpg?width=200&amp;height=200&amp;hash=A4DD9D9E5EC48D295CC1E8FE293BA84A&quot;}]},&quot;multiple_offers_count&quot;:1,&quot;used_offers_count&quot;:0,&quot;offers_count&quot;:1,&quot;multiple_min_price&quot;:0,&quot;used_min_price&quot;:0,&quot;offer&quot;:{&quot;id&quot;:6006799,&quot;type&quot;:1,&quot;price&quot;:{&quot;current&quot;:499.99,&quot;is_min&quot;:false,&quot;is_max&quot;:false,&quot;legal&quot;:0,&quot;prefix&quot;:&quot;Empty prefix&quot;,&quot;suffix&quot;:&quot;Empty suffix Lei&quot;,&quot;is_visible&quot;:true,&quot;discount&quot;:{&quot;type&quot;:&quot;value&quot;,&quot;absolute&quot;:390,&quot;percent&quot;:43,&quot;is_special&quot;:false,&quot;is_visible&quot;:false,&quot;is_restricted_from_view&quot;:true,&quot;is_max&quot;:false,&quot;label&quot;:&quot;Diferen\u021b\u0103:&quot;,&quot;labeled_as_discount&quot;:false},&quot;currency&quot;:{&quot;id&quot;:23,&quot;name&quot;:{&quot;default&quot;:&quot;RON&quot;,&quot;display&quot;:&quot;Lei&quot;}},&quot;net&quot;:420.1597,&quot;recommended_retail_price&quot;:{&quot;amount&quot;:889.99,&quot;is_visible&quot;:true,&quot;label&quot;:&quot;PRP:&quot;,&quot;tooltip&quot;:&quot;Acesta este Pre\u021bul Recomandat de Produc\u0103tor. Pre\u021bul de v\u00e2nzare al produsului este afi\u0219at mai jos.&quot;},&quot;lowest_price_30_days&quot;:{&quot;amount&quot;:0,&quot;is_visible&quot;:false,&quot;tooltip&quot;:&quot;Pre\u021bul t\u0103iat este cel mai mic pre\u021b la care a fost v\u00e2ndut produsul \u00een ultimele 30 zile.&quot;},&quot;initial&quot;:499.99},&quot;flags&quot;:{&quot;is_main&quot;:true,&quot;is_used&quot;:false,&quot;is_sales&quot;:false,&quot;is_active&quot;:true,&quot;has_discount&quot;:true,&quot;may_be_ordered&quot;:true,&quot;has_ecredit&quot;:false,&quot;has_bundles&quot;:false,&quot;has_gifts&quot;:false,&quot;has_bundle_first&quot;:false,&quot;is_self_source&quot;:false,&quot;has_warranty&quot;:false,&quot;has_badges&quot;:false,&quot;is_visible&quot;:true,&quot;has_services&quot;:false,&quot;has_buyback&quot;:false,&quot;has_two_hour_delivery&quot;:false,&quot;has_same_day_delivery&quot;:false,&quot;has_three_hour_delivery&quot;:false,&quot;has_free_delivery&quot;:false,&quot;has_delivery_estimate&quot;:true,&quot;has_pickup&quot;:false,&quot;has_unified_badges&quot;:true,&quot;has_loyalty_points&quot;:false,&quot;has_banners&quot;:false,&quot;is_fulfilment_by_emag&quot;:false,&quot;show_legal_price&quot;:false,&quot;has_free_return&quot;:false,&quot;is_open_package&quot;:false,&quot;is_bf&quot;:false,&quot;has_campaign_badge&quot;:false,&quot;is_custom_discount&quot;:false,&quot;has_unfair_price&quot;:false,&quot;is_genius_eligible&quot;:true,&quot;genius_eligibility_type&quot;:1,&quot;has_courier_6h_delivery&quot;:false,&quot;only_in_showroom&quot;:false},&quot;available_delivery_methods&quot;:[&quot;default&quot;],&quot;unit&quot;:{&quot;id&quot;:1,&quot;name&quot;:&quot;buc&quot;,&quot;value&quot;:1},&quot;legal_unit&quot;:{&quot;id&quot;:1,&quot;name&quot;:&quot;buc&quot;,&quot;value&quot;:1},&quot;vendor&quot;:{&quot;id&quot;:1,&quot;name&quot;:{&quot;default&quot;:&quot;eMAG&quot;,&quot;display&quot;:&quot;eMAG&quot;},&quot;sef_name&quot;:&quot;emag&quot;,&quot;url&quot;:{&quot;path&quot;:&quot;\/emag\/1\/v&quot;,&quot;desktop_base&quot;:&quot;https:\/\/www.emag.ro&quot;,&quot;mobile_base&quot;:&quot;https:\/\/www.emag.ro&quot;},&quot;is_fde_eligible&quot;:true,&quot;rating&quot;:{&quot;id&quot;:4560868,&quot;vendor_id&quot;:1,&quot;rating&quot;:4.8,&quot;created&quot;:&quot;2022-06-21T02:38:06+03:00&quot;,&quot;feedback_ids&quot;:[],&quot;positive_share_rating&quot;:94}},&quot;availability&quot;:{&quot;id&quot;:3,&quot;text&quot;:&quot;\u00cen stoc&quot;,&quot;code&quot;:&quot;in_stock&quot;,&quot;days_estimation&quot;:0,&quot;showrooms&quot;:[{&quot;name&quot;:&quot;Crangasi&quot;,&quot;common_key&quot;:&quot;caa8cf94-c5cb-11e5-84a8-001a4a8c8303&quot;,&quot;locality&quot;:{&quot;id&quot;:4966,&quot;name&quot;:&quot;Bucure\u015fti&quot;}},{&quot;name&quot;:&quot;Constanta&quot;,&quot;common_key&quot;:&quot;caa923f4-c5cb-11e5-84a8-001a4a8c8303&quot;,&quot;locality&quot;:{&quot;id&quot;:7085,&quot;name&quot;:&quot;Constan\u0163a&quot;}},{&quot;name&quot;:&quot;Craiova&quot;,&quot;common_key&quot;:&quot;caa93a8c-c5cb-11e5-84a8-001a4a8c8303&quot;,&quot;locality&quot;:{&quot;id&quot;:8403,&quot;name&quot;:&quot;Craiova&quot;}},{&quot;name&quot;:&quot;Brasov&quot;,&quot;common_key&quot;:&quot;caa948ca-c5cb-11e5-84a8-001a4a8c8303&quot;,&quot;locality&quot;:{&quot;id&quot;:4701,&quot;name&quot;:&quot;Bra\u015fov&quot;}},{&quot;name&quot;:&quot;Cluj Platinia&quot;,&quot;common_key&quot;:&quot;d5b394b3-b4dc-11e8-a7d8-001a4a160153&quot;,&quot;locality&quot;:{&quot;id&quot;:6580,&quot;name&quot;:&quot;Cluj-Napoca&quot;}},{&quot;name&quot;:&quot;Galati Shopping City&quot;,&quot;common_key&quot;:&quot;d5b3b18c-b4dc-11e8-a7d8-001a4a160153&quot;,&quot;locality&quot;:{&quot;id&quot;:8933,&quot;name&quot;:&quot;Gala\u0163i&quot;}},{&quot;name&quot;:&quot;Targu Mures&quot;,&quot;common_key&quot;:&quot;7caadacd-523d-11ea-95eb-b02628b35fcc&quot;,&quot;locality&quot;:{&quot;id&quot;:13921,&quot;name&quot;:&quot;T\u00e2rgu-Mure\u015f&quot;}},{&quot;name&quot;:&quot;Suceava Iulius Mall&quot;,&quot;common_key&quot;:&quot;8c7d7068-176b-11eb-95eb-b02628b35fcc&quot;,&quot;locality&quot;:{&quot;id&quot;:17452,&quot;name&quot;:&quot;Suceava&quot;}},{&quot;name&quot;:&quot;Ploiesti Afi&quot;,&quot;common_key&quot;:&quot;d2801f00-2a58-11eb-95eb-b02628b35fcc&quot;,&quot;locality&quot;:{&quot;id&quot;:15700,&quot;name&quot;:&quot;Ploie\u015fti&quot;}},{&quot;name&quot;:&quot;Satu Mare&quot;,&quot;common_key&quot;:&quot;0093ff85-92c5-11eb-a9f2-fa163e3078d0&quot;,&quot;locality&quot;:{&quot;id&quot;:16551,&quot;name&quot;:&quot;Satu Mare&quot;}},{&quot;name&quot;:&quot;Iasi Iulius Mall&quot;,&quot;common_key&quot;:&quot;af9151f3-92c6-11eb-a9f2-fa163e3078d0&quot;,&quot;locality&quot;:{&quot;id&quot;:11671,&quot;name&quot;:&quot;Ia\u015fi&quot;}}],&quot;color&quot;:{&quot;r&quot;:0,&quot;g&quot;:153,&quot;b&quot;:0,&quot;a&quot;:1},&quot;display_type&quot;:&quot;default&quot;},&quot;swipe&quot;:{&quot;is_visible&quot;:true},&quot;part_number&quot;:&quot;32DM3501&quot;,&quot;display_type&quot;:&quot;default&quot;,&quot;buying_options&quot;:{&quot;type&quot;:&quot;incremental&quot;,&quot;default&quot;:1,&quot;min&quot;:1,&quot;max&quot;:1,&quot;step&quot;:[1],&quot;unit&quot;:{&quot;id&quot;:1,&quot;name&quot;:&quot;buc&quot;,&quot;value&quot;:1},&quot;storage_type&quot;:{&quot;id&quot;:1},&quot;has_delivery&quot;:false,&quot;has_pickup&quot;:false,&quot;has_easybox&quot;:false,&quot;price&quot;:499.99},&quot;unified_badges&quot;:[{&quot;label&quot;:&quot;Recomandarea eMAG&quot;,&quot;background_color&quot;:{&quot;r&quot;:34,&quot;g&quot;:167,&quot;b&quot;:240},&quot;type&quot;:&quot;commercial&quot;,&quot;fixed_position&quot;:0}],&quot;short_badges&quot;:&quot;cRe&quot;,&quot;loyalty&quot;:{&quot;discount_bau&quot;:0,&quot;discount_cmp&quot;:0,&quot;campaign_id&quot;:0},&quot;labels&quot;:[{&quot;id&quot;:7,&quot;name&quot;:&quot;Retur gratuit in 30 de zile&quot;,&quot;icon&quot;:{&quot;char_code&quot;:&quot;E660&quot;,&quot;name&quot;:&quot;return-30&quot;},&quot;url&quot;:{&quot;path&quot;:&quot;\/help\/30-de-zile-drept-de-retur\/&quot;,&quot;desktop_base&quot;:&quot;https:\/\/www.emag.ro&quot;,&quot;mobile_base&quot;:&quot;https:\/\/m.emag.ro&quot;},&quot;path&quot;:{&quot;original&quot;:&quot;https:\/\/s13emagst.akamaized.net\/assets\/ro\/css\/font-icons\/emagicons\/_pngs\/uE660-return-30.png&quot;}}],&quot;url_genius&quot;:&quot;https:\/\/s13emagst.akamaized.net\/layout\/ro\/static-upload\/logo_genius_app.png&quot;,&quot;url_genius_badge&quot;:&quot;https:\/\/s13emagst.akamaized.net\/layout\/ro\/static-upload\/badge-genius-2.png&quot;,&quot;url_genius_badge_rounded&quot;:&quot;https:\/\/s13emagst.akamaized.net\/layout\/ro\/static-upload\/badge-genius-1.png&quot;,&quot;return_period&quot;:0,&quot;redirect_custom_discount&quot;:{&quot;is_custom_discount&quot;:false},&quot;bnpl2&quot;:{&quot;is_eligible&quot;:true,&quot;notification&quot;:&quot;Comanzi acum, platesti peste 30 zile!&quot;,&quot;url_description&quot;:&quot;Vezi cum functioneaza&quot;,&quot;url&quot;:&quot;https:\/\/www.emag.ro\/lps\/bnpl2-modal&quot;},&quot;slice_it&quot;:{&quot;is_eligible&quot;:true,&quot;notification&quot;:&quot;Comanzi acum, platesti in 4 rate fara dobanda!&quot;,&quot;url_description&quot;:&quot;Vezi cum functioneaza&quot;,&quot;url&quot;:&quot;https:\/\/www.emag.ro\/lps\/slice-modal&quot;},&quot;bnpl2_slice_it&quot;:{&quot;is_eligible&quot;:true,&quot;notification&quot;:&quot;Cumperi acum, platesti peste 30 de zile sau in 4 rate.&quot;,&quot;url_description&quot;:&quot;Vezi cum functioneaza&quot;,&quot;url&quot;:&quot;https:\/\/www.emag.ro\/lps\/bnpl2slice-modal&quot;},&quot;bnpl2_slice_it_is_eligible_card_expired&quot;:{&quot;is_eligible&quot;:true,&quot;notification&quot;:&quot;Cardul t\u0103u a expirat. Adaug\u0103 un card nou, valabil, \u0219i po\u021bi pl\u0103ti \u00een 4 rate sau peste 30 de zile.&quot;,&quot;url_description&quot;:&quot;Vezi detalii&quot;,&quot;url&quot;:&quot;https:\/\/www.emag.ro\/lps\/bnpl-save-card&quot;},&quot;bnpl2_slice_it_is_eligible_without_card&quot;:{&quot;is_eligible&quot;:true,&quot;notification&quot;:&quot;Salveaz\u0103 cardul \u00een contul t\u0103u \u0219i po\u021bi pl\u0103ti \u00een 4 rate sau peste 30 de zile.&quot;,&quot;url_description&quot;:&quot;Vezi detalii&quot;,&quot;url&quot;:&quot;https:\/\/www.emag.ro\/lps\/bnpl-save-card&quot;},&quot;purchasable_type&quot;:&quot;tangible_goods&quot;},&quot;feedback&quot;:{&quot;rating&quot;:4.68,&quot;questions&quot;:{&quot;count&quot;:17,&quot;add_url&quot;:{&quot;path&quot;:&quot;\/product-feedback\/televizor-led-star-light-80-cm-hd-32dm3501\/pd\/DV5WW6BBM\/question\/add&quot;,&quot;desktop_base&quot;:&quot;https:\/\/www.emag.ro&quot;,&quot;mobile_base&quot;:&quot;https:\/\/www.emag.ro&quot;}},&quot;answers&quot;:23,&quot;reviews&quot;:{&quot;count&quot;:139,&quot;add_url&quot;:{&quot;path&quot;:&quot;\/product-feedback\/televizor-led-star-light-80-cm-hd-32dm3501\/pd\/DV5WW6BBM\/review\/add&quot;,&quot;desktop_base&quot;:&quot;https:\/\/www.emag.ro&quot;,&quot;mobile_base&quot;:&quot;https:\/\/www.emag.ro&quot;},&quot;view_url&quot;:{&quot;path&quot;:&quot;\/product-feedback\/televizor-led-star-light-80-cm-hd-32dm3501\/pd\/DV5WW6BBM\/reviews&quot;,&quot;desktop_base&quot;:&quot;https:\/\/www.emag.ro&quot;,&quot;mobile_base&quot;:&quot;https:\/\/www.emag.ro&quot;}}},&quot;url&quot;:{&quot;path&quot;:&quot;\/televizor-led-star-light-80-cm-hd-32dm3501\/pd\/DV5WW6BBM\/&quot;,&quot;desktop_base&quot;:&quot;https:\/\/www.emag.ro&quot;,&quot;mobile_base&quot;:&quot;https:\/\/www.emag.ro&quot;},&quot;quick_uri&quot;:&quot;\/quick-modal\/product\/DV5WW6BBM\/&quot;,&quot;sef_name&quot;:&quot;televizor-led-star-light-80-cm-hd-32dm3501&quot;,&quot;scm_super_category&quot;:{&quot;id&quot;:1516,&quot;name&quot;:&quot;TV&quot;},&quot;flags&quot;:{&quot;has_multiple&quot;:false,&quot;has_used&quot;:false,&quot;has_description&quot;:false,&quot;has_characteristics&quot;:false,&quot;has_image_gallery&quot;:false,&quot;has_video_gallery&quot;:false,&quot;has_image&quot;:true,&quot;has_image360&quot;:false,&quot;has_offer&quot;:true,&quot;has_family&quot;:false,&quot;is_family&quot;:false,&quot;has_profiling_widgets&quot;:true,&quot;has_datalayer_info&quot;:true,&quot;has_recommendations&quot;:true,&quot;may_be_compared&quot;:true,&quot;has_pac&quot;:false,&quot;has_pac_bundle&quot;:false,&quot;is_infringement&quot;:false,&quot;show_active_users&quot;:false,&quot;allow_favorites&quot;:true,&quot;allow_feedback&quot;:true},&quot;availability_key&quot;:0,&quot;resource&quot;:{&quot;type&quot;:&quot;products&quot;,&quot;id&quot;:&quot;DV5WW6BBM&quot;},&quot;used_offer_id_having_min_price&quot;:0,&quot;added_to_favorites_count&quot;:0,&quot;bnpl&quot;:{&quot;is_eligible&quot;:false,&quot;notification&quot;:&quot;Comanzi acum, platesti peste 15 zile!&quot;}}"
                                                        data-listid="0">
                                                    <i class="em em-delete gtm_9p2y1a"></i>
                                                    <span class="hidden-sm hidden-xs gtm_9p2y1a">Sterge</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            } else { ?>

                <div class="menu-user-body ms-35">
                    <div class="menu-user-content h-100">
                        <div class="menu-user-title text-start d-flex flex-row align-items-center p-3">
                            <h1>Favorites</h1>
                            <span><?= $noOfFavorites ?> products</span>
                        </div>
                        <div class="menu-user-photo">
                            <div class="no-favorites-photo d-flex justify-content-center">
                                <img src="https://cdn.dribbble.com/users/1291846/screenshots/3720238/media/1038c769be34018f642b683e83fca9ea.png"
                                     class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="menu-user-description d-flex justify-content-center">
                            <h4>You have no products in your list</h4>
                        </div>
                        <div class="menu-user-recomandation">
                            <div class="recomndation-p d-flex justify-content-center">
                                <p>Go take a look at the most popular products</p>
                            </div>
                            <div class="recomandation-btn d-flex justify-content-center"
                            ">
                            <button type="button" class="btn btn-primary ">See offers</button>
                        </div>
                    </div>
                </div>
            <?php }
        } else { ?>

            <div class="menu-user-body ms-35">
                <div class="menu-user-content h-100">
                    <div class="menu-user-title text-start d-flex flex-row align-items-center p-3">
                        <h1>Favorites</h1>
                        <span><?= $noOfFavorites ?> products</span>
                    </div>
                    <div class="menu-user-photo">
                        <div class="no-favorites-photo d-flex justify-content-center">
                            <img src="https://cdn.dribbble.com/users/1291846/screenshots/3720238/media/1038c769be34018f642b683e83fca9ea.png"
                                 class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="menu-user-description d-flex justify-content-center">
                        <h4>You have no products in your list</h4>
                    </div>
                    <div class="menu-user-recomandation">
                        <div class="recomndation-p d-flex justify-content-center">
                            <p>Go take a look at the most popular products</p>
                        </div>
                        <div class="recomandation-btn d-flex justify-content-center"
                        ">
                        <button type="button" class="btn btn-primary">See offers</button>
                    </div>
                </div>
            </div>
        <?php }
        ?>
    </main>



<!------------------------------------------------- End Main Area ----------------------------------------------------->

<!----------------------------------------------- Start Footer Area --------------------------------------------------->

<?php include "components/footer.php"; ?>

<!------------------------------------------------ End Footer Area ---------------------------------------------------->
    <script>
        document.addEventListener('DOMContentLoaded',() => {
            // console.log(getStars(4));
            document.getElementById('productRevi').innerHTML = getStars(<?= $row['reviews']?>)
        })
    </script>

<script>


    const logIN = document.getElementById('loginBTN');
    const register = document.getElementById('registerBTN')

    if (logIN) {
    logIN.addEventListener("click", () => {
        showLoginPopUp();
    });
    }
    if (register) {
        register.addEventListener("click", () => {
            showRegisterPopUp();
        });
    }


</script>


</body>

</html>