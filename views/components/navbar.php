<div class="container">
    <a class="navbar-brand" href="/index.php">
        <img src="https://avatars.githubusercontent.com/u/28140896?s=200&v=4" alt="" id="productImage">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-menu"
            aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse navbar-menu" id="navbar1">

        <form action="" class="search-box  w-53"  method="post">
            <div class="bg-light rounded rounded-pill shadow-sm ">
                <div class="input-group ps-3">
                    <label class="w-90">
                        <input type="text" id="valueToSearch" name="valueToSearch"
                               placeholder="What're you searching for?" aria-describedby="button-addon1"
                               onkeyup="imu(this.value)"
                               class="form-control border-0 bg-light"/>
                    </label>

                    <div class="input-group-append position-absolute end-0">
                        <button id="button-addon1" type="button" name="searchProducts"
                                class="btn btn-link text-primary">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>


                </div>

            </div>

        </form>
        <div id="products-list"">
                <div id="img-drop"></div>
                <div id="title-drop"></div>
        </div>
        <div class="navbar-links ms-auto">
            <ul class="navbar-list-links m-0 d-flex justify-content-center align-items-center ">
                <li class="list-links mx-2">
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">
                            <i class="las la-user"></i>Account
                        </a>
                        <div class="dropdown-content" id="dropdown_content">
                            <?php if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) { ?>
                                <span><h6>Welcome</h6> <span id="usernameDropdown"><?= $_SESSION['username']; ?></span> </span>
                                <ul class="user-dropdown-content">
                                    <li class="user-dropdown-item"><a href="/views/Favorites.php">Favorites</a></li>
                                    <li class="user-dropdown-item"><a href="/views/User_Settings.php">Settings</a></li>
                                    <li class="user-dropdown-item" id="log-out-user">Log out</li>
                                </ul>
                                <?php
                            } else {
                                ?>
                                <span class="small">Login into your account to have full control over the offers!</span>
                                <hr>
                                <div class="dropdown-body mx-auto mt-3 mb-2">
                                    <ul class="navbar-nav d-flex flex-row ">
                                        <li class="nav-item me-3 me-lg-0">
                                            <button type="button" class="log-in-btn" id="showLogin">Log In</button>
                                        </li>
                                        <li class="nav-item me-3 me-lg-0 ">
                                            <button type="button" class="register-btn" id="showRegister">Register
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </li>

                <li class="list-links mx-3">
                    <a href="/views/Favorites.php">
                        <i class="fa fa-heart-o" id="navFavIcon" style="font-size:22px"></i>
                        Favorites
                    </a>
                </li>
                <li class="list-links mx-2">
                    <a href="/views/Contact.php">
                        <i class="lar la-address-book"></i>
                        Contact
                    </a>
                </li>
            </ul>
        </div>

    <?php include "user_components/loginPopUp.php" ?>
    <?php include "user_components/registerPopUp.php" ?>
    <?php include "user_components/forgotPasswordPopup.php" ?>
    <?php include "user_components/resetPasswordPopup.php" ?>

</div>


<script src="/assets/js/recentSearches.js"></script>
<script src="/assets/js/liveSearchDropdown.js"></script>
<script src="/assets/js/newPasswordReset.js"></script>
<script src="/assets/js/logOut.js"></script>
<script src="/assets/js/searchBar.js"></script>
