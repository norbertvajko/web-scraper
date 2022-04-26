// document.addEventListener('DOMContentLoaded' , function () {
//     showText("#msgText", "Hello, Scrappy!", 0, 100);
// });

document.addEventListener('DOMContentLoaded' , () => showText("#msgText", "Hello, what product do you want to to search?", 0, 100));

let showText = function (target, message, index, interval) {
    if (index < message.length) {
        document.querySelector(target).innerHTML =
            document.querySelector(target).innerHTML + message[index++];
        setTimeout(function () {
            showText(target, message, index, interval);
            }, interval);
    }
}