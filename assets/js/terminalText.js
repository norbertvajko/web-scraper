// document.addEventListener('DOMContentLoaded' , function () {
//     showText("#msgText", "Hello, Scrappy!", 0, 100);
// });

document.addEventListener('DOMContentLoaded' , () => showText("#msgText", "Scrappy este unul dintre cele mai vizitate site-uri de comparare de preţuri din România şi totodată un ghid online de shopping. Scrappy doar promovează ofertele magazinelor online partenere,ne-comercializand produsele. Produsele pot fi comandate de la magazine.", 0, 30));

let showText = function (target, message, index, interval) {
    if (index < message.length) {
        document.querySelector(target).innerHTML =
            document.querySelector(target).innerHTML + message[index++];
        setTimeout(function () {
            showText(target, message, index, interval);
            }, interval);
    }
}