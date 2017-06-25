<?php	
	if(empty($_POST['name_12571_46480']) && strlen($_POST['name_12571_46480']) == 0 || empty($_POST['email_12571_46480']) && strlen($_POST['email_12571_46480']) == 0 || empty($_POST['message_12571_46480']) && strlen($_POST['message_12571_46480']) == 0)
	{
		return false;
	}
	
	$name_12571_46480 = $_POST['name_12571_46480'];
	$email_12571_46480 = $_POST['email_12571_46480'];
	$message_12571_46480 = $_POST['message_12571_46480'];
	
	$to = 'juliealvarezc@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from My Blocs Website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_12571_46480: $name_12571_46480 \nEmail_12571_46480: $email_12571_46480 \nMessage_12571_46480: $message_12571_46480 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contacto@invertips.com.mx\n";
	$headers .= "Reply-To: $email_12571_46480";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>