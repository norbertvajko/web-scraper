let searchBtn = document.getElementById('button-addon1');
let inputSearch = document.getElementById('valueToSearch');


function searchProd(product_id) {

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../../includes/recent_searches.php", true);

    xhr.onload = () => {
        let response = JSON.parse(xhr.responseText);
        if (response.success == true) {
            window.location.href = '/views/components/products/search_products.php?productId=' + product_id;
        } else {
            // error
        }
    }
    var formData = new FormData;
    formData.append('product_id', product_id);
    xhr.send(formData);
}




