function newsLetterPopup() {
    showPopUp();
    closePopUp();
}

function showPopUp() { document.getElementById('newsLetterPopup').classList.toggle("active"); }

function closePopUp() {
    const closeBtn = document.getElementById('newsLettCloseButton');

    closeBtn.addEventListener('click', () => {
        document.getElementById('newsLetterPopup').classList.remove("active");
    });
}
