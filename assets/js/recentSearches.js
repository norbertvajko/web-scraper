let productD = document.getElementById('productResultsD')

if (productD) {
    productD.addEventListener('click', () => {


        let xhr = new XMLHttpRequest();
        xhr.open("POST", "../../includes/recent_searches.php", true);
        xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {

                let response = JSON.parse(xhr.responseText);

                if (xhr.status === 200) {

                    // location.href

                }

            }

        }
        xhr.send();
    });

}