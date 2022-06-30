<?php
include "../db/connDB.php";
$conn = $GLOBALS['conn'];

$registerComplete = true;

$fullName = $_POST["fullName"];
$registerEmail = $_POST["remail"];
$registerPassword = $_POST["rpassword"];
$correctPassword = $_POST["crpassword"];

$hashedPassword = md5($registerPassword);
$vkey = md5(time() . $fullName);

$response = [
    'success' => '',
    'name_error' => '',
    'email_error' => '',
    'password_error' => '',
    'correctPassword_error' => ''
];

if (empty($fullName)) {
    $response['name_error'] = 'Field required';
    $registerComplete = false;
} elseif (strlen($fullName) <= 5) {
    $response['name_error'] = "Name should be at least 5 characters";
    $registerComplete = false;
} elseif (!preg_match("/^[a-zA-Z\s]*$/", $fullName)) {
    $response['name_error'] = 'Only letters!';
    $registerComplete = false;
}

if(empty($registerEmail)) {
    $response['email_error'] = "Field required";
    $registerComplete = false;
} elseif(!filter_var($registerEmail, FILTER_VALIDATE_EMAIL)) {
    $response['email_error'] = 'Invalid email format';
    $registerComplete = false;
}

$uppercase = preg_match('@[A-Z]@', $registerPassword);
$lowercase = preg_match('@[a-z]@', $registerPassword);
$number = preg_match('@[0-9]@', $registerPassword);
$specialchars = preg_match('@[^\w]@', $registerPassword);


if (empty($registerPassword)) {
    $response['password_error'] = 'Field Required';
    $registerComplete = false;
} elseif (!$uppercase || !$lowercase || !$number || !$specialchars || strlen($registerPassword) < 8) {
    $response['password_error'] = "Password should be at least 8 characters in length , and should include
    at least one upper case letter, one number, and one special character.";
    $registerComplete = false;
}
if (empty($correctPassword)) {
    $response['correctPassword_error'] = "Field Required";
    $registerComplete = false;
} elseif ($_POST['rpassword'] !== $_POST['crpassword']) {
    $response['correctPassword_error'] = "Passwords do not match! Try again";
    $registerComplete = false;
}



// Check to see if the user already registered
// Check username
$sql = "SELECT full_name FROM users WHERE full_name='$fullName'";
$result = mysqli_query($conn,$sql) or die("Query unsuccessful") ;
if (mysqli_num_rows($result) > 0) {
    $response['name_error'] = "Username already exists.";
    $registerComplete = false;
}

//Check email
$check_email = mysqli_query($conn, "SELECT email FROM users where email = '$registerEmail'");
if(mysqli_num_rows($check_email) > 0){
    $response['email_error'] = "E-mail already exists";
    $registerComplete = false;
}


if ($registerComplete) {


    $query = "INSERT INTO users (full_name, email, password, vkey) 
  			  VALUES('$fullName', '$registerEmail', '$hashedPassword', '$vkey')";
    $insert = mysqli_query($conn, $query);
    if ($insert) {

        $to = $registerEmail;
        $subject = "Email Verification";
        $message = "<a href='https://n_vajko.internship.rankingcoach.com/includes/user/verificationEmail.php?vkey=$vkey'>Register Account</a>";
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
        $headers[] = 'From: Scrappy <scrappy@example.com>';

        mail($to, $subject, $message, implode("\r\n", $headers));

        $response['success'] = 'Register Completed. An e-mail was sent in order to verify your account. Please check your inbox';
    }

}
//transform into json obj
echo json_encode($response);
