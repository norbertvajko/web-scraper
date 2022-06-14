function save_forgot_pass() {

    const fpInput = document.getElementById('forgottenemail');
    const forgotPassForm = document.getElementById('forgotPasswordForm');
    const successFP = document.getElementById('forgotEmailSuccess');
    const errorFP = document.getElementById('forgotEmailError');
    const descriptionFP = document.getElementById('resetPassDescription');

    const forgottenCode = document.getElementById('forgottencode');
    const resetBtn = document.getElementById('resetPassB');


    const continueButton = document.getElementById('continueBtn');

    let fpData = new FormData();

    fpData.append(fpInput.name, fpInput.value);

    let ajax_request = new XMLHttpRequest();

    ajax_request.open('POST', '/includes/forgetPasswordValidation.php', true);

    ajax_request.send(fpData);

    ajax_request.onreadystatechange = function () {
        if (ajax_request.readyState === 4 && ajax_request.status === 200) {

            let response = JSON.parse(ajax_request.responseText);

            if (response.success !== '') {


                // fpInput.placeholder = "";
                // fpInput.classList.add("numberCircle");
                // fpInput.maxLength = 8;

                descriptionFP.innerHTML = 'Please enter the 8-digit code was sent at ' + '<b class="c-siena ">' + fpInput.value + '</b>';
                // fpInput.value = "";
                fpInput.classList.toggle("hide-c");
                forgottenCode.classList.toggle("hide-c");
                resetBtn.classList.toggle("hide-c");

                var fifteenMinutes = 60 * 15,
                    display = document.querySelector('#time');
                startTimer(fifteenMinutes, display);



                document.getElementById('ten-countdown').classList.add("active");
                successFP.innerHTML = ''; //clear success message
                // forgotPasswordPopUp.classList.remove('active'); //exit fp popup


                continueButton.style.display = 'none';
                clearFPErrors();
                document.getElementById('ten-countdown').style.display = 'inline';
                // forgotPassForm.reset();

            } else {
                //display validation error
                errorFP.innerHTML = response.email_error;
            }

        }
    }
}

function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}



