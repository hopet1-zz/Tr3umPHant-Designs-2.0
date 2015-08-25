<?php
/*
$name = $_POST['name'];
$email = $_POST['email'];
$message = "Howdy Trey!";
 
$to = 'trey.a.hope@gmail.com';
$subject = 'the subject';
$message = 'FROM: '.$name.' Email: '.$email.'Message: '.$message;
$headers = 'hopet1@mymail.nku.edu' . "\r\n";
 
if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
	if(@mail($to, $subject, $message, $headers)){ //This method sends the mail.
		echo "Your email was sent!"; // success message
	}else{
		echo $to; 
	}
}else{
	echo "Invalid Email, please provide an correct email.";
}*/
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
if(mail("trey.a.hope@gmail.com","My subject",$msg)){
	echo "Yes";
}
else{
	echo "No";
}
?>