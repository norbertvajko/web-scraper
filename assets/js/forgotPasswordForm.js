function save_forgot_pass() {

    const fpInput = document.getElementById('forgottenemail');
    const forgotPassForm = document.getElementById('forgotPasswordForm');
    const successFP = document.getElementById('forgotEmailSuccess');
    const errorFP = document.getElementById('forgotEmailError');


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



                setTimeout(function () {
                    document.getElementById('ten-countdown').classList.add("active");
                    // successFP.innerHTML = ''; //clear success message
                    // forgotPasswordPopUp.classList.remove('active'); //exit fp popup
                    removeBlur();



                }, 2000 * 6000);


                continueButton.style.display = 'none';
                clearFPErrors();
                let countdownbtn = document.getElementById('ten-countdown').style.display = 'inline';
                countdown( countdownbtn, 10, 0 );
                // forgotPassForm.reset();

            } else {
                //display validation error
                errorFP.innerHTML = response.email_error;
            }

        }
    }
}

function countdown( elementName, minutes, seconds )
{
    var element, endTime, hours, mins, msLeft, time;

    function twoDigits( n )
    {
        return (n <= 9 ? "0" + n : n);
    }

    function updateTimer()
    {
        msLeft = endTime - (+new Date);
        if ( msLeft < 1000 ) {
            element.innerHTML = "Time is up!";
        } else {
            time = new Date( msLeft );
            hours = time.getUTCHours();
            mins = time.getUTCMinutes();
            element.innerHTML = (hours ? hours + ':' + twoDigits( mins ) : mins) + ':' + twoDigits( time.getUTCSeconds() );
            setTimeout( updateTimer, time.getUTCMilliseconds() + 500 );
        }
    }

    element = document.getElementById(elementName);
    endTime = (+new Date) + 1000 * (60*minutes + seconds) + 500;
    updateTimer();
}


