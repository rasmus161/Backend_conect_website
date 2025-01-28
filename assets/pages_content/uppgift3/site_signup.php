<?php


//sign up form logic

$signupSuccess = false;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize user input + protect against hackers
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);

    // Validate email and check if username is not empty
    if (filter_var($email, FILTER_VALIDATE_EMAIL)  && !empty($username)) {


        // Set session variables
        $_SESSION['username'] = $username; 

        // Generate a random password
        $password = bin2hex(random_bytes(4));


        // email content to be sent
        $to = $email;
        $subject = "your password ";
        $message = "Hello $username,\n\n Your new password is: $password";
        $headers = "From: no-reply@yourdomain.com";

        // send email

        if (mail($to, $subject, $message, $headers)) {
            echo "Registration successful! Please check your email for your password.";
        } else {
            echo "<p>Failed to send email. </p>";
        }
    } else {
        echo "<p>Invalid inputs</p>";
    }

    $signupSuccess = true;
}

if ($signupSuccess) {
    header("refresh:5;url=https://cgi.arcada.fi/~porthinr/webb/Backend_conect_website/assets/pages/login.php");
}
