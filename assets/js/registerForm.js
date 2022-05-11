function save_register() {

    const registerForm = document.getElementById('registerFormID');
    const messageSuccess =  document.getElementById('sucRegister');

    const fullName = document.getElementById('fullName');
    const email = document.getElementById('remail');
    const password = document.getElementById('rpassword');
    const correctPassword = document.getElementById('crpassword');

    const fullNameError = document.getElementById('fullName_error');
    const emailError = document.getElementById('register_email_error');
    const passwordError = document.getElementById('register_password_error');
    const correctPasswordError = document.getElementById('cr_password_error');



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

                // registerForm.reset();

                //show success message if all good
                messageSuccess.innerHTML = response.success;

                setTimeout(function () {
                    messageSuccess.innerHTML = '';
                    registerPopUp.classList.remove('active');
                }, 2000);

                //empty fields/errors
                emptyFields();
                emptyErrorMessages();

                //after complete register show login
                showLoginPopUp();

            } else {
                //display validation error
                fullNameError.innerHTML = response.name_error;
                emailError.innerHTML = response.email_error;
                passwordError.innerHTML = response.password_error;
                correctPasswordError.innerHTML = response.correctPassword_error;
            }

        }
        function showErrorMessages() {

        }
    }
    function emptyFields() {
        fullName.innerHTML = '';
        email.innerHTML = '';
        password.innerHTML = '';
        correctPassword.innerHTML = '';
    }
    function emptyErrorMessages() {
        fullNameError.innerHTML = '';
        emailError.innerHTML = '';
        passwordError.innerHTML = '';
        correctPasswordError.innerHTML = '';
    }

}