let dropDownList = document.getElementById('products-list');

function imu(x) {
    if (x.length == 0) {
        dropDownList.innerHTML = '';
    } else {
        let XML = new XMLHttpRequest();
        XML.onreadystatechange = function () {

            if (XML.readyState == 4 && XML.status == 200) {
                dropDownList.innerHTML = XML.responseText;
            }
        };
        XML.open('GET', '../../includes/liveSearch.php?q=' + x, true);
        XML.send();
    }
}