const registerButton = document.getElementById("showRegister");
const registerPopUp = document.querySelector(".popupRegister");

const registerForm = document.getElementById('registerFormID');

let fullNameError = document.getElementById('fullName_error');
let emailError = document.getElementById('register_email_error');
let passwordError = document.getElementById('register_password_error');
let correctPasswordError = document.getElementById('cr_password_error');

let errorMessages = [fullNameError , emailError , passwordError , correctPasswordError];

//Enter Register
registerButton.addEventListener("click", function () {

    registerPopUp.classList.add("active");

    //add blur
    document.querySelector(".blur").classList.add("active");

});

//Exit Register
document.querySelector(".popupRegister .close-btn").addEventListener("click", function () {

    registerPopUp.classList.remove("active");

    //reset form after close
    registerForm.reset();

    //reset error messages
    for(let i=0 ;i<errorMessages.length; i++) {
        console.log(errorMessages);
        errorMessages[i].remove();
    }

    //exit blur
    document.querySelector('.blur').classList.remove("active");

});