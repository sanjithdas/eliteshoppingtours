<!DOCTYPE html>
<html lang="en">
<head>
<title>Elite Shopping Experience | Contact</title>
<meta charset="utf-8">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
<script src="js/jquery.js"></script>
<script src="js/superfish.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/forms.js"></script>
<script>
jQuery(window).load(function () {
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
.style1 {color: #333333}
-->
</style>
</head>
<body>
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
                <li><a href="#about">About Us</a></li>
                <li class="sub-menu"><a href="tours.php">Tours</a>
                  <ul>
                    <li><a href="detail/supreme.php">Supreme </a></li>
                    <li><a href="detail/nofrills.php">No Frills</a></li>
                    <li><a href="detail/outlets.php">Hot Spots</a></li>
                  </ul>
                </li>
                <li><a href="detail/information.php">Info</a></li>
                <li><a href="detail/tourtips.php">Tips</a></li>
                <li class="active"><a href="contact.php">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="bg-content">
  <div id="content">
    <div class="container">
      <div class="row">
        <article class="span8">
          <h3>Contact us</h3>
          <div class="inner-1">
            <div id="contact_form">

            
                <form method="post" name="contact" action="send_email_auto_response.php">

                  <label for="name"><span class="style3">Name:</span></label> 
                  <input type="text" id="name" name="name" class="required input_field" />
                  <div class="cleaner_h10"></div>
                    
                    <label for="email"><span class="style3">Email:</span></label> 
                    <input type="text" id="email" name="email" class="validate-email required input_field" />
                  <div class="cleaner_h10"></div>
                  
                  <label for="interest"><span class="style3">Area of Interest:</span></label> 
                  <input type="text" id="interest" name="interest" class="required input_field" />
                  <div class="cleaner_h10"></div>
                  
                    <label for="text"><span class="style3">Message:</span></label> 
                  <textarea id="text" name="message" rows="6" cols="0" class="required input_field"></textarea>
                    <? require("ClassMathGuard.php"); MathGuard::insertQuestion(); ?>
                  <div class="cleaner_h10"></div> 
                    
                    <input type="submit" class="submit_btn" name="submit" id="submit" value="Send" />
                    <input type="reset" class="submit_btn" name="reset" id="reset" value="Reset" />
                
              </form>
			</div>
            <article class="span4">
          <h3>Contact info</h3>
          <div class="map">
            <div class="img_nom img_border"><span></span>
          <iframe width="350" height="150" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Glenhuntly+Road,+Caulfield+South,+Victoria,+Australia&amp;aq=0&amp;oq=glenhuntly&amp;sll=37.0625,-95.677068&amp;sspn=55.937499,134.912109&amp;ie=UTF8&amp;hq=Glenhuntly+Road,&amp;hnear=Caulfield+South+Victoria,+Australia&amp;t=m&amp;fll=-37.892323,145.037845&amp;fspn=0.006892,0.016469&amp;st=107658235038825379151&amp;rq=1&amp;ev=p&amp;split=1&amp;ll=-37.891315,145.023352&amp;spn=0.006892,0.016469&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Glenhuntly+Road,+Caulfield+South,+Victoria,+Australia&amp;aq=0&amp;oq=glenhuntly&amp;sll=37.0625,-95.677068&amp;sspn=55.937499,134.912109&amp;ie=UTF8&amp;hq=Glenhuntly+Road,&amp;hnear=Caulfield+South+Victoria,+Australia&amp;t=m&amp;fll=-37.892323,145.037845&amp;fspn=0.006892,0.016469&amp;st=107658235038825379151&amp;rq=1&amp;ev=p&amp;split=1&amp;ll=-37.891315,145.023352&amp;spn=0.006892,0.016469" target="_blank" style="color:#0000FF;text-align:left">View Larger Map</a></small>	          </div>
          </div>
          <address class="address-1">
          <strong>Elite Shopping Tours<br>
          23 Dorothy Avenue<br>
          Glenhuntly Victoria 3163</strong>
          Phone: +613 9576 7665 
          </address>
          <address class="address-1">
          FAX: +6139576 7664
          </address>
          <address class="address-1">
          </address>
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
</body>
</html>