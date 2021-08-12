<?php

# ----------------------------------------------------
# ----- TWO FILE CONTACT FORM
# ----- Version 1.1
# ----- Created on: 05/02/07
# ----- Designed by: American Financing
# ----- http://www.americanfinancing.net
# ----- For more scripts, please visit us at http://www.americanfinancing.net/free-scripts.cfm
# ----- Please feel free to modify this script for your own purpose.
# ----- ENJOY!!!
# ----------------------------------------------------

// Receiving variables
@$Group_Name = addslashes($_POST['Group_Name']);
@$ABN_Name = addslashes($_POST['ABN_Name']);
@$Contact_Name = addslashes($_POST['Contact_Name']);
@$email = addslashes($_POST['email']);
@$Phone_Number = addslashes($_POST['Phone_Number']);
@$Address = addslashes($_POST['Address']);
@$City = addslashes($_POST['City']);
@$State = addslashes($_POST['State']);
@$Zip_Code = addslashes($_POST['Post_Code']);
@$select = addslashes($_POST['Tour_No']);
@$select = addslashes($_POST['Tour_Type']);
@$Fundraising_Cheque = addslashes($_POST['Fundraising_Cheque']);
@$Tour_Date = addslashes($_POST['Tour_Date']);
@$Depature_Time = addslashes($_POST['Depature_Time']);
@$Return_Time = addslashes($_POST['Return_Time']);
@$select = addslashes($_POST['Own_Coach']);
@$Attending_Nos = addslashes($_POST['Attending_Nos']);
@$PickUp_Point = addslashes($_POST['PickUp_Point']);
@$Hostess_Name = addslashes($_POST['Hostess_Name']);
@$select = addslashes($_POST['Morning_Tea']);
@$select = addslashes($_POST['Lunch_Type']);
@$textarea = addslashes($_POST['textarea']);

// Validation
if (! ereg('[A-Za-z0-9_-]+\@[A-Za-z0-9_-]+\.[A-Za-z0-9_-]+', $email))
{
die("<p align='center'><font face='Arial' size='3' color='#FF0000'>Please enter a valid email</font><br><a href='javascript:history.go(-1);'>Previous Page</a></p>");
}

//Sending Email to form owner
# Email to Owner 
$pfw_header = "From: $email";
$pfw_subject = "Tour Enquiry";
// CHANGE TO YOUR EMAIL ADDRESS
$pfw_email_to = "eliteshoptours@iprimus.com.au";
$pfw_message = "Group_Name: $Group_Name\n"
. "ABN_Name: $ABN_Name\n"
. "Contact_Name: $Contact_Name\n"
. "email: $email\n"
. "Phone_Number: $Phone_Number\n"
. "Address: $Address\n"
. "City: $City\n"
. "State: $State\n"
. "Post_Code: $Post_Code\n"
. "Tour_No: $Tour_No\n"
. "Tour_Type: $Tour_Type\n"
. "Fundraising_Cheque: $Fundraising_Cheque\n"
. "Tour_Date: $Tour_Date\n"
. "Depature_Time: $Depature_Time\n"
. "Return_Time: $Return_Time\n"
. "Own_Coach: $Own_Coach\n"
. "Attending_Nos: $Attending_Nos\n"
. "PickUp_Point: $PickUp_Point\n"
. "Hostess_Name: $Hostess_Name\n"
. "Morning_Tea: $Morning_Tea\n"
. "Lunch_Type: $Lunch_Type\n"
. "textarea: $textarea\n"
. "\n";
/* first we need to require our MathGuard class */
require ("ClassMathGuard.php");
/* this condition checks the user input. Don't change the condition, just the body within the curly braces */
if (MathGuard :: checkResult($_REQUEST['mathguard_answer'], $_REQUEST['mathguard_code'])) {
	echo ("Great !"); //insert your code that will be executed when user enters the correct answer
} else {
	echo ("Bad answer, either you are a spammer or you need to go back to school !"); //insert your code which tells the user he is spamming your website
	die();
}
@mail($pfw_email_to, $pfw_subject ,$pfw_message ,$pfw_header ) ;

 echo("<p align='center'><font face='Arial' size='3' color='#FFFFFF'>Thank you, we have received your Tour Booking Enquiry and will be in touch with you to confirm all details shortly!!</font><br><p align='center'><font face='Arial' size='3' color='#666666'>Please take another minute to make your Tour Outlet choices by clicking on the image below</p>");
?><style type="text/css">
<!--
body {
	background-image: url();
	background-color: #FFFFFF;
}
-->
</style>
<div align="center"><a href="../forms/choices.php"><img src="../img/logo.gif" width="199" height="62" border="0" /></a>
  <style type="text/css">
<!--
.style1 {color: #ECE9D8}
-->
  </style>
</div>
