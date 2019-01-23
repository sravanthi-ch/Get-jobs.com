<?php
   include("config.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
	   $myusername = mysqli_real_escape_string($db,$_POST['username']);
	    $myname = mysqli_real_escape_string($db,$_POST['name']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
	   $myid = mysqli_real_escape_string($db,$_POST['id_number']); 
	   $mycity = mysqli_real_escape_string($db,$_POST['city']); 
	  
	   $mydob = mysqli_real_escape_string($db,$_POST['dob']); 
	   $sql = "INSERT INTO employer (username,password,companyName,id_number,city,DOE) VALUES ('$myusername','$mypassword','$myname','$myid','$mycity','$dob')";
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
                    					<li><a href="services.html"class="selected">Services<span class="ui_icon services"></span></a></li>
                    <li><a href="gallery.html">Gallery<span class="ui_icon gallery"></span></a></li>
                    <li><a href="contact.html">Contact Us<span  class="ui_icon contactus"></span></a></li>
                </ul>
            </div>
        
        	<div id="content" >
                <div class="scroll">
                    <div class="scrollContainer" style="overflow: scroll; width:800px; height:410px;">
                    
 <!-- end of home -->
                        
                       
                    
                        <div class="panel" id="contact">
                            <h2>REGISTER YOUR COMPANY</h2>
                            
                            <div class="cleaner_h10"></div>
                                                    
                            <div class="col_380 float_l">
                                <div id="contact_form">
                                    <form method="post" name="contact" action="">
	
										
						company name:<input type="name" name="name"/>
						<br><br>
						
						Identification number:<input type="text" name="id_number"/> <br><br>
						Located city:<input type="text" name="city" /><br><br>
						Date of Establishment:<input type="date" name="dob"/>
						<br>
<br>
<br>
select a username for further purpose<br>
username:<input type=" text" name="username"/><br>
password:<input type="password" name="password"/> <br>minimum of 8 charecters
<br>

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