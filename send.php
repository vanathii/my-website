  <?php

// Here we get all the information from the fields sent over by the form.
$name = $_POST['Name'];
$phone=$_POST['Phone'];  
$Sub=$_POST['Subject'];
$email = $_POST['Email'];
$message = $_POST['Message'];
	$to = 'vanathii94@gmail.com';
	$subject = 'Vanathi - Contact Page Feedback';
	$message = 'From: '.$name. "\r\n".'Subject: '.$Sub. "\r\n".'Phone Number:'.$phone. "\r\n".' Email: '.$email. "\r\n".'Message: '.$message;
	$headers = "From:" . $email. "\r\n";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
    mail($to, $subject, $message, $headers); //This method sends the mail.
echo '<script language="javascript">';
echo 'alert("Your Message successfully sent, She will get back to you ASAP.");';
echo 'window.location.href=" http://www.vanathi.com/";';
echo '</script>';
        	
        
}else{
	echo '<script language="javascript">';
echo 'alert("Invalid Email Address, Please give correct Email Id");';
echo 'window.location.href=" http://www.vanathi.com";';
echo '</script>';
}
	

	
	
	


?>