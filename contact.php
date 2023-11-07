<?php
// Get data from form 
$firstname = $_POST['firstname'];
$lastname = $_POST['lastame'];
$email= $_POST['email'];
$category= $_POST['category'];
$message= $_POST['message'];

$to = "yourEmail@gmail.com";
$subject = "This is the subject line";

// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message 

$txt ="First Name = ". $firstname . "\r\n  Last Name = ".$lastname. "\r\n Email = "
	. $email . "\r\n Category= ".$category. "\r\n  Message =" . $message;

$headers = "From: noreply@demosite.com" . "\r\n" .
			"CC: somebodyelse@example.com";
if($email != NULL) {
	mail($to, $subject, $txt, $headers);
}

// Redirect to
header("Location:contactform.html");
?>
