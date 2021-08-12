<?php
$contact_name = $_POST['name'];
$contact_email = $_POST['email'];
$contact_message = $_POST['message'];

if( $contact_name == true )
{
	$sender = $contact_email;
	$receiver = "admin@eliteshoppingtours.com.au";
	$client_ip = $_SERVER['REMOTE_ADDR'];
	$email_body = "Name: $contact_name \nEmail: $sender  \n\nMessage: \n\n$contact_message \n\nIP: $client_ip \n\nContact Form provided by http://www.fashionweb.com.au";		
	$extra = "From: $sender\r\n" . "Reply-To: $sender \r\n" . "X-Mailer: PHP/" . phpversion();

	if( mail( $receiver, "Contact Form - $contact_name", $email_body, $extra ) ) 
	{
		echo "Thank you for your email. We will attend to your message promptly.";
	}
	
	else
	{
		echo "Your email was not sent. Please complete the form and try again.";
	}
	
}
?><style type="text/css">
<!--
body {
	background-color: #FFFFFF;
	background-image: url(images/bg-01.gif);
	background-repeat: no-repeat;
}
body,td,th {
	color: #FFFFFF;
	font-size: 16px;
}
-->
</style></p>
<form>
  <div align="center">
    <input type="button" value="Back to ELITE" 
onClick="javascript: history.go(-2)">
  </div>
</form>
