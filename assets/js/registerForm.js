function save_register() {
    let form_element = document.getElementsByClassName('register_data');

    let registerData = new FormData();

    for (let count = 0; count < form_element.length; count++) {
        registerData.append(form_element[count].name, form_element[count].value);
    }

    let ajax_request = new XMLHttpRequest();

    ajax_request.open('POST', '/includes/registerValidation.php', true);

    ajax_request.send(registerData);

    ajax_request.onreadystatechange = function () {
        if (ajax_request.readyState === 4 && ajax_request.status === 200) {

            let response = JSON.parse(ajax_request.responseText);


            if (response.success !== '') {
                document.getElementById('registerFormID').reset();

                document.getElementById('sucRegister').innerHTML = response.success;

                setTimeout(function () {

                    document.getElementById('sucRegister').innerHTML = '';

                }, 2000);

                document.getElementById('fullName').innerHTML = '';
                document.getElementById('remail').innerHTML = '';
                document.getElementById('rpassword').innerHTML = '';
                document.getElementById('crpassword').innerHTML = '';

            } else {
                //display validation error
                document.getElementById('fullName_error').innerHTML = response.name_error;
                document.getElementById('register_email_error').innerHTML = response.email_error;
                document.getElementById('register_password_error').innerHTML = response.password_error;
                document.getElementById('cr_password_error').innerHTML = response.correctPassword_error;
            }

        }
    }
}