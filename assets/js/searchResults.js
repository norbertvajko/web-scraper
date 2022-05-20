function load_data() {

    var user_input = document.getElementById('valueToSearch').value;

    if (user_input.length > 2) {
        var form_data = new FormData();
        form_data.append('user_input', user_input);
        var ajax_request = new XMLHttpRequest();
        ajax_request.open("POST", '/includes/searchProducts.php', true);
        ajax_request.send(form_data);

        ajax_request.onreadystatechange = function () {
            if (ajax_request.readyState == 4 && ajax_request.status == 200) {

                //    convert JSON back to array
                var response = JSON.parse(ajax_request.responseText);
                console.log(response);
                var html = '<div className="box" id="containerBox">';

                if (response.length > 0) {
                    for (var i = 0; i < 2; i++) {
                        html += '<h1 className="prod-title d-none d-sm-block mb-3">'+response[i].post_title+'</h1>';
                        html += '<span id="productPrice">'+response[i].post_title+'</span>';


                    }// }else {
                    //     //if not found
                    // }
                    html += '</div>';
                    document.getElementById("productTitle").innerHTML = html;
                }
            }
        }
    } else {
        document.getElementById("productTitle").innerHTML = '';
    }
}