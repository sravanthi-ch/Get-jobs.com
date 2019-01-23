<?php
   include("config.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {
	   
   
    //if(isset($_FILES['resume'])){
      $errors= array();
	   echo "hieeeeeeeeeeeeeeee";
      $file_name = $_FILES['resume']['name'];
      $file_size =$_FILES['resume']['size'];
      $file_tmp =$_FILES['resume']['tmp_name'];
      $file_type=$_FILES['resume']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['resume']['name'])));
	  $Filename=basename( $_FILES['resume']['name']);
      
      $extensions= array("txt","pdf","doc");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a PDF or Doc or TXT file."; echo "not allowed";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be at max 2 MB'; echo "not allowed2";
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   //}
   $myusername = mysqli_real_escape_string($db,$_POST['username']);
	    $myname = mysqli_real_escape_string($db,$_POST['name']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
	   $mycolg = mysqli_real_escape_string($db,$_POST['colg']); 
	   $mybtech = mysqli_real_escape_string($db,$_POST['btech']); 
	   $myinter = mysqli_real_escape_string($db,$_POST['inter']); 
	   $mytenth = mysqli_real_escape_string($db,$_POST['tenth']); 
	   $mydob = mysqli_real_escape_string($db,$_POST['dob']); 
	   	 // $Filename=basename( $_FILES['resume']['name']);
	   $sql = "INSERT INTO candidate (username,password,fullName,college,btech_cgpa,inter_cgpa,tenth_cgpa,DOB,resume) VALUES ('$myusername','$mypassword','$myname','$mycolg','$mybtech','$myinter','$mytenth','$mydob','$Filename')";
      $result = mysqli_query($db,$sql);
	  //seee uploading resume
	  // header("location: success.php");
	  echo "done uploading";
   }
   //header("location: success.php");
   
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
                    <li><a href="contact.html"class="selected">Contact Us<span  class="ui_icon contactus"></span></a></li>
                </ul>
            </div>
        
        	<div id="content" >
                <div class="scroll">
                    <div class="scrollContainer" style="overflow: scroll; width:800px; height:400px;">
                    
 <!-- end of home -->
                        
                       
                    
                        <div class="panel" id="contact">
                            <h1>REGISTER YOURSELF</h1>
                            
                            <div class="cleaner_h10"></div>
                                                    
                            <div class="col_380 float_l">
                                <div id="contact_form">
                                    <form method="POST"  action="" enctype="multipart/form-data">
	
										
						full_name:<input type="name" name="name"/>
						<br><br>
						engeneering_clg:
						<input type="radio" name="colg"  value="IIT"/>IIT
						<input type="radio" name="colg" value="NIT"/>NIT
						<input type="radio" name="colg" value="IIIT"/>IIIT
						<input type="radio" name="colg" value="Other govt"/>other govt.
						<input type="radio" name="colg" value="deemed college"/>deemed collges
						
						<br><br>
						btech_cgpa:<input type="text" name="btech"/>give out of 10<br><br>
						inter_percentage:<input type="text" name="inter" />give out of 100<br><br>
						10th_percentage:<input type="text" name="tenth"/>give out of 100<br><br>
						resume: <input type="file" name="resume" /><br><br>
						DOB:<input type="date" name="dob"/>
					
<br>
<br>
select a username for further purpose<br>
username:<input type=" text" name="username"/><br>
password:<input type="password" name="password"/> <br>minimum of 8 charecters
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