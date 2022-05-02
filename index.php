<?php ;
    $main_header = "
<div class=\"container p-4\">
           <div class=\"row\">
               <h2 class=\"main-features-title text-center\">MAIN FEATURES</h2>
               <div class=\"col-12 col-md-6 col-lg-4\">
                   <div class=\"price-comparassion p-3 my-3 \">
                       <div class=\"price-comparassion-header d-flex justify-content-between align-items-center flex-lg-row flex-column\" >
                           <img src=\"assets/images/output-onlinepngtools.png \" class=\"img-fluid price-comparassion-logo \">
                           <h2 class=\"price-comparassion-title text-center \">Detailed price comparison</h2>
                       </div>
                       <div class=\"price-comparassion-description\">
                           <ul class=\"price-comparassion-list py-3\">
                               <li class=\"price-list \"><i class=\"fa fa-check me-2\" aria-hidden=\"true\"></i>Gather data at
                                   scale from a majority of websites
                               </li>
                               <li class=\"price-list\"><i class=\"fa fa-check me-2\" aria-hidden=\"true\"></i>Real-time data
                                   collection in HTML format
                               </li>
                               <li class=\"price-list\"><i class=\"fa fa-check me-2\" aria-hidden=\"true\"></i>100% data
                                   delivery
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>
               <div class=\"col-12 col-md-6 col-lg-4\">
                   <div class=\"price-comparassion p-3 my-3 \">
                       <div class=\"price-comparassion-header d-flex justify-content-between align-items-center flex-lg-row flex-column\">
                           <img src=\"assets/images/price-alert.png \" class=\"img-fluid price-comparassion-logo\">
                           <h2 class=\"price-comparassion-title text-center \">
                               Price Change Alerts
                           </h2>
                       </div>
                       <div class=\"price-comparassion-description\">
                           <ul class=\"price-comparassion-list py-3\">
                               <li class=\"price-list\"><i class=\"fa fa-check me-2\" aria-hidden=\"true\"></i>Gather
                                   data at
                                   scale from a majority of websites
                               </li>
                               <li class=\"price-list\"><i class=\"fa fa-check me-2\" aria-hidden=\"true\"></i>Real-time
                                   data
                                   collection in HTML format
                               </li>
                               <li class=\"price-list\"><i class=\"fa fa-check me-2\" aria-hidden=\"true\"></i>100% data
                                   delivery
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>
               <div class=\"col-12 col-md-12 col-lg-4\">
                   <div class=\"price-comparassion p-3 my-3\">
                       <div class=\"price-comparassion-header d-flex justify-content-between align-items-center flex-lg-row flex-column\">
                           <img src=\"assets/images/price-analyt.png \" class=\"img-fluid price-comparassion-logo\">
                           <h2 class=\"price-comparassion-title text-center \">Reporting & Price Analytics</h2>
                       </div>
                       <div class=\"price-comparassion-description\">
                           <ul class=\"price-comparassion-list py-3\">
                               <li class=\"price-list\"><i class=\"fa fa-check me-2\" aria-hidden=\"true\"></i>Gather data at
                                   scale from a majority of websites
                               </li>
                               <li class=\"price-list\"><i class=\"fa fa-check me-2\" aria-hidden=\"true\"></i>Real-time data
                                   collection in HTML format
                               </li>
                               <li class=\"price-list\"><i class=\"fa fa-check me-2\" aria-hidden=\"true\"></i>100% data
                                   delivery
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
       </div>";

    $main_body = include "views/components/carousel.php";
?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>


    <meta charset="UTF-8">
    <meta content="Search engine for IT products and compare them" name="description">
    <meta content="Best offer, IT Products , Scrape" name="keywords">
    <meta content="Vojko Norbert" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Scrappy</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="icon" type="image/x-icon" href="assets/images/spider-title-logo.png">
    <link href="assets/css/home-page.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous">
    </script>

    <!-- PHP -->



</head>
<body>

<!--------------------------------------------- Start Nav Bar Area ---------------------------------------------------->

<?php include 'views/components/navbar.php'; ?>

<!--------------------------------------------- End Nav Bar Area ------------------------------------------------------>


<!--------------------------------------------- Start Banner Area ----------------------------------------------------->
<header class="banner-area">
    <div class="container">
        <div class="row py-6">
            <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12 banner-text">
                <h1>Scrappy <br>
                    Web Scraping tool</h1>
                <p>kdasndasodnndadlkdnaadansakd <br>
                    fdsnfsdkfnsflfsdfs</p>
            </div>
            <div class="terminal-banner col-lg-6 col-md-12 col-xs-12 col-sm-12">
                <div class="terminal-header">
                    <div class="terminal-icons">
                        <div class="terminal-icon-close"></div>
                        <div class="terminal-icon-min"></div>
                        <div class="terminal-icon-max"></div>
                    </div>
                </div>
                <div class="terminal-body position-relative">
                    <div class="terminal-question px-5 py-5" id="msgText">
                    </div>
                    <div class="terminal-answer">
<!--                       <form method="POST" action="Products.php>    -->
                                <input type="text" id="inputText" class="terminal-search"/>
<!--                        </form>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!----------------------------------------------- End Banner Area ----------------------------------------------------->


<!----------------------------------------------- Start Main Area ----------------------------------------------------->

<main class="main-content">

    <section class="main-features p-3">
            <?php echo $main_header ?>
    </section>


    <section class="carousel-best-offer">
        <?php echo $main_body ?>
    </section>

    <section class="scrappy-benefits">

    </section>



</main>
<!------------------------------------------------- End Main Area ----------------------------------------------------->

<!----------------------------------------------- Start Footer Area --------------------------------------------------->

<?php include "views/components/footer.php"; ?>

<!------------------------------------------------ End Footer Area ---------------------------------------------------->

<script src="assets/js/terminalText.js"></script>
<script src="assets/js/logInPopUp.js"></script>

</body>
</html>