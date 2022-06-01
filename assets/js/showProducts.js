let btn = document.getElementById('button-addon1');
let inputSearch = document.getElementById('valueToSearch');


btn.addEventListener('click',function () {
    let request = new XMLHttpRequest();
    request.open('GET' , 'https://dummyjson.com/products');
    request.onload = function () {
        let data = JSON.parse(request.responseText);
        renderHTML(data);

    }
    request.send();
});