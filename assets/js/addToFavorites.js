let favoriteIcon = document.getElementById('addToFav');
const addedToFavCarousel = document.getElementsByClassName('cardAddToFav');
let heartIcon = document.getElementById('heartIcon');
let first_click = true;

function favorite(product_id, favIconBtn) {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "../../includes/addToFavorites.php?product=" + product_id, true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {

            if (xhr.status === 200) {

                let inCarousel = false;

                if (!favoriteIcon) {
                    favoriteIcon = favIconBtn;
                    heartIcon = favoriteIcon.firstElementChild;
                    inCarousel = true;
                }

                if (first_click) {
                    favoriteIcon.style = "background:red";
                    favoriteIcon.style.border = "1px solid red";
                    heartIcon.style = "color:white;";
                    first_click = false;

                    if (!inCarousel) {
                        showAddedToFav();
                        colorNavFav();
                    }

                } else {
                    favoriteIcon.style = "background:white";
                    heartIcon.style = "color:red;";
                    first_click = true;

                    if (!inCarousel) {
                        showRemovedFav();
                    }


                }


            }

        }

    }
    xhr.send();
}

function showAddedToFav() {
    document.getElementById('favoritesPopup').classList.toggle("active");
    document.getElementById('fav-popup-text').innerHTML = " <i class=\"fa fa-heart fa-2x\" aria-hidden=\"true\" style='color: red'></i> Product added to favorites";


    setTimeout(() => {
        document.getElementById('favoritesPopup').classList.toggle("active");
    }, 2000);
}
function showRemovedFav() {
    document.getElementById('favoritesPopup').classList.toggle("active");
    document.getElementById('fav-popup-text').innerHTML = " <i class=\"fa fa-heart-o fa-2x\" aria-hidden=\"true\" style='color: red;text-align: center;'></i> Product removed from favorites";

    setTimeout(() => {
        document.getElementById('favoritesPopup').classList.toggle("active");
    }, 2000);
}
function colorNavFav() {
    document.getElementById('navFavIcon').style.color = "red";
    setTimeout(() => {
        document.getElementById('navFavIcon').style.color = "";
    }, 2000);
}