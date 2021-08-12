<?php
# ----------------------------------------------------

# ----------------------------------------------------

// Receiving variables
@$Hostess_Name = addslashes($_POST['Hostess_Name']);
@$Date_of_Birth = addslashes($_POST['Date_of_Birth']);
@$email = addslashes($_POST['email']);
@$Phone_Number = addslashes($_POST['Phone_Number']);
@$Address = addslashes($_POST['Address']);
@$City = addslashes($_POST['City']);
@$State = addslashes($_POST['State']);
@$Zip_Code = addslashes($_POST['Post_Code']);
@$select = addslashes($_POST['Dandenong_Ranges']);
@$select = addslashes($_POST['Bellarine_Peninsula']);
@$select = addslashes($_POST['Daylesford']);
@$select = addslashes($_POST['Marital_Status']);
@$select = addslashes($_POST['Children']);
@$select = addslashes($_POST['Own_Car']);
@$Drivers_Licence = addslashes($_POST['Drivers_Licence']);
@$select = addslashes($_POST['Shirt_Size']);
@$textarea = addslashes($_POST['Days_CANNOT_work']);
@$textarea = addslashes($_POST['Experience']);
// Validation
if (! ereg('[A-Za-z0-9_-]+\@[A-Za-z0-9_-]+\.[A-Za-z0-9_-]+', $email))
{
die("<p align='center'><font face='Arial' size='3' color='#FF0000'>Please enter a valid email</font><br><a href='javascript:history.go(-1);'>Previous Page</a></p>");
}

//Sending Email to form owner
# Email to Owner 
$pfw_header = "From: $email";
$pfw_subject = "Elite Hostess Application Form";
// CHANGE TO YOUR EMAIL ADDRESS
$pfw_email_to = "eliteshoptours@iprimus.com.au";
$pfw_message = "Hostess Applicant  :    $Hostess_Name\n"
. "\n"
. "Date of Birth  :    $Date_of_Birth\n"
. "\n"
. "email  :    $email\n"
. "Phone Number  :    $Phone_Number\n"
. "Address  :    $Address\n"
. "City  :    $City\n"
. "State  :    $State\n"
. "Post Code  :    $Post_Code\n"
. "\n"
. "How well I know Dandenong Ranges :    $Dandenong_Ranges\n"
. "\n"
. "How well I know Bellarine Peninsula :    $Bellarine_Peninsula\n"
. "\n"
. "How well I know Daylesford :   $Daylesford\n"
. "\n"
. "My Marital Status is :    $Marital_Status\n"
. "\n"
. "Any Children  :    $Children\n"
. "\n"
. "Own Car  :    $Own_Car\n"
. "\n"
. "My Drivers Licence number is :    $Drivers_Licence\n"
. "\n"
. "My Shirt size is :    $Shirt_Size\n"
. "\n"
. "I am NOT available for work on the following days : $Days_CANNOT_work\n"
. "\n"
. "My Previous Experience is :    $Experience\n"
. "\n";
@mail($pfw_email_to, $pfw_subject ,$pfw_message ,$pfw_header ) ;

 echo("<p align='center'><font face='Arial' size='3' color='#FFFFFF'>Thank you, we have received your Elite Hostess Application form and will be in touch with your details shortly!!</font><br><p align='center'><font face='Arial' size='3' color='#666666'>Please click on the bag below to continue your 'Elite' experience.</p>");
?><style type="text/css">
<!--
body {
	background-image: url(images/back2.png);
	background-color: #FFFFFF;
}
#Layer1 {
	position:absolute;
	width:756px;
	height:115px;
	z-index:1;
	left: 8px;
	top: 203px;
	background-color: #FFFF00;
}
-->
</style>
<div align="center"><a href="../index.php"><img src="../img/logo.gif" width="199" height="62" border="0" /></a>
  <style type="text/css">
<!--
.style1 {color: #ECE9D8}
-->
  </style>
</div>
