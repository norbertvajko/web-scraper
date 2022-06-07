const registerButton = document.getElementById("showRegister");
const registerPopUp = document.querySelector(".popupRegister");

const registerForm = document.getElementById('registerFormID');

let fullNameError = document.getElementById('fullName_error');
let emailError = document.getElementById('register_email_error');
let passwordError = document.getElementById('register_password_error');
let correctPasswordError = document.getElementById('cr_password_error');

let errorMessages = [fullNameError , emailError , passwordError , correctPasswordError];

//Enter Register
if (registerButton) {
    registerButton.addEventListener("click", function () {

        showRegisterPopUp();

        //add blur
        document.querySelector(".blur").classList.add("active");

        //if login button is clicked while register active
        loginButton.onclick = function () {
            registerPopUp.classList.remove("active");
            emptyErrorMessages();
            registerForm.reset();
        }

        //click outside popUp to close
        // document.addEventListener('mouseup', function (e) {
        //     if (!registerPopUp.contains(e.target)) {
        //         registerPopUp.style.display = 'none';
        //         removeBlur();
        //     }
        // });

    });
}
//Exit Register
document.querySelector(".popupRegister .close-btn").addEventListener("click", function () {

    registerPopUp.classList.remove("active");

    //exit blur
    document.querySelector('.blur').classList.remove("active");

    //reset form after close
    registerForm.reset();

});

function emptyErrorMessages() {

    for(let i=0 ;i<errorMessages.length; i++) {
        console.log(errorMessages);
        errorMessages[i].innerHTML = '';
    }
}

function showRegisterPopUp() {
    registerPopUp.classList.add("active");
    registerPopUp.style.display = 'block';
    addBlur();
}