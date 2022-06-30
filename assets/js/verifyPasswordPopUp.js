function showResetEmailPopUp() {

    const verifyPasswordPopup = document.querySelector(".verify-password");

    const modifyEmailButton = document.getElementById("modifyEmailB");
    const verifyPasswordForm = document.getElementById('registerFormID');
    const verifyPCloseBtn = document.querySelector(".verify-password .close-btn");
    const continueBtn = document.getElementById('verifyPassB');
    const passwordInput = document.getElementById('verifyPWD');

    const verifyPasswordError = document.getElementById('verifyPassError');
    const verifyCorrPassword = document.getElementById('verifyPassSuccess');


//Enter VerifyPassPopUp
    if (modifyEmailButton) {

        showVerifyPasswordPopUp();
        verifyPCloseBtn.addEventListener("click", function () {

            verifyPasswordForm.reset();
            closeVerifyPassPopUp();
            passwordInput.value = "";
            verifyPasswordError.innerHTML = "";
            verifyCorrPassword.innerHTML = "";
        });

    }

    if (continueBtn) {
        continueBtn.addEventListener("click", (e) => {

            let fpData = new FormData();

            fpData.append(passwordInput.name, passwordInput.value);

            let ajax_request = new XMLHttpRequest();

            ajax_request.open('POST', '/includes/user/verifyPassword.php', true);

            ajax_request.send(fpData);

            ajax_request.onreadystatechange = function () {
                if (ajax_request.readyState === 4 && ajax_request.status === 200) {

                    let response = JSON.parse(ajax_request.responseText);

                    if (response.success !== '') {


                        newEmail();
                        document.getElementById('changeEmailB').addEventListener('click', () => {

                                const newEmailError = document.getElementById('newEmailError');
                                const successNewEmail = document.getElementById('successNewEmail');
                                const emailInput = document.getElementById('newEmail');
                                let request = new XMLHttpRequest();

                                let fpData = new FormData();
                                fpData.append(emailInput.name, emailInput.value);

                                request.open('POST', '../../includes/newEmail.php');
                                request.send(fpData);


                                request.onreadystatechange = function () {
                                    if (request.readyState === 4 && request.status === 200) {
                                        let response = JSON.parse(request.responseText);

                                        if (response.success !== '') {

                                            successNewEmail.innerHTML = response.success;
                                            newEmailError.innerHTML = "";

                                            setTimeout(() => {
                                                location.reload();
                                            }, 2000);
                                        } else {
                                            newEmailError.innerHTML = response.new_email_err;
                                        }
                                    }
                                }

                            }
                        )
                        ;


                    } else {
                        //display validation error
                        verifyPasswordError.innerHTML = response.pass_error;
                    }

                }
            }
        });
    }


    function showVerifyPasswordPopUp() {
        verifyPasswordPopup.classList.add("active");
    }

    function closeVerifyPassPopUp() {
        verifyPasswordPopup.classList.remove("active");
        verifyPasswordForm.reset();
        verifyPasswordError.innerHTML = "";

    }

    function newEmail() {
        document.getElementById('enteryourPTitle').innerHTML = "Introdu noua adresa de e-mail";
        verifyPasswordError.innerHTML = "";

        document.getElementById('lastPassInp').innerHTML = "";
        document.getElementById('verifyPassB').style.display = "none";


        document.getElementById('newEmail').classList.toggle('hide-c');
        document.getElementById('changeEmailB').classList.toggle('hide-c');

    }


}