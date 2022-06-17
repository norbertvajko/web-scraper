const favoriteIcon = document.getElementById('favorite-icon-add');

favoriteIcon.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "" , true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                favoriteIcon.classList.toggle('active');
            }
        }
    }
    xhr.send();
}