
var submitButton = document.getElementById('inputText');

var productName = document.getElementById('productTitle');
var productRating = document.getElementById('produdctRate');
var productPrice = document.getElementById('productPrice');

submitButton.addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
        var request = new XMLHttpRequest();
        request.open('GET' , 'https://dummyjson.com/products');
        request.onload = function () {
            var data = JSON.parse(request.responseText);
            console.log(data);
            renderHTML(data);
        };
        request.send();
    }
});

function renderHTML(mData) {
    var htmlPrice = "";
    for (let i=0; i< mData.length; i++) {
        htmlPrice += "<h1>" + mData[1].title + "</h1>";
    }

    productName.insertAdjacentElement('afterend',htmlPrice);
}
