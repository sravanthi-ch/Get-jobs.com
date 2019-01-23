<?php
   include("config.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
	   
	    $myname = mysqli_real_escape_string($db,$_POST['name']);
       
	   $myemail = mysqli_real_escape_string($db,$_POST['email']); 
	   $mymessage = mysqli_real_escape_string($db,$_POST['message']); 
	  
	  
	   $sql = "INSERT INTO contact (name,email,message) VALUES ('$myname','$myemail','$mymessage')";
      $result = mysqli_query($db,$sql);
	   header("location: success.php");
   }
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Get Jobs.Com</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/coda-slider.css" type="text/css" charset="utf-8" />
<style type="text/css">
body {
	background-image: url(images/4dh.jpg);
}
</style>

</head>
<body>
	
<div id="slider">
    <div id="tooplate_wrapper">
    	
        <div id="header">
            
				<h1><a href="home.html">GET JOBS.COM</a></h1>
            
        </div>
        
        <div id="tooplate_main">
        
        	<div id="menu">
                <ul class="navigation">
                    <li><a href="home.html" >Home<span class="ui_icon home"></span></a></li>
                    <li><a href="about.html">About Us<span class="ui_icon aboutus"></span></a></li>
                    <li><a href="services.html">Services<span class="ui_icon services"></span></a></li>
                    <li><a href="gallery.html">Gallery<span class="ui_icon gallery"></span></a></li>
                    <li><a href="#contact"class="selected">Contact Us<span  class="ui_icon contactus"></span></a></li>
                </ul>
            </div>
        
        	<div id="content">
                <div class="scroll">
                    <div class="scrollContainer">
                    
 <!-- end of home -->
                        
                       
                    
                        <div class="panel" id="contact">
                            <h1>Contact Information</h1>
                
                            <p>Have a <strong>querry</strong>?? Please contact us, just leave us a message.... we will be very happy to help you out. Any<strong> suggestions</strong> for improving our services are also welcomed.</p>
                            
                            <div class="cleaner_h10"></div>
                                                    
                            <div class="col_380 float_l">
                                <div id="contact_form">
                                    <form method="post" name="contact" action="">
	
										<label for="author">Name:</label> <input type="text" maxlength="40" id="author" class="input_field" name="name" />
										<div class="cleaner_h10"></div>
												
										<label for="email">Email:</label> <input type="text" maxlength="40" id="email" class="input_field" name="email" />
										<div class="cleaner_h10"></div>
					
										<label for="text">Message:</label> <textarea id="text" name="message" rows="0" cols="0" class="required"></textarea>
										<div class="cleaner_h10"></div>
					
										<input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
										
										<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
						
									</form>
                                </div>
                            </div>
                            
                            <div class="col_380 float_r"> </div>
                        </div>
                        
                    </div>
                </div> <!-- end of scroll -->
                
        	</div>
        </div> <!-- end of content -->
    
    </div> <!-- end of wrapper -->
   	<div id="footer">
		<div id="social_box">
			<a href="https://www.facebook.com/"><img src="images/facebook.png" alt="facebook" /></a>
			<a href="https://www.flickr.com"><img src="images/flickr.png" alt="flickr" /></a>
			<a href="https://www.myspace.com"><img src="images/myspace.png" alt="myspace" /></a>
			<a href="https://www.twitter.com"><img src="images/twitter.png" alt="twitter" /></a>
			<a href="https://www.youtube.com"><img src="images/youtube.png" alt="youtube" /></a>
        </div>
        
        
        <div id="footer_left">
        	Copyright ©  <a href="#">GET JOBS.COM</a><br />
            
        </div>
			
        <div class="cleaner"></div>
    </div> 
</div>

</body>
</html>