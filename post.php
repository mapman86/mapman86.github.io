<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$recipient = "matthewmccullough86@gmail.com";
$mailheader = "From: $email \r\n";
$formcontent="From: $name \n Message: $message";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Your message has been sent. Thank You!";
?>

<p><a href="https://www.mapman86.github.io">Click here</a> to return to the previous page.</p>
