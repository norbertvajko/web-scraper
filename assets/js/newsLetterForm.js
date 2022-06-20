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

            // console.log(typeof response );
            if (response.success !== '') {

                newsletterForm.reset();
                newsLetterPopup();

                messageSuccess.innerHTML = response.success;

                //clear inputs & message errors
                newsletterEmail.innerHTML = "";
                emailError.innerHTML = "";

                newsletterEmail.style.border = "none";
                newsletterEmail.placeholder = "Enter e-mail";

            } else {
                //display validation error
                newsletterEmail.placeholder = response.email_error;

                //add red border
                newsletterEmail.style.border = "3px solid red";

                //exit red border after 2 sec
                setTimeout(() => {
                    newsletterEmail.style.border = "none";
                }, 2000);
            }

        }
    }


}