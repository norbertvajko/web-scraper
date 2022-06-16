function searchProd() {
    // window.location.replace("https://n_vajko.internship.rankingcoach.com/views/Results.php");
    load_data();
}

function load_data() {

    const user_input = document.getElementById('valueToSearch').value;
    const product_price = document.getElementById('productPrice');
    const product_title = document.getElementById('productTitle');
    const product_image = document.getElementById('productImagee');
    const product_stock = document.getElementById('productInStock');
    const product_rating = document.getElementById('productReviews');
    const product_link = document.getElementById('productLink');
    const product_logo = document.getElementById('productLogo');


    if (user_input.length > 2) {

        const form_data = new FormData();
        form_data.append('user_input', user_input);

        const ajax_request = new XMLHttpRequest();
        ajax_request.open("POST", "/includes/getProducts.php", true);
        ajax_request.send(form_data);

        ajax_request.onreadystatechange = function () {
            if (ajax_request.readyState == 4 && ajax_request.status == 200) {
                //convert JSON back to array


                const response = JSON.parse(ajax_request.responseText);
                // console.log(response);


                if (response.length > 0) {
                    const liveSearchResult = document.getElementById('live-search-result');
                    const divSearchResult  = document.querySelector('.live-search-result .search-result');

                    let html = `<li style="padding: 8px 12px; font-weight: bold">Sam pham</li>`;



                    for (let i = 0; i <response.length; i++) {

                        product_title.innerHTML = response[0].post_title;
                        product_price.innerHTML = response[0].post_price;
                        product_image.src= response[0].post_image;
                        product_stock.innerHTML = '<b>' + response[0].post_stock + '</b>';
                        product_rating.innerHTML = getStars(response[0].post_reviews);
                        product_logo.src = response[0].post_logo;

                        productLink.setAttribute('href',response[0].post_link);


                        document.getElementById('offerNameOne').innerHTML = response[0].post_title;
                        document.getElementById('offerNameTwo').innerHTML = response[1].post_title;
                        document.getElementById('offerNameThree').innerHTML = response[2].post_title;

                        document.getElementById('offerPriceOne').innerHTML = response[0].post_price;
                        document.getElementById('offerPriceTwo').innerHTML = response[1].post_price;
                        document.getElementById('offerPriceThree').innerHTML = response[2].post_price;

                        document.getElementById('offerRatingOne').innerHTML = getStars(response[0].post_reviews);
                        document.getElementById('offerRatingTwo').innerHTML = getStars(response[1].post_reviews);
                        document.getElementById('offerRatingThree').innerHTML = getStars(response[2].post_reviews);

                        document.getElementById('companyLogoOne').src = response[0].post_logo;
                        document.getElementById('companyLogoTwo').src = response[1].post_logo;
                        document.getElementById('companyLogoThree').src = response[2].post_logo;

                        document.getElementById('companyLogoRest').src= response[i].post_logo;
                        document.getElementById('offerRatingRest').innerHTML = response[i].post_reviews;
                        document.getElementById('offerPriceRest').innerHTML = response[i].post_price;



                    }
                    // }else {
                    //     //if not found
                    // }
                    // html += '</div>';
                    // document.getElementById("productTitle").innerHTML = html;
                }
            }
        }
    } else {
        // product_title.innerHTML = '';
    }
}

function getStars(rating) {

    const totalStars = 5;

    // Round to nearest half
    rating = Math.round(rating * totalStars) / 100;
    console.log(rating);
    let output = [];

    // Append all the filled whole stars
    for (var i = rating; i >= 1; i--)
        output.push('<i class="fa fa-star" aria-hidden="true" style="color: gold;"></i>&nbsp;');

    // If there is a half a star, append it
        // if (i == .5)  output.push('<i class="fa fa-star-half-o" aria-hidden="true" style="color: gold;"></i>&nbsp;');
    if(i >= .1) { output.push('<i class="fa fa-star-half-o" aria-hidden="true" style="color: gold;"></i>&nbsp;'); }

    // if(i < .5)  output.pop('<i class="fa fa-star-half-o" aria-hidden="true" style="color: gold;"></i>&nbsp;');


    // Fill the empty stars
    for (let i = (5 - rating); i >=1; i--)
        output.push('<i class="fa fa-star-o" aria-hidden="true" style="color: gold;"></i>&nbsp;');

    return output.join('');
}

// function renderHTML(ddata) {
//
//     if (document.getElementById('valueToSearch').value){
//         document.getElementById("products1").innerHTML = "";
//         for (const item in ddata.products) {
//             if (ddata.products[item].title.toLowerCase().includes(inputSearch.value.toLowerCase())) {
//                 let myProducts = [ddata.products[item].title, ddata.products[item].rating, ddata.products[item].price, ddata.products[item].images];
//                 console.log(myProducts);
//                 let card = `<div class="card">
//                     <img class="card-img" src="${ddata.products[item].images[0]}">
//                     <div class="card-info">
//                         <h1 class="card-title" id="cardTitle">
//                              ${ddata.products[item].title}
//                         </h1>
//                         <span class="card-rating">
//                             <i class="fa fa-star"></i>
//                             <i class="fa fa-star"></i>
//                             <i class="fa fa-star"></i>
//                             <i class="fa fa-star"></i>
//                             <i class="fa fa-star-o"></i>
//                             <a class="rating-number" href="#">(13)</a>
//                         </span>
//                         <div class="card-price">
//                             ${ddata.products[item].price} lei
//                         </div>
//                         <div class="card-offer">
//                             <a href="#" class="card-btn">Offers</a>
//                         </div>
//                         <span class="card-badge"><i class="fa fa-heart-o favorite-icon"></i></span>
//                     </div>
//                 </div>`
//                 document.getElementById("products1").innerHTML += card;
//
//             }
//         }
//     } else{
//         document.getElementById("products1").innerHTML = 'no results'
//     }
// }