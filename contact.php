<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Set the recipient email address.
    $to = "your-email@example.com"; // Replace with your email address.

    // Get the form data.
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Create an email message.
    $emailMessage = "Name: $name\n";
    $emailMessage .= "Email: $email\n";
    $emailMessage .= "Subject: $subject\n";
    $emailMessage .= "Message:\n$message";

    // Set additional email headers.
    $headers = "From: $email";

    // Send the email.
    if (mail($to, $subject, $emailMessage, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending message.";
    }
}
?>
