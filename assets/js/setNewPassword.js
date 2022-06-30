function showResetPassPopUp() {

    const setNPasswordPopup = document.querySelector(".change-password");
    const setNPassCloseB = document.querySelector(".change-password .close-btn");
    const passErr = document.getElementById('passErr');
    const cPassErr = document.getElementById('cPassErr');
    const firstPassInput = document.getElementById('changePWD');
    const secondPassInput = document.getElementById('changePWDCorr');
    const changePassBtn = document.getElementById('changePassBtn');
    const msgSuccessChange = document.getElementById('succPass');



    setNPasswordPopup.classList.add("active");

    //close popup
    setNPassCloseB.addEventListener("click" , () => {
        setNPasswordPopup.classList.remove("active");
        passErr.innerHTML = "";
        cPassErr.innerHTML = "";
        firstPassInput.value = "";
        secondPassInput.value = "";
    });


    if (changePassBtn) {
        changePassBtn.addEventListener("click", () => {

            let fpData = new FormData();

            fpData.append(firstPassInput.name, firstPassInput.value);
            fpData.append(secondPassInput.name , secondPassInput.value);


            let ajax_request = new XMLHttpRequest();

            ajax_request.open('POST', '/includes/user/changePassword.php', true);

            ajax_request.send(fpData);

            ajax_request.onreadystatechange = function () {
                if (ajax_request.readyState === 4 && ajax_request.status === 200) {

                    let response = JSON.parse(ajax_request.responseText);

                    if (response.success !== '') {

                        msgSuccessChange.innerHTML = response.success;
                        passErr.innerHTML = "";
                        cPassErr.innerHTML = "";


                        setTimeout(() => {
                            location.reload();
                        }, 2000);


                    } else {
                        passErr.innerHTML = response.new_pass_error;
                        cPassErr.innerHTML = response.new_pass_error_correct;

                    }

                }
            }
        });
    }


}