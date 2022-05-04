function save_data() {

    let form_element = document.getElementsByClassName('form_data');

    let form_data = new FormData();

    for (let count = 0; count < form_element.length; count++) {
        form_data.append(form_element[count].name, form_element[count].value);
    }

    let ajax_request = new XMLHttpRequest();

    ajax_request.open('POST', 'contact_components/contactForm.php', true);

    ajax_request.send(form_data);

    ajax_request.onreadystatechange = function () {
        if (ajax_request.readyState === 4 && ajax_request.status === 200) {

            let response = JSON.parse(ajax_request.responseText);

            if (response.success !== '') {
                document.getElementById('formID').reset();

                document.getElementById('sucMessage').innerHTML = response.success;

                setTimeout(function () {

                    document.getElementById('sucMessage').innerHTML = '';

                }, 5000);

                document.getElementById('name_error').innerHTML = '';
                document.getElementById('email_error').innerHTML = '';
                document.getElementById('message_error').innerHTML = '';


            } else {
                //display validation error
                document.getElementById('name_error').innerHTML = response.name_error;
                document.getElementById('email_error').innerHTML = response.email_error;
                document.getElementById('message_error').innerHTML = response.message_error;

                console.log(response.name_error,'\n',response.email_error,'\n',response.message_error);

            }

        }
    }
}