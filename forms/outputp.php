<?php
# ----------------------------------------------------

# ----------------------------------------------------

// Receiving variables
@$First_Last_Name = addslashes($_POST['Organiser_Name']);
@$email = addslashes($_POST['email']);
@$Phone_Number = addslashes($_POST['Phone_Number']);
@$Address = addslashes($_POST['Address']);
@$City = addslashes($_POST['City']);
@$State = addslashes($_POST['State']);
@$Post_Code = addslashes($_POST['Post_Code']);
@$select = addslashes($_POST['referred']);
@$checkbox = addslashes($_POST['package']);
@$textarea = addslashes($_POST['Special_comments']);

// Validation
if (! ereg('[A-Za-z0-9_-]+\@[A-Za-z0-9_-]+\.[A-Za-z0-9_-]+', $email))
{
die("<p align='center'><font face='Arial' size='3' color='#FF0000'>Please enter a valid email</font><br><a href='javascript:history.go(-1);'>Previous Page</a></p>");
}

//Sending Email to form owner
# Email to Owner 
$pfw_header = "From: $email";
$pfw_subject = "Elite Package Request Form";
// CHANGE TO YOUR EMAIL ADDRESS
$pfw_email_to = "eliteshoptours@iprimus.com.au";
$pfw_message = "Organiser Name  : $Organiser_Name\n"
. "\n"
. "Organiser's Email Address  :\n"
. "email  :    $email\n"
. "Organiser's Phone Number  :    $Phone_Number\n"
. "Organiser's Address  :    $Address\n"
. "City   :    $City\n"
. "State   :    $State\n"
. "Post_Code   :    $Post_Code\n"
. "\n"
. "\n"
. "We have been referred to Elite by  :    $referred\n"
. "\n"
. "We would like the package sent to us by  :    $package\n"
. "\n"
. "Special_comments: $Special_comments\n"
. "\n";
@mail($pfw_email_to, $pfw_subject ,$pfw_message ,$pfw_header ) ;

 echo("<p align='center'><font face='Arial' size='3' color='#990000'>Thank You. We have recieved your Elite Shopping Tour Package Request. We will send this to you promptly. Click on the ELITE bag to go back to our Home page.</font></p>");
?>
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:735px;
	height:150px;
	z-index:1;
	background-color: #Efe6f7;
	top: 150px;
	left: 150px;
}
body {
	background-color: #FFFFFF;
}
-->
</style>
<div id="Layer1">
  <div align="center"><a href="../index.php"><img src="../img/logo.gif" alt="Back to Elite Home" width="199" height="62" border="0" /></a></div>
</div>
