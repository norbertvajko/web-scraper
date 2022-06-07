const logoutButton = document.getElementById('log-out-user');

if (logoutButton) {
    logoutButton.addEventListener('click', (event) => {

        let request = new XMLHttpRequest();
        request.open('POST', '../../includes/logout.php');
        event.preventDefault();

        location.reload();

        request.send();
    });
}