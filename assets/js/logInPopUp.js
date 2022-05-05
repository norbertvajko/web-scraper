
//Enter Login
document.querySelector("#showLogin").addEventListener("click",function() {
    document.querySelector(".popup").classList.add("active");

    //add blur
    document.querySelector(".blur").classList.add("active");

});


//Exit Login
document.querySelector(".popup .close-btn").addEventListener("click",function() {

    document.querySelector(".popup").classList.remove("active");

    //reset form after close
    document.getElementById('loginFormID').reset();


    //exit blur
    document.querySelector('#blur').classList.remove("active");

});
