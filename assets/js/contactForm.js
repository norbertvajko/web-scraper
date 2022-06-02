function save_contact() {

    const contactForm = document.getElementById('formID');
    const messageSuccess = document.getElementById('sucMessage');

    const subjectError = document.getElementById('subject_error');
    const nameError = document.getElementById('name_error');
    const emailError = document.getElementById('email_error');
    const messageError = document.getElementById('message_error');


    let form_element = document.getElementsByClassName('form_data');

    let form_data = new FormData();

    for (let count = 0; count < form_element.length; count++) {
        form_data.append(form_element[count].name, form_element[count].value);
    }

    let ajax_request = new XMLHttpRequest();

    ajax_request.open('POST', '../../views/sendEmail.php', true);

    ajax_request.send(form_data);

    ajax_request.onreadystatechange = function () {
        if (ajax_request.readyState === 4 && ajax_request.status === 200) {

            //strigify
            let response = JSON.parse(ajax_request.responseText);

            if (response.success !== '') {

               contactForm.reset();

                messageSuccess.innerHTML = response.success;

                setTimeout(function () {

                    messageSuccess.innerHTML = '';

                }, 4000);

                nameError.innerHTML = '';
                emailError.innerHTML = '';
                messageError.innerHTML = '';
                subjectError.innerHTML = '';


            } else {
                //display validation error
                nameError.innerHTML = response.name_error;
                emailError.innerHTML = response.email_error;
                messageError.innerHTML = response.message_error;
                subjectError.innerHTML = response.subject_error;
            }

        }
    }

}