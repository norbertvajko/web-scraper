<?php
session_start();
$user_id = $_SESSION['user_id'];
$is_logged_in = isset($user_id) && !empty($user_id);

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta charset="UTF-8">
    <meta content="Search engine for IT products and compare them" name="description">
    <meta content="Best offer, IT Products , Scrape" name="keywords">
    <meta content="Vojko Norbert" name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Settings</title>

    <!-- Icons -->
    <link rel="stylesheet"
          href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="icon" type="image/x-icon" href="../assets/images/spider-title-logo.png">
    <link href="../assets/css/home-page.css" rel="stylesheet">
    <link href="../assets/css/user-settings.css" rel="stylesheet">
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

<div class="blur" id="blur">

    <!----------------------------------------------- Start Main Area ----------------------------------------------------->
    <div class="container main-user-cont">
        <main class="main-results">
            <section class="user-account-content user-account-security">
                <div class="uas-header">
                    <div class="uas-header-title">
                        <h1 class="user-settings-title-h1">  <i class="fa fa-cog fa-2x" aria-hidden="true"></i>Setări siguranță</h1>
                    </div>
                </div>


                <?php

                if ($is_logged_in) {
                require_once '../includes/db/connDB.php';
                include "components/user_components/verifyPasswordPopUp.php";
                include "components/user_components/changeUserPasswordPopUp.php";

                $sql = " SELECT email FROM users WHERE ID = '$user_id'";
                $result = mysqli_query($GLOBALS['conn'], $sql);


                if ($result->num_rows > 0) {
                foreach ($result

                as $row) {
                $email = $row['email'];
                ?>
                <div class="uas-content">
                    <div class="uas-content-main">
                        <div class="uas-setting uas-setting-email">
                            <div>
                                <div class="uas-setting-details">
                                    <div class="mb-3">
                                        <h2 class="font-size-md font-semi-bold"><i class="fa fa-envelope " aria-hidden="true"></i>E-mail</h2>
                                        <div class="text-gray">Adresa de email actuală a contului tău este <span id="fontBoldSize"> <?= $email ?> </span> </div>
                                    </div>

                                    <div class="uas-setting-actions">

                                        <button class="btn btn-primary" id="modifyEmailB" onclick="showResetEmailPopUp();" > modifică</button>
                                    </div>
                                </div>
                                <div class="uas-setting uas-setting-password">
                                    <div>
                                        <div class="uas-setting-details">
                                            <div class="mb-3">
                                                <h2 class="font-size-md font-semi-bold"><i class="fa fa-key" aria-hidden="true"></i>Parola</h2>
                                                <div class="text-gray">Este o idee bună să folosești o parolă puternică pe care
                                                    nu o mai folosești și în altă parte
                                                </div>
                                            </div>

                                            <div class="uas-setting-actions">
                                                <button class="btn btn-primary" id="modifyPassB" onclick="showResetPassPopUp();" > modifică</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                                <?php
                                }

                                }
                                } else { ?>
                                    <p>Trebuie sa fii logat pentru a avea acces la setarile contului!</p>
                                    <button type="button" class="btn btn-primary" id="loginBTN">Logheaza-te</button>
                                <?php }
                                ?>

                            </div>
                        </div>

            </section>
        </main>
    </div>


    <!------------------------------------------------- End Main Area ----------------------------------------------------->
</div>
<!----------------------------------------------- Start Footer Area --------------------------------------------------->

<?php include "components/footer.php"; ?>

<!------------------------------------------------ End Footer Area ---------------------------------------------------->
<!--<script>-->
<!--    function myFunction() {-->
<!--        const searchButton = document.getElementById('search-button');-->
<!--        const searchInput = document.getElementById('search-input');-->
<!--        searchButton.addEventListener('click', () => {-->
<!--            const inputValue = searchInput.value;-->
<!--            alert(inputValue);-->
<!--        });-->
<!--    }-->
<!--</script>-->

<script src="/assets/js/setNewPassword.js"></script>
<script src="/assets/js/recentSearches.js"></script>
<script src="/assets/js/verifyPasswordPopUp.js"></script>
<!--<script src="/assets/js/searchResults.js"></script>-->
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





