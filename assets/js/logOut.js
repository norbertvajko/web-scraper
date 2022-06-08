const logoutButton = document.getElementById('log-out-user');

if (logoutButton) {
    logoutButton.addEventListener('click', (event) => {
        event.preventDefault();
        let request = new XMLHttpRequest();
        request.open('POST', '../../includes/logout.php');

        request.send();
        request.onreadystatechange = function () {
            location.reload();
        }

    });
}