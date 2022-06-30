// document.addEventListener('DOMContentLoaded' , function () {
//     showText("#msgText", "Hello, Scrappy!", 0, 100);
// });

document.addEventListener('DOMContentLoaded' , () => showText("#msgText", "Our mission is to bring together and facilitate the comparison of prices and products. This way, the potential buyer can easily and quickly find the product they are looking for and the ideal price.", 0, 30));

let showText = function (target, message, index, interval) {
    if (index < message.length) {
        document.querySelector(target).innerHTML =
            document.querySelector(target).innerHTML + message[index++];
        setTimeout(function () {
            showText(target, message, index, interval);
            }, interval);
    }
}