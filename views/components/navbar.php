<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top bor-sha">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="https://avatars.githubusercontent.com/u/28140896?s=200&v=4" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-menu"
                aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar-menu" id="navbar1">
            <ul class="navbar-nav col-md-5 fw-500 fb-fc ms-lg-5 ms-md-0 ms-sm-0">
                <li class="nav-item">
                    <a class="nav-link" href="/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/views/Results.php">Favorites</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/views/About%20Us.php">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/views/Contact.php">Contact</a>
                </li>
            </ul>
            <form class="search-form d-md-block d-lg-none w-50 my-sm-4 my-md-4">
                <div class="input-form">
                    <label class="input-label w-100">
                        <input type="search" class="form-control" placeholder="Search"/>
                    </label>
                </div>
            </form>

            <ul class="navbar-nav d-flex flex-row ms-auto">
                <li class="nav-item me-3 me-lg-0">
                    <button type="button" class="log-in-btn" id="showLogin">Log In</button>
                </li>
                <li class="nav-item me-3 me-lg-0 ">
                    <button type="button" class="register-btn" id="showRegister">Register</button>
                </li>
            </ul>
            <div class="popup">
                <div class="close-btn">&times;</div>
                <form action="/includes/loginValidation.php" method="post" id="loginFormID">
                    <div class="form">
                        <h3>Log In</h3>
                        <div class="form-element d-flex flex-column">
                            <input type="text" class="inputs login_data" name="uname" id="uname" placeholder="Username">
                            <span id="username_error" class="message-error"></span>
                        </div>
                        <div class="form-element d-flex flex-column">
                            <input type="password" class="inputs login_data" id="password" name="password" placeholder="Password">
                            <span id="password_error" class="message-error"></span>
                        </div>
                        <span id="sucLogin"></span>
                        <div class="form-element">
                            <input type="checkbox" id="remember-me">
                            <label for="remember-me">Remember me</label>
                        </div>
                        <div class="form-element">
                            <button onclick="save_data(); return false;">Sign In</button>
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
                            <input type="text" class="inputs register_data" name="fullName" id="fullName" placeholder="Full name">
                            <span id="fullName_error" class="message-error"></span>
                        </div>
                        <div class="form-element d-flex flex-column">
                            <input type="email" class="inputs register_data" id="remail" name="remail" placeholder="E-mail">
                            <span id="register_email_error" class="message-error"></span>
                        </div>
                        <div class="form-element d-flex flex-column">
                            <input type="password" class="inputs register_data" id="rpassword" name="rpassword" placeholder="Password">
                            <span id="register_password_error" class="message-error"></span>
                        </div>
                        <div class="form-element d-flex flex-column " style="margin-bottom: 60px;">
                            <input type="password" class="inputs register_data" id="crpassword" name="crpassword" placeholder="Confirm Password">
                            <span id="cr_password_error" class="message-error"></span>
                        </div>
                        <span id="sucRegister"></span>

                        <div class="form-element">
                            <button onclick="save_register(); return false;">Register</button>
                        </div>
                        <div id="terms" >
                            <p>By registering in any way to Scrappy, you accept the Terms and conditions and Privacy Policy</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</nav>

<script src="/assets/js/logInPopUp.js"></script>
<script src="/assets/js/registerPopUp.js"></script>
<script src="/assets/js/loginForm.js"></script>
<script src="/assets/js/registerForm.js"></script>