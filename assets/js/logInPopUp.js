const loginButton = document.querySelector("#showLogin");
const closeButton = document.querySelector(".popup .close-btn");
const loginPopup = document.querySelector(".popup");
const loginForm = document.getElementById('loginFormID');

const usernameError = document.getElementById('username_error');
const passError = document.getElementById('password_error');



//Enter Login
loginButton.addEventListener("click",function() {

    loginPopup.classList.add("active");

    //add blur
    document.querySelector(".blur").classList.add("active");


});


//Exit Login
closeButton.addEventListener("click",function() {

    loginPopup.classList.remove("active");

    //reset form after close
    loginForm.reset();

    //reset error messages
    usernameError.innerHTML = "";
    passError.innerHTML = "";

    //exit blur
    document.querySelector('#blur').classList.remove("active");
});
