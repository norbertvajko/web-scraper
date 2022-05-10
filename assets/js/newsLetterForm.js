function save_newsletter() {

    const newsletterForm = document.getElementById('newsLetterForm');
    const messageSuccess =  document.getElementById('newsLetterPopup');
    const newsletterEmail = document.getElementById('newsLetterName');

    const emailError = document.getElementById('newsletterError');

    let form_element = document.getElementById('newsletterEmail');
    let registerData = new FormData();

    registerData.append(form_element.name, form_element.value);

    let ajax_request = new XMLHttpRequest();
    ajax_request.open('POST', '/includes/newsLetterValidation.php', true);
    ajax_request.send(registerData);

    ajax_request.onreadystatechange = function () {
        if (ajax_request.readyState === 4 && ajax_request.status === 200) {

            let response = JSON.parse(ajax_request.responseText);

            if (response.success !== '') {

                newsletterForm.reset();

                messageSuccess.innerHTML = response.success;

                // setTimeout(function () {
                //
                //     form_element.innerHTML = '';
                //
                // }, 5000);

                //clean inputs
                newsletterEmail.innerHTML = "";

                emailError.innerHTML = "";

            } else {
                //display validation error
                emailError.innerHTML = response.email_error;
            }

        }
    }


}