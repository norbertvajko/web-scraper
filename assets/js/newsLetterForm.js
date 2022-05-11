function save_newsletter() {

    const newsletterForm = document.getElementById('newsLetterForm');
    const messageSuccess =  document.getElementById('newsletterSuccess');
    const newsletterEmail = document.getElementById('newsletterEmail');

    const emailError = document.getElementById('newsletterError');

    let registerData = new FormData();

    registerData.append(newsletterEmail.name, newsletterEmail.value);

    let ajax_request = new XMLHttpRequest();
    ajax_request.open('POST', '/includes/newsLetterValidation.php', true);
    ajax_request.send(registerData);

    ajax_request.onreadystatechange = function () {
        if (ajax_request.readyState === 4 && ajax_request.status === 200) {

            let response = JSON.parse(ajax_request.responseText);

            if (response.success !== '') {

                newsletterForm.reset();
                newsLetterPopup();

                messageSuccess.innerHTML = response.success;


                setTimeout(function () {

                    messageSuccess.innerHTML = '';

                }, 1000);

                //clear inputs

                newsletterEmail.innerHTML = "";
                emailError.innerHTML = "";

            } else {
                //display validation error
                document.getElementById('newsletterEmail').placeholder = response.email_error;
                // emailError.innerHTML = response.email_error;
            }

        }
    }


}