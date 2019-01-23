<?php
   include("config.php");
   
   session_start();
   $session=$_SESSION['login_user'];
    $sql = "SELECT * FROM candidate WHERE username = '$session'";
      $result = mysqli_query($db,$sql);
     $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	   
	 if($_SERVER["REQUEST_METHOD"] == "POST") {
	  
	    $myname = mysqli_real_escape_string($db,$_POST['name']);
      
	   $mycolg = mysqli_real_escape_string($db,$_POST['colg']); 
	   $mybtech = mysqli_real_escape_string($db,$_POST['btech']); 
	   $myinter = mysqli_real_escape_string($db,$_POST['inter']); 
	   $mytenth = mysqli_real_escape_string($db,$_POST['tenth']); 
	   $mydob = mysqli_real_escape_string($db,$_POST['dob']); 
	   $sql = "UPDATE candidate SET fullName='$myname',college='$mycolg',btech_cgpa='$mybtech',inter_cgpa='$myinter',tenth_cgpa='$mytenth',DOB='$mydob' WHERE username='$session'";
      $result = mysqli_query($db,$sql);
	  //seee uploading resume
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
                    <div class="scrollContainer" style="overflow: scroll; width:800px; height:400px;">
                    
 <!-- end of home -->
                        
                       
                    
                        <div class="panel" id="contact">
                            <h1>EDIT YOUR DATA</h1>
                            
                            <div class="cleaner_h10"></div>
                                                    
                            <div class="col_380 float_l">
                                <div id="contact_form">
                                    <form method="post" name="contact" action="">
	
										
						full_name:<input type="name" name="name" value="<?php echo $row['fullName']  ?>"/>
						<br><br>
						engeneering_clg:
						<input type="radio" name="colg"  value="IIT"/>IIT
						<input type="radio" name="colg" value="NIT"/>NIT
						<input type="radio" name="colg" value="IIIT"/>IIIT
						<input type="radio" name="colg" value="Other govt"/>other govt.
						<input type="radio" name="colg" value="deemed college"/>deemed collges
						
						<br><br>
						btech_cgpa:<input type="text" name="btech" value="<?php echo $row['btech_cgpa']  ?>"/>give out of 10<br><br>
						inter_percentage:<input type="text" name="inter" value="<?php echo $row['inter_cgpa']  ?>"/>give out of 100<br><br>
						10th_percentage:<input type="text" name="tenth" value="<?php echo $row['tenth_cgpa']  ?>"/>give out of 100<br><br>
						resume:<input type="file" name="file upload" accept="document"/><br><br>
						DOB:<input type="date" name="dob" value="<?php echo $row['DOB']  ?>"/>
						<br>
<br>
<br>

<br>

										<input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
										
										
						
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