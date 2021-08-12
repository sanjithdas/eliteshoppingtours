<?php
$contact_name = $_POST['name'];
$contact_email = $_POST['email'];
$contact_interest = $_POST['interest'];
$contact_message = $_POST['message'];

if( $contact_name == true )
{
	$sender = $contact_email;
	$receiver = "eliteshoptours@iprimus.com.au";
	$client_ip = $_SERVER['REMOTE_ADDR'];
	
	$email_body = "Name: $contact_name \nEmail: $sender \n\nArea of Interest: \n\n$contact_interest \n\nMessage: \n\n$contact_message \n\nIP: $client_ip \n\nContact Form provided by http://www.eliteshoppingtours.com.au";
	$email_body_auto_reply = "Hello $contact_name, \nThis is the auto reply message. Thank you for your email. We will attend to your message promptly. \n\nAdmin - http://www.eliteshoppingtours.com.au";
	
	$extra = "From: $sender\r\n" . "Reply-To: $sender \r\n" . "X-Mailer: PHP/" . phpversion();
	$extra_auto_reply = "From: $receiver\r\n" . "Reply-To: $receiver \r\n" . "X-Mailer: PHP/" . phpversion();
	
	mail( $sender, "Auto Reply - Re: $contact_name", $email_body_auto_reply, $extra_auto_reply );	// auto reply mail to sender

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
	background-image: url();
	background-repeat: no-repeat;
}
body,td,th {
	color: #FFFFFF;
	font-size: 16px;
}
.style1 {
	color: #000099;
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
</style></p>
<form>
  <div align="center">
    <p><span class="style1">Thank you for your email. We will attend to your message promptly.</span>&nbsp;    </p>
    <p>
      <input type="button" value="Back to Elite" 
onClick="javascript: history.go(-2)">
      </p>
  </div>
</form>