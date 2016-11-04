<?php $name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$recipient = "cartedesignmaps@gmail.com";
$mailheader = "From: $email \r\n";
$formcontent="From: $name \n Message: $message";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Your message has been sent. Thank You!";
?>

<p><a href="http://www.cartedesign.com">Click here</a> to return to the previous page.</p>
