<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Elite Spot A Shopper Form</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 44px;
	top: 465px;
}
#Layer2 {
	position:absolute;
	width:950px;
	height:93px;
	z-index:2;
	left: 44px;
	top: 7px;
	background-color: #916187;
}
.style10 {font-family: Geneva, Arial, Helvetica, sans-serif}
.style26 {color: #990000}
#Layer3 {
	position:absolute;
	width:952px;
	height:237px;
	z-index:3;
	left: 44px;
	top: 120px;
	background-color: #916187;
}
body {
	background-color: #FFFFFF;
}
.style28 {font-size: 12px}
.style30 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #FFFFFF;
}
.style33 {font-size: 14px; font-family: Geneva, Arial, Helvetica, sans-serif;}
.style34 {color: #FFFFFF}
.style35 {font-family: Geneva, Arial, Helvetica, sans-serif; color: #FFFFFF; }
-->
</style>
</head>

<body>
<div align="center" id="Layer1">
  <table width="447" height="470" border="2" cellpadding="0" cellspacing="0" bordercolor="#8080C0">
    <tr>
      <td width="441" bgcolor="#f5eff5"> 
       <form name="form1" method="post" action="outputshopper.php">
          <div align="center">
            <p class="style26"><strong><font size="4" face="Arial, Helvetica, sans-serif">Elite Shopping Tours</font> </strong></p>
          </div>
          <table width="369" align="center" cellpadding="2" cellspacing="0" bordercolor="#CCCCCC">
          <tr bgcolor="#5757AC"> 
            <td colspan="2" bgcolor="#F5eff5"> 
              <p align="center"><font color="#0000FF" size="3" face="Arial, Helvetica, sans-serif"><strong><font color="#990033" size="4">Tour Enquiry</font> </strong></font></p></td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td width="94" bgcolor="#CCCCFF"> <div align="right"><font color="#990033" size="1" face="Arial, Helvetica, sans-serif">Organiser/Referrer Name:</font></div></td>
            <td width="265" bgcolor="#CCCCCC"> 
              <div align="center">
                <input name="Organiser_Name" type="text" id="Organiser_Name2" />
              </div></td>
          </tr>
		  <tr bgcolor="#FFFFFF"> 
            <td width="94" bgcolor="#CCCCFF"> <div align="right"><font color="#990033" size="1" face="Arial, Helvetica, sans-serif">Previous Tour Name (if any):</font></div></td>
            <td width="265" bgcolor="#CCCCCC"> 
              <div align="center"> 
                <input name="Previous_Tour_Name" type="text" id="Previous_Tour_Name2" />
              </div></td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td bgcolor="#CCCCFF"> <div align="right"><font color="#990033" size="1" face="Arial, Helvetica, sans-serif">Email 
              Address:</font></div></td>
            <td bgcolor="#CCCCCC"> 
              <div align="center"> 
                <input name="email" type="text" id="email2" />
              </div></td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td bgcolor="#CCCCFF"> <div align="right"><font color="#990033" size="1" face="Arial, Helvetica, sans-serif">Phone 
                Number:</font></div></td>
            <td bgcolor="#CCCCCC"> 
              <div align="center"> 
                <input name="Phone_Number" type="text" id="Phone_Number2" />
              </div></td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td bgcolor="#CCCCFF"> <div align="right"><font color="#990033" size="1" face="Arial, Helvetica, sans-serif">Contacts Address:</font></div></td>
            <td bgcolor="#CCCCCC"> 
              <div align="center"> 
                <input name="Address" type="text" id="Address2" />
              </div></td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td bgcolor="#CCCCFF"> <div align="right"><font color="#990033" size="1" face="Arial, Helvetica, sans-serif">City:</font></div></td>
            <td bgcolor="#CCCCCC"> 
              <div align="center"> 
                <input name="City" type="text" id="City2" />
              </div></td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td bgcolor="#CCCCFF"> <div align="right"><font color="#990033" size="1" face="Arial, Helvetica, sans-serif">State:</font></div></td>
            <td bgcolor="#CCCCCC"> 
              <div align="center"> 
                <input name="State" type="text" id="State2" />
              </div></td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td bgcolor="#CCCCFF"> <div align="right"><font color="#990033" size="1" face="Arial, Helvetica, sans-serif">Post 
                Code:</font></div></td>
            <td bgcolor="#CCCCCC"> 
              <div align="center"> 
                <input name="Post_Code" type="text" id="Post_Code2" />
              </div></td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td bgcolor="#CCCCFF"> <div align="right"><font color="#990033" size="1" face="Arial, Helvetica, sans-serif">Organisation Type (referrer):</font></div></td>
            <td bgcolor="#CCCCCC"> 
              <div align="center"> 
                <select name="Organisation_Type" size="1">
                  <option>PLEASE CHOOSE</option>
                  <option value="Primary_School">Primary School</option>
                  <option value="High_School">High School</option>
                  <option value="Kindergarten">Kindergarten</option>
				  <option value="Social_Club">Social Club</option>
          </select>
              </div></td>
          </tr>
		   <tr bgcolor="#FFFFFF"> 
            <td width="94" bgcolor="#7B98E1"> <div align="right"><font color="#000066" size="1" face="Arial, Helvetica, sans-serif">Spot a Shopper Cheque To: </font></div></td>
            <td width="265" bgcolor="#99CCFF"> 
              <div align="center"> 
                <input name="Shopper_Cheque" type="text" id="Shopper_Cheque2" />
              </div></td>
            </tr>
          <tr bgcolor="#FFFFFF"> 
            <td width="94" bgcolor="#FFFFFF"> <div align="right"><font color="#009900" size="1" face="Arial, Helvetica, sans-serif">Referred Tour Group Name:</font></div></td>
            <td width="265" bgcolor="#CCCCFF"> 
              <div align="center">
                <input name="Referred_Tour_Group_Name" type="text" id="Referred_Tour_Group_Name2" />
              </div></td>
          </tr>
		  <tr bgcolor="#FFFFFF"> 
            <td width="94" bgcolor="#FFFFFF"> <div align="right"><font color="#009900" size="1" face="Arial, Helvetica, sans-serif">Referred Contact Name:</font></div></td>
            <td width="265" bgcolor="#CCCCFF"> 
              <div align="center"> 
                <input name="Referred_Contact_Name" type="text" id="Referred_Contact_Name2" />
              </div></td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td bgcolor="#FFFFFF"> <div align="right"><font color="#009900" size="1" face="Arial, Helvetica, sans-serif">Email 
              Address:</font></div></td>
            <td bgcolor="#CCCCFF"> 
              <div align="center"> 
                <input name="email3" type="text" id="email3" />
              </div></td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td bgcolor="#FFFFFF"> <div align="right"><font color="#009900" size="1" face="Arial, Helvetica, sans-serif">Phone 
              Number:</font></div></td>
            <td bgcolor="#CCCCFF"> 
              <div align="center"> 
                <input name="Referred_Contact_Phone_Number" type="text" id="Referred_Contact_Phone_Number2" />
              </div></td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td bgcolor="#FFFFFF"> <div align="right"><font color="#009900" size="1" face="Arial, Helvetica, sans-serif">Contacts Address:</font></div></td>
            <td bgcolor="#CCCCFF"> 
              <div align="center"> 
                <input name="Contacts_Address" type="text" id="Contacts_Address2" />
              </div></td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td bgcolor="#FFFFFF"> <div align="right"><font color="#009900" size="1" face="Arial, Helvetica, sans-serif">City:</font></div></td>
            <td bgcolor="#CCCCFF"> 
              <div align="center"> 
                <input name="Contacts_City" type="text" id="Contacts_City2" />
              </div></td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td bgcolor="#FFFFFF"> <div align="right"><font color="#009900" size="1" face="Arial, Helvetica, sans-serif">State:</font></div></td>
            <td bgcolor="#CCCCFF"> 
              <div align="center"> 
                <input name="Contacts_State" type="text" id="Contacts_State2" />
              </div></td>
          </tr>
          <tr bgcolor="#FFFFFF"> 
            <td bgcolor="#FFFFFF"> <div align="right"><font color="#009900" size="1" face="Arial, Helvetica, sans-serif">Post 
              Code:</font></div></td>
            <td bgcolor="#CCCCFF"> 
              <div align="center"> 
                <input name="Contacts_Post_Code" type="text" id="Contacts_Post_Code2" />
              </div></td>
</tr>
          <tr bgcolor="#FFFFFF"> 
            <td bgcolor="#FFFFFF"> <div align="right"><font color="#009900" size="1" face="Arial, Helvetica, sans-serif">Referred Organisation Type:</font></div></td>
            <td bgcolor="#CCCCFF"> 
              <div align="center"> 
                <select name="Referred_Organisation_Type" size="1">
                  <option>PLEASE CHOOSE</option>
                  <option value="Primary School">Primary School</option>
                  <option value="High School">High School</option>
                  <option value="Kindergarten">Kindergarten</option>
				  <option value="Social_Club">Social Club</option>
          </select>
              </div></td>			  
		    </tr>
          <tr bgcolor="#FFFFFF"> 
            <td valign="top" bgcolor="#CCCCFF"> <div align="right"><font color="#990033" size="1" face="Arial, Helvetica, sans-serif">Comments :</font></div></td>
            <td bgcolor="#CECEFF"> 
              <div align="center"> 
                <textarea name="Comments" cols="30" rows="8"></textarea>
              </div></td>
          </tr>
          <tr bgcolor="#8080C0"> 
            <td colspan="2"> <div align="center"><font size="2" face="Arial, Helvetica, sans-serif"><br />
                <input type="submit" name="Submit" value="Submit" />
                <br />
                <br />
                </font></div></td>
          </tr>
        </table>
       </form>      </td>
    </tr>
  </table>
</div>
<div class="style26" id="Layer2">
  <div align="center" class="style10 style28">    
    <p align="center" class="style34"><strong>ELITE REFERRALS - &ldquo;SPOT A SHOPPER&rdquo; </strong></p>
    <p align="center" class="style34"><strong>SPOT A SHOPPER $25 BONUS TO YOU</strong></p>
  </div>
<div align="center" class="style28">
  <p align="center"><span class="style35"><strong>Would you like to refer a Group to have an Elite Shopping Experience?</strong><br>
  We are only  too happy to offer you a &ldquo;Spot a Shopper&rdquo; $25 cheque for any introduction of a  new <u>Group</u> to Elite.</span><br />
  </p>
  </div>
</div>
<div id="Layer3"> <span class="style30"><strong>To receive a  &ldquo;Spot a Shopper $25.</strong> 
  </span>
  <ol class="style34">
    <li class="style33">To claim a &ldquo;Spot a Shopper&rdquo; $25 the  form below must be completed and returned.</li>
    <li class="style33">The Group &amp; Organiser must be  new to Elite and NOT have tentatively booked, cancelled or finalised with any  tour with Elite over the past 3 years.</li>
    <li class="style33">The new group or person booking must  have their Elite Shopping Tour finalised and there must be a minimum of 30+  Adult paying passengers to receive this bonus.</li>
    <li class="style33">If a person has previously enquired  or booked a Tour prior, this will not be considered a new booking.</li>
    <li class="style33">If the person&rsquo;s group organizing the  tour joins with another new Group, the &ldquo;Spot a Shopper&rdquo; will only be paid to  the group having the Elite Shopping Tour with a minimum 30+ full paying adult  shoppers which are from their group.&nbsp; The  minimum of 25 adults does not include the second tour Group numbers.</li>
    <li class="style33">If the same referral comes in from 2  different organizers, only one will be paid and it is up to them to discuss how  the $25 is to be dispersed.</li>
    <li class="style33">After the &ldquo;new&rdquo; shopping tour  referral has been completed a cheque will be mailed approximately two (2) weeks  after the referral tour has been completed.</li>
  </ol>
  <p><span class="style30">If you know  of any Group not doing a tour this year or haven&rsquo;t been with Elite Shopping  Tours before, please complete the form below.</span></p>
  <p><span class="style30">If you prefer you can <a href="../pdf/shopper.pdf">CLICK HERE</a> to print a form (pdf format) and mail it to us.</span> </p>
  <div align="center"><blockquote><p>&nbsp;</p>
    </blockquote>
  </div>
</div>
</body>
</html>
