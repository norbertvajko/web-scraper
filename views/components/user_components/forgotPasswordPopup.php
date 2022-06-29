<div class="popup forgot-password" id="forgotPasswordPopUp">
    <div class="close-btn">&times;</div>
    <form action="" method="post" id="forgotPasswordForm">
        <div class="form">
            <h3>Reset Password</h3>
            <p id="resetPassDescription">Please, provide your e-mail address in order to reset your
                password.</p>
            <div class="form-element d-flex flex-column">
                <label>
                    <input type="email" class="inputs-n login_data" name="forgottenemail" id="forgottenemail"
                           placeholder="E-mail">
                </label>
                <span id="forgotEmailError" class="message-error"></span>
                <div id="forgotEmailSuccess" class="message-success"></div>
                <label>

                    <input type="text" class="inputs-n login_data hide-c" name="forgottencode" id="forgottencode"
                           placeholder="8-digit code" maxlength="8">
                </label>
                <span id="codeError" class="message-error"></span>
                <div id="codeSuccess" class="message-success"></div>

                <button type="button" class="hide-c mt-3" id="resetPassB"  name="resetPassB" onclick="new_password(); return false;">Reset Password</button>
                <div class="countdown-time mt-3" id="ten-countdown">Reset password authentification token expires in <span id="time">15:00</span> minutes!</div>
            </div>
            <div class="form-element">
                <button id="continueBtn" onclick="save_forgot_pass(); return false;">Continue</button>
            </div>
        </div>
    </form>
</div>