<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="Free Web Scrape , Search products " name="description">
    <meta content="Scrape , Crawl , Web Scrape , Web Crawler" name="keywords">
    <meta content="Vajko Norbert" name="author">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Contact</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="../assets/css/contact-page.css" rel="stylesheet">
    <link href="../assets/css/home-page.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>


<!--------------------------------------------- Start Nav Bar Area ---------------------------------------------------->

<?php include "components/searchNavBar.php"; ?>

<!--------------------------------------------- End Nav Bar Area ------------------------------------------------------>

<header>
    <h1>Here is the header</h1>
</header>

<main class="content">
    <section class="contact-us">
        <div class="container">
            <div class="contact-wrap">
                <form class="contact-form w-100 d-flex flex-wrap justify-content-between pb-5" action="components/contactForm.php" method="post">
                    <h1 class="contact-form-title w-100 d-flex justify-content-start pb-5">Contact Us</h1>
                    <div class="contact-form-row row w-100 d-flex flex-row">
                        <div class="contact-input position-relative w-50">
                            <span class="label-input">Your Name</span>
                            <input class="input" type="text" name="name" id="formName" placeholder="Enter your name">
                        </div>
                        <div class="contact-input w-50">
                            <span class="label-input">E-mail</span>
                            <input class="input" type="email" name="email" id="formEmail" placeholder="Enter your e-mail">
                        </div>
                    </div>
                    <div class="contact-form-row row w-100 d-flex flex-row">
                        <div class="contact-input d-flex flex-column w-100 mt-40 ">
                            <span class="label-input">Message</span>
                            <textarea class="textarea-input" name="message" id="formMessage"
                                      placeholder="Your message here..."></textarea>
                        </div>
                    </div>
                    <div class="contact-form-button w-100 d-flex flex-wrap mt-40">
                        <button class="button-form" type="submit" name="submit">
                            <span>
                                Submit
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>


<!----------------------------------------------- Start Footer Area --------------------------------------------------->

<?php include "components/footer.php"; ?>

<!------------------------------------------------ End Footer Area ---------------------------------------------------->

<!--<script>   //ex 1-->
<!--    function submitPopUp() {-->
<!--        let name = document.getElementById("formName").value;-->
<!--        let email = document.getElementById("formEmail").value;-->
<!--        let message = document.getElementById("formMessage").value;-->
<!--        const x = [name,email,message];-->
<!--        if (x != null) {-->
<!--            alert(x);-->
<!--        }-->
<!--    }-->
<!--</script>-->
<!--<script> //ex 2-->
<!--    document.addEventListener('mouseleave' , () => console.log('Mouse left window'));-->
<!--    document.addEventListener('mouseenter' , () => console.log('Mouse entered window'));-->
<!--</script>-->
<!---->
<!--<script> //ex 3-->
<!---->
<!--    window.addEventListener('scroll',scrollEffect);-->
<!---->
<!--    let winHeight = window.innerHeight/2;-->
<!---->
<!--    function scrollEffect() {-->
<!--        if (window.scrollY > winHeight) {-->
<!--            alert('You scrolled more than 50% height');-->
<!--                return;-->
<!--       }-->
<!--    }-->
<!---->
<!---->
<!---->
<!--</script>-->
<script src="../assets/js/logInPopUp.js"></script>
</body>
</html>