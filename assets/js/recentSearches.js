function saveSearch(product_id) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../../includes/products/recent_searches.php", true);
    xhr.onload = () => {
        let response = JSON.parse(xhr.responseText);
        if (response.success == true) {
            window.location.href = '/views/Results.php?productId=' + product_id;
        } else {
            // error
        }
    }
    var formData = new FormData;
    formData.append('product_id', product_id);
    xhr.send(formData);
}