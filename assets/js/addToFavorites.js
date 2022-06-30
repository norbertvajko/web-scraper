let favoriteIconR = document.getElementById('addToFav');
let heartIcon = document.getElementById('heartIcon');
let first_click = true;

function favorite(product_id, favIconBtn) {



    let xhr = new XMLHttpRequest();
    xhr.open("GET", "../../includes/user/addToFavorites.php?product=" + product_id, true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {

            if (xhr.status === 200) {



                if (first_click) {
                    favoriteIconR.style = "background:red";
                    favoriteIconR.style.border = "1px solid red";
                    heartIcon.style = "color:white;";
                    first_click = false;
                    showAddedToFav();

                } else {
                    favoriteIconR.style = "background:white";
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