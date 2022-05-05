function save_data() {

    let form_element = document.getElementsByClassName('login_data');

    let login_data = new FormData();

    for (let count = 0; count < form_element.length; count++) {
        login_data.append(form_element[count].name, form_element[count].value);
    }

    let ajax_request = new XMLHttpRequest();

    ajax_request.open('POST', '/includes/loginValidation.php', true);

    ajax_request.send(login_data);

    ajax_request.onreadystatechange = function () {
        if (ajax_request.readyState === 4 && ajax_request.status === 200) {

            let response = JSON.parse(ajax_request.responseText);

            if (response.success !== '') {
                document.getElementById('loginFormID').reset();

                document.getElementById('sucLogin').innerHTML = response.success;

                setTimeout(function () {

                    document.getElementById('sucLogin').innerHTML = '';

                }, 5000);

                document.getElementById('uname').innerHTML = '';
                document.getElementById('password').innerHTML = '';

            } else {
                //display validation error
                document.getElementById('username_error').innerHTML = response.username_error;
                document.getElementById('password_error').innerHTML = response.password_error;
            }

        }
    }
}