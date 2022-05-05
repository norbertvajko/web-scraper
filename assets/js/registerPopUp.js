//Enter Register
document.querySelector("#showRegister").addEventListener("click",function() {
    document.querySelector(".popupRegister").classList.add("active");

    //add blur
    document.querySelector(".blur").classList.add("active");

});

//Exit Register
document.querySelector(".popupRegister .close-btn").addEventListener("click",function() {

    document.querySelector(".popupRegister").classList.remove("active");

    //reset form after close
    document.getElementById('registerFormID').reset();

    //exit blur
    document.querySelector('#blur').classList.remove("active");

});