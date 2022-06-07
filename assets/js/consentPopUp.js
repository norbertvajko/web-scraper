const cookieContainer = document.getElementById('cookieContainer');
const cookieButton = document.getElementById('consentButton');

if (cookieContainer) {
    setTimeout(() => {
        cookieContainer.classList.toggle("active");
    }, 2000);

}

if (cookieButton) {
    cookieButton.addEventListener("click", (e) => {

        let request = new XMLHttpRequest();
        request.open('POST', '../../includes/consentCookieAccepted.php');
        e.preventDefault();
        cookieContainer.classList.remove("active");
        request.send();
    });
}
