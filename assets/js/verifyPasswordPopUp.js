function showResetPassPopUp() {

    const verifyPasswordPopup = document.querySelector(".verify-password");

    const modifyEmailButton = document.getElementById("modifyEmailB");
    const verifyPasswordForm = document.getElementById('registerFormID');
    const verifyPCloseBtn = document.getElementById('resetPasClosBtn');
    const continueBtn = document.getElementById('verifyPassB');
    const passwordInput = document.getElementById('verifyPWD');


    const verifyPasswordError = document.getElementById('verifyPassError');
    const verifyCorrPassword = document.getElementById('verifyPassSuccess');


//Enter VerifyPassPopUp
    if (modifyEmailButton) {
        // verifyPasswordPopup.classList.add("active");
        showVerifyPasswordPopUp();
        closePopUp();
        verifyPCloseBtn.addEventListener("click", function () {

            verifyPasswordForm.reset();
            closeVerifyPassPopUp();
        });

    }

    if (continueBtn) {
        continueBtn.addEventListener("click", (e) => {

            const formData = new FormData();
            formData.append(passwordInput.name, passwordInput.value);

            let request = new XMLHttpRequest();
            request.open('POST', '../../includes/verifyPassword.php');

            if (request.readyState === 4 && request.status === 200) {
                let response = JSON.parse(request.responseText);

                if (response.success !== '') {
                    verifyCorrPassword.innerHTML = response.success;
                }
                else {
                    verifyPasswordError.innerHTML = response.pass_error;
                }
            }
            request.send(formData);
        });
    }


    function showVerifyPasswordPopUp() {
        console.log(verifyPasswordPopup);
        verifyPasswordPopup.classList.add("active");

    }

    function closeVerifyPassPopUp() {
        verifyPasswordPopup.classList.remove("active");
        verifyPasswordForm.reset();
        verifyPasswordError.innerHTML = "";

    }


}