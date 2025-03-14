<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Set recipient email address
    $to = "girihimanshu722@gmail.com"; // Replace with your email address

    // Set email subject
    $subject = "New Message from $name";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message\n";

    // Set email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again.";
    }
} else {
    echo "Invalid request method.";
}
?>
