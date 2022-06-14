function new_password() {

    const code = document.getElementById('forgottencode');
    const codeError = document.getElementById("codeError");
    const codeSuccess = document.getElementById("codeSuccess");

    const resetPassPop = document.querySelector(".reset-password");
    const resetFinishButton = document.getElementById('resetPassBFinish');
    const resetPassInput = document.getElementById('resetPassWd');
    const resetPassError = document.getElementById('resetPassError');
    const retypePassError = document.getElementById('retypeError');
    const retypeCorPassInput = document.getElementById('resetPassWdCorr');
    const retypeSuccess = document.getElementById('retypeSuccess');

    let fpData = new FormData();

    fpData.append(code.name, code.value);

    let ajax_request = new XMLHttpRequest();

    ajax_request.open('POST', '/includes/newPassword.php', true);

    ajax_request.send(fpData);

    ajax_request.onreadystatechange = function () {
        if (ajax_request.readyState === 4 && ajax_request.status === 200) {

            let response = JSON.parse(ajax_request.responseText);

            if (response.success !== '') {
                codeSuccess.innerHTML = response.success;
                codeError.innerHTML = "";
                setTimeout(function () {




                    closeForgotPasswordPopUp();
                    resetPassPop.classList.add("active");
                    resetPassPop.style.display = 'block';


                }, 2000);
                showForgotPasswordPopUp();
                resetFinishButton.addEventListener('click', () => {

                    let rData = new FormData();
                    rData.append(resetPassInput.name, resetPassInput.value);
                    rData.append(retypeCorPassInput.name , retypeCorPassInput.value);

                    let newHXR = new XMLHttpRequest();
                    newHXR.open('POST', '../../includes/typeNewPassword.php');
                    newHXR.send(rData);

                    newHXR.onreadystatechange = function () {
                        if (newHXR.readyState === 4 && newHXR.status === 200) {

                            let response = JSON.parse(newHXR.responseText);

                            if (response.success !== '') {
                                resetPassError.innerHTML = "";
                                retypePassError.innerHTML = "";

                                retypeSuccess.innerHTML = response.success;
                                setTimeout(() => {

                                    resetPassPop.classList.remove("active");
                                    resetPassPop.style.display = 'none';
                                    showLoginPopUp();
                                }, 2000);


                            } else {
                                resetPassError.innerHTML = response.new_pass_error;
                                retypePassError.innerHTML = response.new_pass_error_correct;
                            }
                        }
                    }
                });
            } else {
                codeError.innerHTML = response.code_error;
            }
        }
    }
}
