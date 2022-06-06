
const logoutButton = document.getElementById('log-out-user');

logoutButton.addEventListener('click',function (event) {


    let request = new XMLHttpRequest();
    request.open('POST' , '../../views/logout.php');
    event.preventDefault();
    location.reload();
    request.send();
});