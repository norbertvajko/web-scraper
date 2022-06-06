const cookieContainer = document.getElementById('cookieContainer');
const cookieButton = document.getElementById('consentButton');

cookieButton.addEventListener("click", () => {
    cookieContainer.classList.remove("active");
    // localStorage.setItem("cookieBannerDisplayed","true");
});

setTimeout( () => {
   cookieContainer.classList.toggle("active");
},2000);