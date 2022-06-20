const favoriteIcon = document.getElementById('addToFav');
const addedToFav = document.getElementById('addedToFav');
const heartIcon = document.getElementById('heartIcon');
let first_click = true;

function favorite(product_id) {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "../../includes/addToFavorites.php?product=" + product_id, true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {

            if (xhr.status === 200) {

                if (first_click) {
                    favoriteIcon.style = "background:red";
                    heartIcon.style = "color:white;";
                    first_click = false;

                    showAddedToFav();
                    colorNavFav();

                } else {
                    favoriteIcon.style = "background:white";
                    heartIcon.style = "color:red;";
                    first_click = true;

                    showRemovedFav();

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