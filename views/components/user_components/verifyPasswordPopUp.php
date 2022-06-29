<div class="popup verify-password" id="verifyPasswordPopUp">
    <div class="close-btn " id="newPassCloseBtn">&times;</div>
    <form action="" method="post" id="verifyPasswordForm">
        <div class="form">
            <h3 id="enteryourPTitle">Parola contului</h3>

            <div class="form-element d-flex flex-column">
                <label id="lastPassInp">
                    <input type="password" class="inputs-n login_data" name="verify_passwd" id="verifyPWD"
                           placeholder="Password">
                </label>
                <span id="verifyPassError" class="message-error"></span>
                <span id="verifyPassSuccess" class="message-success"></span>
                <label>
                    <input type="text" class="inputs-n login_data hide-c" name="newEmail" id="newEmail"
                           placeholder="Noua adresa de e-mail">
                </label>
                <span id="newEmailError" class="message-error"></span>
                <span id="successNewEmail" class="message-success"></span>



                <button type="button" class="mt-3" id="verifyPassB" name="verifyPassB">Continua</button>
                <button type="button" class="mt-3 hide-c" id="changeEmailB" name="changeEmailB">Schimba e-mail</button>
            </div>
        </div>
    </form>
</div>

<!--<script src="/assets/js/verifyPasswordPopUp.js"></script>-->
