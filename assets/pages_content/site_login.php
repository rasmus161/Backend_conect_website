<?php



// dell me later no php errors to frontend not god later remember meee !!!!
error_reporting(E_ALL);
ini_set('display_errors', 1) ;

//login form logic
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
}
