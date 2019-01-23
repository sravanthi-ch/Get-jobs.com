
<?php
   include("config.php");
   
   session_start();
   $session=$_SESSION['login_user'];
   $req_cgpa=$_SESSION['btech'];
    $sql = "SELECT * FROM candidate";
      $result = mysqli_query($db,$sql);
    
	   
	 
  
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
        
        	<div id="content">

                        <div class="panel" id="home">
						<h2> Eligible Candidates</h2>
						<h4>name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp college &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp btech_cgpa &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp email</h4>
                                <?php 
									
								    while($row=mysqli_fetch_row($result))
									{
										if($row[5]>=$req_cgpa)
										{
										echo $row[3] ; echo "&nbsp &nbsp &nbsp&nbsp&nbsp";
										echo $row[4]; echo "&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
										echo $row[5]; echo "&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp";
										echo $row[10]; echo nl2br("\r\n");
										
										}
									}
								?>
                        </div> <!-- end of home -->
                        


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