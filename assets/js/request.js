let btn = document.getElementById('button');
let inputSearch = document.getElementById('inputText');


btn.addEventListener('click',function () {
    let request = new XMLHttpRequest();
    request.open('GET' , 'https://dummyjson.com/products');
    request.onload = function () {
        let data = JSON.parse(request.responseText);
        renderHTML(data);

    }
    request.send();
});

function renderHTML(ddata) {
    if (inputSearch.value){
        document.getElementById("products1").innerHTML = "";
        for (const item in ddata.products) {
            if (ddata.products[item].title.toLowerCase().includes(inputSearch.value.toLowerCase())) {
                let myProducts = [ddata.products[item].title, ddata.products[item].rating, ddata.products[item].price, ddata.products[item].images];
                console.log(myProducts);
                let card = `<div class="card">
                    <img class="card-img" src="${ddata.products[item].images[0]}">
                    <div class="card-info">
                        <h1 class="card-title" id="cardTitle">
                             ${ddata.products[item].title}
                        </h1>
                        <span class="card-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                            <a class="rating-number" href="#">(13)</a>
                        </span>
                        <div class="card-price">
                            ${ddata.products[item].price} lei
                        </div>
                        <div class="card-offer">
                            <a href="#" class="card-btn">Offers</a>
                        </div>
                        <span class="card-badge"><i class="fa fa-heart-o"></i></span>
                    </div>
                </div>`
                document.getElementById("products1").innerHTML += card;

            }
        }
    } else{
        document.getElementById("products1").innerHTML = 'no results'
    }
}


