<div class="popup">
    <div class="close-btn">&times;</div>
    <form action="/includes/user/loginValidation.php" method="post" id="loginFormID">
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
                <a id="forgottenPasswordLink" type="button">Forgot Password?</a>
                <!--                        return false will prevent browser from following the link-->

            </div>

        </div>
    </form>
</div>

<script src="/assets/js/logInPopUp.js"></script>
<script src="/assets/js/loginForm.js"></script>

