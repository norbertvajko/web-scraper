function save_data() {


    const loginForm = document.getElementById('loginFormID');
    const successMessage = document.getElementById('sucLogin');
    const successError = document.getElementById('sucError');
    const checkBox = document.getElementById('remember-me');
    // const username = document.getElementById('uname');
    // const password = document.getElementById('password');

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
                successMessage.innerHTML = response.success;

                if (checkBox.checked) {
                    let newHXR = new XMLHttpRequest();
                    newHXR.open('POST', '../../includes/rememberMe.php');


                    newHXR.send();
                }


                setTimeout(function () {

                    successMessage.innerHTML = ''; //clear success message
                    loginPopup.classList.remove('active'); //exit loginPopup
                    document.querySelector(".blur").classList.remove("active"); //exit blur
                    // window.location.href = '../../index.php';
                    location.reload();

                }, 2000);



                loginForm.reset();
                clearErrors();

            } else {
                //display validation error
                successError.innerHTML = response.success_error;
                usernameError.innerHTML = response.username_error;
                passwordError.innerHTML = response.password_error;
            }

        }
    }

    function clearErrors() {
        usernameError.innerHTML = '';
        passwordError.innerHTML = '';
        successError.innerHTML = '';
    }



}

