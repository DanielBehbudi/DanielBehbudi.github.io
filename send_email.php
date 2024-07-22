<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form fields
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Email settings
    $to = "mbehbudi@gmail.com"; // Your email address
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/html\r\n";

    // Email content
    $email_content = "<h2>New Contact Message</h2>
                      <p><strong>Name:</strong> $name</p>
                      <p><strong>Email:</strong> $email</p>
                      <p><strong>Subject:</strong> $subject</p>
                      <p><strong>Message:</strong><br>$message</p>";

    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "<p>Thank you for your message, $name. It has been sent.</p>";
    } else {
        echo "<p>Sorry, something went wrong. Please try again later.</p>";
    }
} else {
    echo "<p>There was a problem with your submission. Please try again.</p>";
}
?>
