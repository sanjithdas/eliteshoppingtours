<title>Elite Shopping Tours Outlet Choices</title><?php
// Receiving variables
@$Tour_Group_Name = addslashes($_POST['Tour_Group_Name']);
@$email = addslashes($_POST['email']);
@$select = addslashes($_POST['Market_Level']);
@$checkbox = addslashes($_POST['outlet1']);
@$checkbox = addslashes($_POST['outlet2']);
@$checkbox = addslashes($_POST['outlet3']);
@$checkbox = addslashes($_POST['outlet4']);
@$checkbox = addslashes($_POST['outlet5']);
@$checkbox = addslashes($_POST['outlet6']);
@$checkbox = addslashes($_POST['outlet7']);
@$checkbox = addslashes($_POST['outlet8']);
@$checkbox = addslashes($_POST['outlet9']);
@$checkbox = addslashes($_POST['outlet10']);
@$checkbox = addslashes($_POST['outlet11']);
@$checkbox = addslashes($_POST['outlet12']);
@$checkbox = addslashes($_POST['outlet13']);
@$checkbox = addslashes($_POST['outlet14']);
@$checkbox = addslashes($_POST['outlet15']);
@$checkbox = addslashes($_POST['outlet16']);
@$checkbox = addslashes($_POST['outlet17']);
@$checkbox = addslashes($_POST['outlet18']);
@$checkbox = addslashes($_POST['outlet19']);
@$checkbox = addslashes($_POST['outlet20']);
@$checkbox = addslashes($_POST['outlet21']);
@$checkbox = addslashes($_POST['outlet22']);
@$checkbox = addslashes($_POST['outlet23']);
@$checkbox = addslashes($_POST['outlet24']);
@$checkbox = addslashes($_POST['outlet25']);
@$checkbox = addslashes($_POST['outlet26']);
@$checkbox = addslashes($_POST['outlet27']);
@$checkbox = addslashes($_POST['outlet28']);
@$checkbox = addslashes($_POST['outlet29']);
@$checkbox = addslashes($_POST['outlet30']);
@$checkbox = addslashes($_POST['outlet31']);
@$checkbox = addslashes($_POST['outlet32']);
@$checkbox = addslashes($_POST['Age_Group']);
@$checkbox = addslashes($_POST['Attending1']);
@$checkbox = addslashes($_POST['Attending2']);
@$checkbox = addslashes($_POST['Attending3']);
@$checkbox = addslashes($_POST['Attending4']);
@$checkbox = addslashes($_POST['Attending5']);
@$textarea = addslashes($_POST['Special_Interest_Outlets']);
// Validation
if (! ereg('[A-Za-z0-9_-]+\@[A-Za-z0-9_-]+\.[A-Za-z0-9_-]+', $email))
{
die("<p align='center'><font face='Arial' size='3' color='#FF0000'>Please enter a valid email</font><br><a href='javascript:history.go(-1);'>Previous Page</a></p>");
}

//Sending Email to form owner
# Email to Owner 
$pfw_header = "From: $email";
$pfw_subject = "Elite Shopping Tours Outlet Choices";
// CHANGE TO YOUR EMAIL ADDRESS
$pfw_email_to = "eliteshoptours@iprimus.com.au";
$pfw_message = "Tour Group Name (from our Booking form): $Tour_Group_Name\n"
. "EMAIL (used when booking)  : $email\n"
. "\n"
. "We have chosen the following level of shopping:\n"
. "Market Level: $Market_Level\n"
. "\n"
. "We have selected the following outlet types:\n"
. "outlet   :    $outlet1\n" 
. "outlet   :    $outlet2\n"
. "outlet   :    $outlet3\n"
. "outlet   :    $outlet4\n"
. "outlet   :    $outlet5\n"
. "outlet   :    $outlet6\n"
. "outlet   :    $outlet7\n"
. "outlet   :    $outlet8\n"
. "outlet   :    $outlet9\n" 
. "outlet   :    $outlet10\n"
. "outlet   :    $outlet11\n"
. "outlet   :    $outlet12\n"
. "outlet   :    $outlet13\n"
. "outlet   :    $outlet14\n"
. "outlet   :    $outlet15\n"
. "outlet   :    $outlet16\n"
. "outlet   :    $outlet17\n" 
. "outlet   :    $outlet18\n"
. "outlet   :    $outlet19\n"
. "outlet   :    $outlet20\n"
. "outlet   :    $outlet21\n"
. "outlet   :    $outlet22\n"
. "outlet   :    $outlet23\n"
. "outlet   :    $outlet24\n"
. "outlet   :    $outlet25\n" 
. "outlet   :    $outlet26\n"
. "outlet   :    $outlet27\n"
. "outlet   :    $outlet28\n"
. "outlet   :    $outlet29\n"
. "outlet   :    $outlet30\n"
. "outlet   :    $outlet31\n"
. "outlet   :    $outlet32\n"
. "\n"
. "Our shopping tour will be the following age group:\n"
. "Age Group: $Age_Group\n"
. "\n"
. "To assist you - The following are coming on our tour:\n"
. "Attending: $Attending1\n"
. "Attending: $Attending2\n"
. "Attending: $Attending3\n"
. "Attending: $Attending4\n"
. "Attending: $Attending5\n"
. "\n"
. "The following outlets are of special interest on our tour:\n"
. "Special Interest Outlets: $Special_Interest_Outlets\n"
. "\n";
@mail($pfw_email_to, $pfw_subject ,$pfw_message ,$pfw_header ) ;

 echo("<p align='center'><font face='Arial' size='3' color='#990000'>Thank You. We have recieved your Elite Shopping Tour Options list. We will be happy to discuss these further with you at the time of your appointment. Click on the ELITE bag to go back to our Home page.</font></p>");
?>
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:735px;
	height:150px;
	z-index:1;
	background-color: #916187;
	top: 150px;
	left: 150px;
}
body {
	background-color: #FFFFFF;
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
