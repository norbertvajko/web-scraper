function load_data() {

    var user_input = document.getElementById("valueToSearch").value;


    var productTitle = document.getElementById("productTitle");
    var productImage = document.getElementById("productImage");
    var productPrice = document.getElementById("productPrice");
    var productInStock= document.getElementById("productInStock");

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState === XMLHttpRequest.DONE) {
            if (xmlhttp.status === 200) {

                //convert JSON back to array
                let response = JSON.parse(xmlhttp.responseText);
                productTitle.innerHTML = this.response;

            }
            else if (xmlhttp.status === 400) {
                alert('There was an error 400');
            }
            else {
                alert('something else other than 200 was returned');
            }
        }
    };

    xmlhttp.open("GET", '/includes/searchProducts.php', true);
    xmlhttp.send();
}
