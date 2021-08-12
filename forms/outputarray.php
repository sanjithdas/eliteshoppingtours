<title>Elite Shopping Tours Outlet Choices</title><?php
// Receiving variables
@$Tour_Group_Name = addslashes($_POST['Tour_Group_Name']);
@$email = addslashes($_POST['email']);
@$select = addslashes($_POST['Market_Level']);
@$select = addslashes($_POST['Outlets_Chosen[]']);
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
$pfw_message = "Tour Group Name: $Tour_Group_Name\n"
. "email: $email\n"
. "Market Level: $Market_Level\n"
. "Outlets Chosen: $Outlets_Chosen[]\n"
. "Age Group: $Age_Group\n"
. "Attending1: $Attending1\n"
. "Attending2: $Attending2\n"
. "Attending3: $Attending3\n"
. "Attending4: $Attending4\n"
. "Attending5: $Attending5\n"
. "Special Interest Outlets: $Special_Interest_Outlets\n"
. "\n";
@mail($pfw_email_to, $pfw_subject ,$pfw_message ,$pfw_header ) ;

 echo("<p align='center'><font face='Arial' size='3' color='#FF0000'>Thank You</font></p>");
?>
