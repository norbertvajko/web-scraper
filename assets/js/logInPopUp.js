    const loginButton = document.querySelector("#showLogin");
    const closeButton = document.querySelector(".popup .close-btn");
    const loginPopup = document.querySelector(".popup");
    const loginForm = document.getElementById('loginFormID');
    const usernameError = document.getElementById('username_error');
    const passError = document.getElementById('password_error');
    const succError = document.getElementById('sucError');



    //Enter LoginPopUp
    if (loginButton) {
        loginButton.addEventListener("click", function () {

            showLoginPopUp();

            //if register button is clicked while login active
            registerButton.onclick = function () {
                loginPopup.classList.remove("active");
                clearErrors();
                loginForm.reset();
            }


            // clicks anywhere outside of the modal, close it
            // window.onclick = function (event) {
            //     if (event.target === loginPopup) {
            //        closeLoginPopUp();
            //     }
            //     console.log(event.target);
            // }

        });
    }

//Exit Login
    closeButton.addEventListener("click", function () {

        loginForm.reset();   // ??
        closeLoginPopUp();

    });

function addBlur() {
    document.querySelector(".blur").classList.add("active");
}

function removeBlur() {
    document.querySelector('#blur').classList.remove("active");
}

function showLoginPopUp() {
    loginPopup.classList.add("active");
    loginPopup.style.display = 'block';
    addBlur();
}

function closeLoginPopUp() {
    loginPopup.classList.remove("active");
    removeBlur();

    //reset error messages
    clearErrors()

}

function clearErrors() {
    usernameError.innerHTML = "";
    passError.innerHTML = "";
    succError.innerHTML = "";
}