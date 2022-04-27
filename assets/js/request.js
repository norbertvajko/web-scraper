let btn = document.getElementById('button');

let cardTitle = document.getElementById("cardTitle");

btn.addEventListener('click',function () {
    let request = new XMLHttpRequest();
    request.open('GET' , 'https://dummyjson.com/products');
    request.onload = function () {
        let data = JSON.parse(request.responseText);
        renderHTML();
        //console.log(data);
    }
    request.send();
});

function renderHTML(data) {
    let htmlString = '';

    for ( let i=0; i < data.length; i++) {
        htmlString += "<h1" + data.title[i] + "</h1>";
        console.log(data);
    }
    cardTitle.insertAdjacentHTML('beforeend' , htmlString);
}
