<div class="popup change-password" id="changePasswordPopUp">
    <div class="close-btn " id="resetPasClosBtn">&times;</div>
    <form action="" method="post" id="changePasswordForm">
        <div class="form">
            <h3 id="changePassTitle">Schimba parola</h3>

            <div class="form-element d-flex flex-column">
<!--                <label>-->
<!--                    <input type="password" class="inputs-n login_data mb-30" name="curr_passwd" id="currPWD"-->
<!--                           placeholder="Parola curenta">-->
<!--                </label>-->
<!--                <span id="currPassErr" class="message-error"></span>-->

                <label>
                    <input type="password" class="inputs-n login_data" name="change_passwd" id="changePWD"
                           placeholder="Noua parola">
                </label>
                <span id="passErr" class="message-error"></span>

                <label>
                    <input type="password" class="inputs-n login_data" name="change_passwd_corr" id="changePWDCorr"
                           placeholder="Re-introdu noua parola">
                </label>
                <span id="cPassErr" class="message-error"></span>
                <span id="succPass" class="message-success"></span>


                <button type="button" class="mt-3" id="changePassBtn" name="changePassBtn">Schimba parola</button>
            </div>
        </div>
    </form>
</div>