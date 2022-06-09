const forgotPasswordButton = document.querySelector('#forgottenPasswordLink');
const forgottenCloseButton = document.querySelector(".forgot-password .close-btn");
const forgotPasswordPopUp = document.querySelector(".forgot-password");
const forgotPasswordForm = document.getElementById('forgotPasswordForm');
const forgottenEmailError = document.getElementById('forgotEmailError');

const forgottenSuccess = document.getElementById('forgotEmailSuccess');



//Enter ForgotPass PopUp
if (forgotPasswordButton) {
    forgotPasswordButton.addEventListener("click", function () {

        closeLoginPopUp();
        showForgotPasswordPopUp();

        //if register button is clicked while forgot password active
        if (registerButton) {
            registerButton.onclick = function () {
                forgotPasswordPopUp.classList.remove("active");
                clearFPErrors();
                forgotPasswordForm.reset();
            }
        }
        //if login button is clicked while forgot password active
        if (loginButton) {
            loginButton.onclick = function () {
                forgotPasswordPopUp.classList.remove("active");
                clearFPErrors();
                forgotPasswordForm.reset();
            }
        }



    });
}

//Exit ForgotPass PopUp
forgottenCloseButton.addEventListener("click", function () {

    forgotPasswordForm.reset();
    closeForgotPasswordPopUp();

});


function showForgotPasswordPopUp() {
    forgotPasswordPopUp.classList.add("active");
    forgotPasswordPopUp.style.display = 'block';
    addBlur();
}

function closeForgotPasswordPopUp() {
    forgotPasswordPopUp.classList.remove("active");
    removeBlur();

    //reset error messages
    clearFPErrors();

}

function clearFPErrors() {
    forgottenEmailError.innerHTML = "";
    forgottenSuccess.innerHTML = "";
}