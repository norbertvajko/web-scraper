<div class="popupRegister popup">
    <div class="close-btn">&times;</div>
    <form action="/includes/user/registerValidation.php" method="post" id="registerFormID">
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
                <p id="termsID">By registering in any way to Scrappy, you accept the Terms and conditions and
                    Privacy
                    Policy</p>
            </div>
        </div>
    </form>
</div>


<script src="/assets/js/registerPopUp.js"></script>
<script src="/assets/js/registerForm.js"></script>