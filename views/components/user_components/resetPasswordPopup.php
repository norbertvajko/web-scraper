<div class="popup reset-password" id="resetPasswordPopUp">
    <div class="close-btn">&times;</div>
    <form action="" method="post" id="resetPasswordForm">
        <div class="form">
            <h3>Reset Password</h3>
            <p>Please enter your new password.</p>
            <div class="form-element d-flex flex-column">
                <label>
                    <input type="password" class="inputs-n login_data" name="reset_passwd" id="resetPassWd"
                           placeholder="Password">
                </label>
                <span id="resetPassError" class="message-error"></span>
                <div id="resetPassSuccess" class="message-success"></div>
                <label>

                    <input type="password" class="inputs-n login_data" name="reset_passwd_cor"
                           id="resetPassWdCorr"
                           placeholder="Retype password">
                </label>
                <span id="retypeError" class="message-error"></span>
                <div id="retypeSuccess" class="message-success"></div>


                <button type="button" class="mt-3" id="resetPassBFinish" name="resetPassBFinish">Reset
                    Password
                </button>
            </div>
        </div>
    </form>
</div>

<script src="/assets/js/newPasswordReset.js" ></script>
<script src="/assets/js/forgotPasswordPopUp.js" ></script>
<script src="/assets/js/forgotPasswordForm.js" ></script>