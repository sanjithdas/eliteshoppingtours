<?php


// Receiving variables
@$Organiser_Name = addslashes($_POST['Organiser_Name']);
@$Previous_Tour_Name = addslashes($_POST['Previous_Tour_Name']);
@$email = addslashes($_POST['email']);
@$Phone_Number = addslashes($_POST['Phone_Number']);
@$Address = addslashes($_POST['Address']);
@$City = addslashes($_POST['City']);
@$State = addslashes($_POST['State']);
@$Zip_Code = addslashes($_POST['Post_Code']);
@$select = addslashes($_POST['Organisation_Type']);
@$Shopper_Cheque = addslashes($_POST['Shopper_Cheque']);
@$Referred_Tour_Group_Name = addslashes($_POST['Referred_Tour_Group_Name']);
@$Referred_Contact_Name = addslashes($_POST['Referred_Contact_Name']);
@$email3 = addslashes($_POST['email3']);
@$Referred_Contact_Phone_Number = addslashes($_POST['Referred_Contact_Phone_Number']);
@$Contacts_Address = addslashes($_POST['Contacts_Address']);
@$Contacts_City = addslashes($_POST['Contacts_City']);
@$Contacts_State = addslashes($_POST['Contacts_State']);
@$Contacts_Post_Code = addslashes($_POST['Contacts_Post_Code']);
@$select = addslashes($_POST['Referred_Organisation_Type']);
@$textarea = addslashes($_POST['Comments']);

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
$pfw_email_to = "admin@eliteshoppingtours.com.au";
$pfw_message = "Organiser/Referrer Name : $Organiser_Name\n"
. "Previous Tour Name (if any) :    $Previous_Tour_Name\n"
. "email :    $email\n"
. "Phone_Number :    $Phone_Number\n"
. "Address :    $Address\n"
. "City :    $City\n"
. "State :    $State\n"
. "Post_Code :    $Post_Code\n"
. "Organisation Type (referrer): $Organisation_Type\n"
. "\n"
. "The Spot A Shopper Chq. payable to:\n"
. "Shopper_Cheque: $Shopper_Cheque\n"
. "\n"
. "\n"
. "Referred Tour Group Name: $Referred_Tour_Group_Name\n"
. "\n"
. "\n"
. "Referred Contact Name: $Referred_Contact_Name\n"
. "Referrer's email: $email3\n"
. "Referrer's Contact Phone_Number: $Referred_Contact_Phone_Number\n"
. "Referrer's Address: $Contacts_Address\n"
. "Referrer's City: $Contacts_City\n"
. "Referrer's State: $Contacts_State\n"
. "Referrer's Post Code: $Contacts_Post_Code\n"
. "\n"
. "\n"
. "Referred Organisation Type: $Referred_Organisation_Type\n"
. "\n"
. "textarea: $Comments\n"
. "\n";
@mail($pfw_email_to, $pfw_subject ,$pfw_message ,$pfw_header ) ;

 echo("<p align='center'><font face='Arial' size='3' color='#FF0000'>Thank you, we have received your Spot A Shopper referall and will be in touch with you to confirm all details shortly!!</font><br><p align='center'><font face='Arial' size='3' color='#666666'>Click on the ELITE bag to go back to our Home page.</p>");
?><style type="text/css">
<!--
body {
	background-image: url();
	background-color: #FFFFFF;
}
-->
</style>
<div align="center"><a href="../elite.php"><img src="../images/Elite.png" width="150" height="150" /></a>
    
</div>
