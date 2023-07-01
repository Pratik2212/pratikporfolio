<?php
// PHP code (send_email.php)

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Set up email parameters
$to = "jadhavpratik@2212.com";  // Replace with your email address
$subject = "New Form Submission";
$body = "Name: $name\nEmail: $email\nMessage: $message";

// Send the email
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$mail_sent = mail($to, $subject, $body, $headers);

// Return a response
if ($mail_sent) {
  echo "Email sent successfully.";
} else {
  echo "Email sending failed.";
}
?>
