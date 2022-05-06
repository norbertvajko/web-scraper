function save_data() {

    const loginForm = document.getElementById('loginFormID');
    const  successMessage = document.getElementById('sucLogin');

    const username = document.getElementById('uname');
    const password = document.getElementById('password');

    const usernameError = document.getElementById('username_error');
    const passwordError = document.getElementById('password_error');



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

                loginForm.reset();
                successMessage.innerHTML = response.success;

                setTimeout(function () {

                    successMessage.innerHTML = '';

                }, 5000);

                username.innerHTML = '';
                password.innerHTML = '';

                usernameError.innerHTML = '';
                passwordError.innerHTML = '';

            } else {
                //display validation error
                usernameError.innerHTML = response.username_error;
                passwordError.innerHTML = response.password_error;
            }

        }
    }
}
function resetErrors() {
    usernameError.innerHTML = '';
    passwordError.innerHTML = '';
}