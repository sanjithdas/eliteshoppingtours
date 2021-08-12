<!DOCTYPE html>
<html lang="en">
<head>
<title>Elite Shopping Experience</title>
<meta name="Keywords" content="Shopping Tours, Bus Tours, Fundraising, Shopping" />
<meta name="Description" content="Melbourne Shopping Tours" />
<meta charset="utf-8">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/kwicks-slider.css" type="text/css" media="screen">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
<script src="js/jquery.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/jquery.kwicks-1.5.1.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/touchTouch.jquery.js"></script>
<script>
if ($(window).width() > 1024) {
    document.write("<" + "script src='js/jquery.preloader.js'></" + "script>");
}
</script>
<script>
jQuery(window).load(function () {
    $x = $(window).width();
    if ($x > 1024) {
        jQuery("#content .row").preloader();
    }
    jQuery('.magnifier').touchTouch();
    jQuery('.spinner').animate({
        'opacity': 0
    }, 1000, 'easeOutCubic', function () {
        jQuery(this).css('display', 'none')
    });
});
</script>
<!--<![endif]-->
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" href="css/docs.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
<![endif]-->
<style type="text/css">
<!--
.style1 {color: #666666}
.style3 {
	color: #990066
}
.style4 {color: #990066}
.style5 {color: #262626}
.style6 {color: #CCCCCC}
.style7 {font-style: italic}
.style8 {font-style: italic}
-->
</style>
<style>
<!--

/*Post-it note script- by javascriptkit.com
Visit JavaScript Kit (http://javascriptkit.com) for script
Credit must stay intact for use*/

#postit{
	position:absolute;
	width:481px;
	padding:5px;
	background-color:lightyellow;
	border:1px solid black;
	visibility:hidden;
	z-index:100;
	cursor:hand;
	cursor: pointer;
}
.style9 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-style: italic;
	font-weight: bold;
}
.style10 {color: #E85356}

-->
</style>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="spinner"></div>
<header>
  <div class="container clearfix">
    <div class="row">
      <div class="span12">
        <div class="navbar navbar_">
          <div class="container">
             <h1 class="brand brand_"><a href="index.php"><img alt="Elite Shopping Tours Home" src="img/logo.gif"></a></h1>
            <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
              <ul class="nav sf-menu">
                <li class="active"><a href="#about">About Us</a></li>
                <li class="sub-menu"><a href="tours.php">Tours</a>
                  <ul>
                    <li><a href="detail/supreme.php">Supreme </a></li>
                    <li><a href="detail/nofrills.php">No Frills</a></li>
                    <li><a href="detail/outlets.php">Hot Spots</a></li>
                  </ul>
                </li>
                <li><a href="detail/information.php">Info</a></li>
                <li><a href="detail/tourtips.php">Tips</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="bg-content">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="flexslider">
          <ul class="slides">
            <li> <img src="img/slide-1.jpg" alt="Elite Shopping Experience | Melbourne Tours"> </li>
            <li> <img src="img/slide-2.jpg" alt="Elite Shopping Experience | Melbourne Tours"> </li>
            <li> <img src="img/slide-3.jpg" alt="Elite Shopping Experience | Melbourne Tours"> </li>
            <li> <img src="img/slide-4.jpg" alt="Elite Shopping Experience | Melbourne Tours"> </li>
            <li> <img src="img/slide-5.jpg" alt="Elite Shopping Experience | Melbourne Tours"> </li>
          </ul>
        </div>
        <span id="responsiveFlag"></span>
        <div class="block-slogan">
          <h2>Welcome!</h2>
          <div>
            <p class="style8 style7 style1"><em><strong>“Nobody knows how to shop like a Woman. Nobody knows how to shop like Elite&quot;</strong></em></p>
            <p class="style8 style7 style1">&nbsp;</p>
            <p class="style7 style1">Welcome to the best shopping experience ever! We give you our absolute best for your shopping day! Book a tour online, you will receive a quick reply. Established in 1992, we have been having you on our shopping experiences for more than 20 years.</p>
            <p class="style7 style1"><span class="style7">You can request our <span class="style3"><a href="forms/package.php" target="_self">&quot;Tour Package&quot;</a></span> to be mailed to you.</span></p>
            <p class="style7 style1">&nbsp;</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="content" class="content-extra">
    <div class="row-1">
      <div class="container">
        <div class="row">
          <ul class="thumbnails thumbnails-1">
            <li class="span3">
              <div class="thumbnail thumbnail-1">
                <h3>Tour Tips</h3>
                <img src="img/page1-img2.jpg" alt="Elite's Tips for a great shopping experience">
                <section> <strong>Elite's Tips for a great shopping experience</strong>
                  <p class="style6">To ensure your ELITE Shopping Experience is hassle free - ALLOW TIME!</p>
                <a href="detail/tourtips.php" class="btn btn-1">Read More</a> </section>
              </div>
            </li>
            <li class="span3">
              <div class="thumbnail thumbnail-1">
                <h3>Hot Spots</h3>
                <img src="img/page1-img3.jpg" alt="Elite are leaders in giving you new and different places to shop.">
                <section> <em><strong>"Girls just want to have fun.......shopping" </strong></em>
                  <p class="style6">We are leaders in giving you new and different places to shop.</p>
                  <a href="detail/outlets.php" class="btn btn-1">Read More</a> </section>
              </div>
            </li>
            <li class="span3">
              <div class="thumbnail thumbnail-1">
                <h3>Information</h3>
                <img src="img/page1-img4.jpg" alt="ELITE is unique and different.">
                <section> <strong>ELITE is unique and different.</strong>
                  <p class="style6">We can pick up from most locations - outer Melbourne suburbs & country.
                  Lots of new outlets - Choices of 2 or 3 at some stops. 
                    A MEMORABLE AND FUN DAY OUT..</p>
                
                <a href="detail/information.php" class="btn btn-1">Read More</a> </section>
              </div>
            </li>
            <li class="span3">
              <div class="thumbnail thumbnail-1">
                <h3 class="title-1 extra">Facebook</h3>
                <img src="img/page1-img1.jpg" alt="Join us on Facebook">
                <section> <strong>Join us on Facebook </strong>
                  <p><span class="style6">Get all the latest news about tours on our page</span>.</p>
                
                  <a href="https://www.facebook.com/Elite-Shopping-Tours-111633745527749/" class="btn-1 btn"><em>Go there..</em></a> </section>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <article class="span6"id="about" >
          <h3>About Elite<span class="style5"></span></h3>
          <div class="wrapper">
            <figure class="img-indent"><img src="img/page1-img5.jpg" alt="About Elite Shopping Tours Melbourne"></figure>
            <div class="inner-1 overflow extra">
              <div class="txt-1 style4">At ELITE we help you choose a variety of <a href="http://www.eliteshoppingtours.com.au/detail/outlets.php" target="_blank"> "Outlets"</a> so there is something to interest and excite everyone - we will work with you to put together a variety filled itinerary to give everyone a truly <em>&quot;ELITE Shopping Experience&quot;</em>. Planning your itinerary early avoids the dissapointment of outlets being booked out</span>.</div>
              <div class="border-horiz"></div>
              <div class="overflow">
                <ul class="list list-pad style3">
                  <li><a href="forms/hostess.php">Hostess Application</a></li>
                  <li><a href="pdf/outletq.pdf">Outlet Questionaire</a></li>
                  <li><a href="pdf/feedback.pdf">Group Questionaire</a></li>
                  <li><a href="pdf/guest.pdf">Your Guest List</a></li>
                </ul>
                <ul class="list">
                  <li><a href="forms/booking.php">Tour Bookings</a></li>
                  <li><a href="detail/outlets.php">Hot Spots Outlets</a></li>
                  <li><a href="map/map.php">Tour Area Map</a></li>
                  <li><a href="forms/package.php">Tour package</a></li>
                </ul>
              </div>
            </div>
          </div>
        </article>
        <article class="span6">
          <h3></h3>
          <div class="fb-page" data-href="https://www.facebook.com/Elite-Shopping-Tours-111633745527749/" data-tabs="timeline" data-width="400" data-height="600" 

data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote 

cite="https://www.facebook.com/Elite-Shopping-Tours-111633745527749/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Elite-Shopping-

Tours-111633745527749/" class="style4">Elite Shopping Tours</a></blockquote>
          </div>

        </article>
      </div>
    </div>
  </div>
</div>
<footer>
  <div class="container clearfix">
    <ul class="list-social pull-right">
      <li><a class="icon-1" href="https://www.facebook.com/Elite-Shopping-Tours-111633745527749/"></a></li>
      <li><a class="icon-2" href="#"></a></li>
      <li><a class="icon-3" href="#"></a></li>
      <li><a class="icon-4" href="#"></a></li>
    </ul>
    <p><span class="style3">Copyright © 2018 Elite Shopping Tours | Designed by</span> <a href="http://www.fashionweb.com.au" target="_blank">fashionweb australia</a>   <span class="style3">  |</span>  <a href="detail/terms.php" target="_self">Terms & Conditions</a><span class="style3">|</span>  <a href="detail/privacy.php" target="_self">Privacy</a></p>
  </div>
  </div>
</footer>
<script src="js/bootstrap.js"></script>
<div id="postit" style="left:371px; top:165px">
<div align="right"><b><a href="javascript:closeit()">[Close This Message]</a></b></div>

<div align="center">
  <!--INSERT YOUR CONTENT HERE-->
  
  <span class="style9">Special Invitation:</span><br />
</div>
<p align="center"><a href="christmas.php" target="_top">You are invited to join the<br />
</a>2018 CHRISTMAS “JUMBO OUTLETS” DAY</p>
<p align="center"><img src="img/xmas.jpg" width="360" height="180"></p>
<p align="center"><a href="christmas.php" target="_top">“DELUXE” ELITE SHOPPING TOUR<br />
</a><span class="style10">On SATURDAY, 17TH November 2018</span></p>
</a>
<p align="center"><a href="christmas.php" target="_top">CLICK HERE FOR ALL THE DETAILS<br />
    <!--END YOUR CONTENT HERE-->
  
</div>
</div>

<script>

//Post-it only once per browser session? (0=no, 1=yes)
//Specifying 0 will cause postit to display every time page is loaded
var once_per_browser=0

///No need to edit beyond here///

var ns4=document.layers
var ie4=document.all
var ns6=document.getElementById&&!document.all

if (ns4)
crossobj=document.layers.postit
else if (ie4||ns6)
crossobj=ns6? document.getElementById("postit") : document.all.postit


function closeit(){
if (ie4||ns6)
crossobj.style.visibility="hidden"
else if (ns4)
crossobj.visibility="hide"
}

function get_cookie(Name) {
  var search = Name + "="
  var returnvalue = "";
  if (document.cookie.length > 0) {
    offset = document.cookie.indexOf(search)
    if (offset != -1) { // if cookie exists
      offset += search.length
      // set index of beginning of value
      end = document.cookie.indexOf(";", offset);
      // set index of end of cookie value
      if (end == -1)
         end = document.cookie.length;
      returnvalue=unescape(document.cookie.substring(offset, end))
      }
   }
  return returnvalue;
}

function showornot(){
if (get_cookie('postdisplay')==''){
showit()
document.cookie="postdisplay=yes"
}
}

function showit(){
if (ie4||ns6)
crossobj.style.visibility="visible"
else if (ns4)
crossobj.visibility="show"
}

if (once_per_browser)
showornot()
else
showit()

</script>

<script language="JavaScript1.2">

//drag drop function for ie4+ and NS6////
/////////////////////////////////

function drag_drop(e){
if (ie4&&dragapproved){
crossobj.style.left=tempx+event.clientX-offsetx+'px'
crossobj.style.top=tempy+event.clientY-offsety+'px'
return false
}
else if (ns6&&dragapproved){
crossobj.style.left=tempx+e.clientX-offsetx+'px'
crossobj.style.top=tempy+e.clientY-offsety+'px'
return false
}
}

function initializedrag(e){
if (ie4&&event.srcElement.id=="postit"||ns6&&e.target.id=="postit"){
offsetx=ie4? event.clientX : e.clientX
offsety=ie4? event.clientY : e.clientY

tempx=parseInt(crossobj.style.left)
tempy=parseInt(crossobj.style.top)

dragapproved=true
document.onmousemove=drag_drop
}
}
document.onmousedown=initializedrag
document.onmouseup=new Function("dragapproved=false")

</script>
</body>
</html>