
<div class="container">
    <a class="navbar-brand" href="/index.php">
        <img src="https://avatars.githubusercontent.com/u/28140896?s=200&v=4" alt="" id="productImage">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-menu"
            aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse navbar-menu" id="navbar1">

        <form action="" class="search-box w-53 ms-3" method="post" >
            <div class="bg-light rounded rounded-pill shadow-sm ">
                <div class="input-group ps-3">
                    <label class="w-90">
                        <input type="text" id="valueToSearch" name="valueToSearch" placeholder="What're you searching for?" aria-describedby="button-addon1"
                               class="form-control border-0 bg-light" />
                    </label>
                    <div class="input-group-append position-absolute end-0">
                        <button id="button-addon1" type="button" name="searchProducts" class="btn btn-link text-primary" onclick="load_data();">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>

        <div class="navbar-links ms-auto">
            <ul class="navbar-list-links m-0 d-flex justify-content-center align-items-center ">
                <li class="list-links mx-2">
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">
                            <i class="las la-user"></i>Account
                        </a>
                        <div class="dropdown-content" id="dropdown_content">
                            <?php if (isset($_SESSION['user_id'])) { ?>
                                <span><h6>Welcome</h6> <span id="usernameDropdown"><?= $_SESSION['username']; ?></span> </span>
                                <ul class="user-dropdown-content">
                                    <li class="user-dropdown-item"><a href="#">Favorites</a></li>
                                    <li class="user-dropdown-item"><a href="#">History</a></li>
                                    <li class="user-dropdown-item"><a href="#">Settings</a></li>
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
                    <a href="/views/Results.php">
                        <i class="fa fa-heart-o" style="font-size:22px"></i>
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

        <div class="popup">
            <div class="close-btn">&times;</div>
            <form action="/includes/loginValidation.php" method="post" id="loginFormID">
                <div class="form">
                    <h3>Log In</h3>
                    <div class="form-element d-flex flex-column">
                        <label>
                            <input type="text" class="inputs login_data" name="uname" id="uname" placeholder="E-mail">

                        </label>
                        <span id="username_error" class="message-error"></span>
                    </div>
                    <div class="form-element d-flex flex-column">
                        <label>
                            <input type="password" class="inputs login_data" id="password" name="password"
                                   placeholder="Password">

                        </label>
                        <span id="password_error" class="message-error"></span>
                    </div>
                    <span id="sucLogin"></span>
                    <span id="sucError"></span>
                    <div class="form-element">
                        <input type="checkbox" id="remember-me" name="remember">
                        <label for="remember-me">Remember me</label>
                    </div>
                    <div class="form-element">
                        <button onclick="save_data(); return false;" value="Login" id="loginButton">Sign In</button>
                    </div>
                    <div class="form-element">
                        <a href="#">Forgot password?</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="popupRegister popup">
            <div class="close-btn">&times;</div>
            <form action="/includes/registerValidation.php" method="post" id="registerFormID">
                <div class="form">
                    <h3>Register</h3>
                    <p>Create your free account to get started</p>
                    <div class="form-element d-flex flex-column">
                        <label>
                            <input type="text" class="inputs register_data" name="fullName" id="fullName"
                                   placeholder="Full name">
                        </label>
                        <span id="fullName_error" class="message-error"></span>
                    </div>
                    <div class="form-element d-flex flex-column">
                        <label>
                            <input type="email" class="inputs register_data" id="remail" name="remail" value=""
                                   placeholder="E-mail">
                        </label>
                        <span id="register_email_error" class="message-error"></span>
                    </div>
                    <div class="form-element d-flex flex-column">
                        <label>
                            <input type="password" class="inputs register_data" id="rpassword" name="rpassword" value=""
                                   placeholder="Password">
                        </label>
                        <span id="register_password_error" class="message-error"></span>
                    </div>
                    <div class="form-element d-flex flex-column " style="margin-bottom: 60px;">
                        <label>
                            <input type="password" class="inputs register_data" id="crpassword" name="crpassword"
                                   placeholder="Confirm Password">
                        </label>
                        <span id="cr_password_error" class="message-error"></span>
                    </div>
                    <span id="sucRegister"></span>

                    <div class="form-element">
                        <button onclick="save_register(); return false;">Register</button>
                    </div>
                    <div id="terms">
                        <p id="termsID">By registering in any way to Scrappy, you accept the Terms and conditions and Privacy
                            Policy</p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="/assets/js/logOut.js"></script>
<script src="/assets/js/searchResults.js"></script>
<script src="/assets/js/logInPopUp.js"></script>
<script src="/assets/js/registerPopUp.js"></script>
<script src="/assets/js/loginForm.js"></script>
<script src="/assets/js/registerForm.js"></script>