<div class="popup set-password" id="setPasswordPopUp">
    <div class="close-btn " id="resetPasClosBtn">&times;</div>
    <form action="" method="post" id="setPasswordForm">
        <div class="form">
            <h3 id="changePassTitle">Change your password</h3>

            <div class="form-element d-flex flex-column">
                <label>
                    <input type="password" class="inputs-n login_data" name="verify_passwd" id="verifyPWD"
                           placeholder="New password">
                </label>
                <span id="newPassError" class="message-error"></span>

                <label>
                    <input type="password" class="inputs-n login_data" name="verify_passwd_corr" id="verifyPWDCorr"
                           placeholder="Retype new password">
                </label>
                <span id="corPassError" class="message-error"></span>
                <span id="successNewPass" class="message-success"></span>


                <button type="button" class="mt-3" id="changePassB" name="changePassB">Change password</button>
            </div>
        </div>
    </form>
</div>