// let btn = document.getElementById('button-addon1');
// let inputSearch = document.getElementById('valueToSearch');
//
//
// btn.addEventListener('click', function () {
//     let request = new XMLHttpRequest();
//     request.open('GET', 'https://dummyjson.com/products');
//     request.onload = function () {
//         let data = JSON.parse(request.responseText);
//         renderHTML(data);
//
//     }
//     request.send();
// });
//
// function renderHTML(ddata) {
//
//     if (inputSearch.value){
//         // document.getElementById("products1").innerHTML = "";
//         for (const item in ddata.products) {
//             if (ddata.products[item].title.toLowerCase().includes(inputSearch.value.toLowerCase())) {
//                 let myProducts = [ddata.products[item].title, ddata.products[item].rating, ddata.products[item].price, ddata.products[item].images];
//                 console.log(myProducts);
//                 let card = `<div class="container ">
//
//                 <div class="search-results">
//                 <!-- Topic Cards -->
//                 <div id="cards_landscape_wrap-2">
//                 <div class="container">
//                     <h1>x rezultate pentru "input" </h1>
//                     <div class="row">
//                         <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
//                             <a href="">
//                                 <div class="card-flyer">
//                                     <div class="text-box">
//                                         <div class="image-box">
//                                             <img src="https://cdn.pixabay.com/photo/2018/03/30/15/11/deer-3275594_960_720.jpg"
//                                                  alt=""/>
//                                         </div>
//                                         <div class="text-container">
//                                             <h6> ${ddata.products[item].title}</h6>
//                                             <p>Lorem Ipsum is simply dummy text of the printing and typesetting
//                                                 industry. Lorem Ipsum has been the industry's standard dummy text ever
//                                                 since the 1500s.</p>
//                                         </div>
//                                     </div>
//                                 </div>
//                             </a>
//                         </div>
//                     </div>
//                 </div>
//             </div>
//         </div>
//     </div>`
//                 // document.getElementById("products1").innerHTML += card;
//
//             }
//         }
//     } else{
//         // document.getElementById("products1").innerHTML = 'no results'
//     }
// }
//
//
