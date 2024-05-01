<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Set email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    // Email subject and content
    $subject = "Message from Contact Form";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    
    // Send email
    $recipient = "prevanth.data@gmail.com";
    if (mail($recipient, $subject, $body, $headers)) {
        echo "Your message has been sent successfully.";
    } else {
        echo "Sorry, there was an error sending your message.";
    }
} else {
    echo "Method Not Allowed";
}
?>
