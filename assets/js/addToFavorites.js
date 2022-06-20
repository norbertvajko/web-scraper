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




                } else {
                    favoriteIcon.style = "background:white";
                    heartIcon.style = "color:red;";
                    first_click = true;
                }

            }

        }

    }
    xhr.send();
}