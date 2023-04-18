<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  
  $to = "rahulgiridhar21@gmail.com"; // replace with your email address
  $subject = "New contact form submission";
  $message = "Name: " . $name . "\r\nEmail: " . $email . "\r\nPhone: " . $phone;
  $headers = "From: " . $email;
  
  if (mail($to, $subject, $message, $headers)) {
    echo "<p>Thank you for contacting us, " . $name . ". We will get back to you soon.</p>";
  } else {
    echo "<p>Sorry, something went wrong. Please try again later.</p>";
  }
}
?>
