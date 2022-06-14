function new_password() {

    const code = document.getElementById('forgottencode');
    const codeError = document.getElementById("codeError");

    let fpData = new FormData();

    fpData.append(code.name, code.value);

    let ajax_request = new XMLHttpRequest();

    ajax_request.open('POST', '/includes/newPassword.php', true);

    ajax_request.send(fpData);

    ajax_request.onreadystatechange = function () {
        if (ajax_request.readyState === 4 && ajax_request.status === 200) {

            let response = JSON.parse(ajax_request.responseText);

            if (response.success !== '') {
                    // resetPasswordPopUp();
            } else {
                codeError.innerHTML = response.code_error;
            }
        }
    }

}