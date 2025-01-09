<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $to = "dashrishikeshan@gmail.com";
    $subject = $_POST['subject'];
    $message = "Name: " . $_POST['name'] . "\n";
    $message .= "Email: " . $_POST['email'] . "\n";
    $message .= "Phone Number: " . $_POST['phoneNumber'] . "\n";
    $message .= "Message: " . $_POST['message'];
    $headers = "From: dashrishikeshan@gmail.com\r\n";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        // If the mail is sent successfully
        echo "<div class=Thanks for Contacting us..! We Will Contact You Soon...</div>";
    } else {
        // If mail failed
        echo "<div class='error-message'>There was an error sending your message. Please try again later.</div>";
    }
}
?>
