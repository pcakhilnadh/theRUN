<!DOCTYPE html>
<?php

 require 'connect.php';
require 'src/facebook.php';
include "functions.php";

$facebook = new Facebook(array(
  'appId'  => '594426097255705',
  'secret' => '874c52194eb9e373b60327e3b4876270',
  
));
 
 if(time()>$_SESSION['expire'])
 	header('location:logout.php');
 $_SESSION['expire']=$_SESSION['expire']+120;
?>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<title>theRUN</title>

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Libs CSS -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/fonts/font-awesome/css/font-awesome.css">
		<link rel="stylesheet" href="vendor/flexslider/flexslider.css" media="screen" />
		<link rel="stylesheet" href="vendor/fancybox/jquery.fancybox.css" media="screen" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">

		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Skin -->
		<link rel="stylesheet" href="css/skins/blue.css">

		<!-- Responsive CSS -->
		<link rel="stylesheet" href="css/bootstrap-responsive.css" />
		<link rel="stylesheet" href="css/theme-responsive.css" />

		<!-- Favicons -->
		<link rel="shortcut icon" href="img/favicon.png">
		
		<!-- Head Libs -->
		<script src="vendor/modernizr.js"></script>

		<!--[if IE]>
			<link rel="stylesheet" href="css/ie.css">
		<![endif]-->

		<!--[if lte IE 8]>
			<script src="vendor/respond.js"></script>
		<![endif]-->

		<!-- Facebook OpenGraph Tags - Go to http://developers.facebook.com/ for more information.
		<meta property="og:title" content="Porto Website Template."/>
		<meta property="og:type" content="website"/>
		<meta property="og:url" content="http://www.crivos.com/themes/porto"/>
		<meta property="og:image" content="http://www.crivos.com/themes/porto/"/>
		<meta property="og:site_name" content="Porto"/>
		<meta property="fb:app_id" content=""/>
		<meta property="og:description" content="Porto - Responsive HTML5 Template"/>
		-->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
	<script type="text/javascript" src="progressbar.js"></script>

	<link rel="stylesheet" type="text/css" href="progressbar.css">
	<link rel="stylesheet" type="text/css" href="skins/jquery-ui-like/progressbar.css">

	</head>
	<body>

		<div class="body">
				<?php
 
		//if the login session does not exist therefore meaning the user is not logged in
		
		//if the login session does not exist therefore meaning the user is not logged in
		if((strcmp($_SESSION['uid'],"") == 0)||(strcmp($_SESSION['uid'],"0") == 0))
                                  {
	//display and error message
		mysql_query("UPDATE `users` SET `online` = '0' WHERE `id` = '".$_SESSION['uid']."'");
            $_SESSION['uid']="";                 
			session_destroy();

			echo "<center>You need to be logged in to user this feature!</center>";
print "<script>";
      print " self.location='index.php'";
          print "</script>";	
		}else{  $check= mysql_query("SELECT * FROM `users` WHERE `id`='".$_SESSION['uid']."'") ; 
					                               while($c = mysql_fetch_assoc($check)){ 
                                                                            $college=$c['college'];
 $ftime=$c['online'];
                                                                             }
                          if($ftime==0)
                         	header('location:logout.php');
                         elseif(!$college)
                             {         header('location:register.php');
                                  }
                         else{
			//otherwise continue the page
 
			//this is out update script which should be used in each page to update the users online time
			?>
			<div id="borde">
				<table cellpadding="2" cellspacing="0" border="0" width="100%">
					<tr>
						<td>
						<?php
 
						//select all rows where there online time is more than the current time
						$res = mysql_query("SELECT * FROM `users` WHERE `id` = '".$_SESSION['uid']."'");
 
						//loop for each row
						while($row = mysql_fetch_assoc($res)){
							//echo  each username found to be online with a dash to split them
							$username=$row['name'];
							$usrnm=$row['username'];
							?>
 
     <div id="cg">	                                             
         </table>
     </div>

 </div>

   </div>

  



			<header>
				<div class="container">
					<h1 class="logo">
						<a href="index.php">
							<img  src="img/logo.png">
						</a>
					</h1>
					
					<nav>
						<ul class="nav nav-pills nav-main" id="mainMenu">
							<li class="dropdown">
								<a  href="userOnline.php">
									Home
									
								</a>
								
							</li>
							<li>
								<a href="rules.php">Rules</a>
							</li>
							<li><a href="memberlist.php">Position</a></li>
					<li ><a href="logout.php">Logout</a></li>
					<h3 style="padding-left:10px ;color:orange">RACER :
				<?php
                      
 
		             echo $username;



                                                       
						}
 
				?>
   
					<img style="position:relative;" src='https://graph.facebook.com/<?php echo $usrnm;?>/picture'></h3></ul>
					</nav>
				  <h1> <b><center> Design Arena </center></b></h1>
				</div>
				<div class="social-icons" style="float:right;display:inline">
				For clues n query 
						<ul class="social-icons">
							<li class="facebook"><a href="http://www.facebook.com/cecfoces" target="_blank" title="Facebook">Facebook</a></li>
							<li class="twitter"><a href="http://www.twitter.com/cecfoces" target="_blank" title="Twitter">Twitter</a></li>
							<li class="linkedin"><a href="http://in.linkedin.com/pub/cec-foces/78/a4/152/" target="_blank" title="Linkedin">Linkedin</a></li>
						</ul>
					</div>
			</header>

			<div role="main" class="main">

<div style="float:left"></div>
				<div class="unm" style="position:relative;padding-top:20px">
				</div>

				
</div>
<?php
// answer enters to db
 			
        if(isset($_POST['submit']))
		 {	if(!isset($_FILES['dp']) || $_FILES['dp']['error']== 1)
			   echo "<center style='color:red;'><b><strong>You need to select a image in .png format</center></b></strong>";
			else
	       {
			 $filename=$_FILES['dp']['name'];
 			  $qstno=$_POST['qstno'];
 			  $maxsize=1049000; // 1 mb maximum size 1048567
  				
  				
 			  
			  $extension=substr($filename, strpos($filename,'.')+1);


				$check= mysql_query("SELECT * FROM `designans` WHERE  `id`='".$_SESSION['uid']."' ") ; 
					                               if($quizqstn = mysql_fetch_assoc($check)){ 
                                                                            $quizqstn[$qstno];}
           
            if($_FILES['dp']['size']>$maxsize)
            	{echo "<center style='color:red;'><b><strong>Your image is more than 1 MB</center></b></strong>";
            		
            	}
          
           if(!$quizqstn[$qstno]==NULL)
           {?>

       		 <div style='color:orange'><center> You have already attempted this Level.....!!</br>No matter How long You spent...!</br> RACE wisely...! </br>
       		 <center>
       		 	<img src="images/noreset.jpg">
 				</div>
       		 	<center><span style="color:white"><strong> There are NO RESETS....!!</b></strong></span></center>
       		 </center>
       		 <a href="userOnline.php">
       		 <span style="float:right;display:inline;"><img src="images/playon.png"></span>
       		 </a>
             <?php die();
           }
           else
           {
           	  $currlocation=$_FILES['dp']['tmp_name'];
			  $targetlocation="images/design/" . $_FILES['dp']['name'];
			  if(file_exists($targetlocation))
				{
					echo "<center style='color:red;'><b><strong>Image already exists.</center></b></strong>";
				}
			  elseif($extension!='png')
			  {
			  	echo "<center style='color:red;'><b><strong>Image is not in .png format.</center></b></strong>";
			  }
				
           
         else {
 	 		
           move_uploaded_file($currlocation,$targetlocation);
            
          	mysql_query("UPDATE `designans` SET `$qstno` = '".$targetlocation."' WHERE `id` = '".$_SESSION['uid']."'");
       		    
			    	echo "<div style='color:orange'><center><b><strong>  You Have Earned New Xperience.</br>No matter How long You spent...!</br> RACE wisely...! </b></strong></div>";
           	    $check= mysql_query("SELECT * FROM `users` WHERE  `id`='".$_SESSION['uid']."' ") ; 
			    if($level = mysql_fetch_assoc($check))
				$level['level'];
			    $level=$level['level']+1;

           	?>
           <center>
           <img src="images/xp.png">
           <div style="width:200px">
           <div id="progressBar" class="jquery-ui-like"><div></div></div>
       		  <?php echo intval(($level/48)*100).'% completed'; ?>
           </center>
           <a href="userOnline.php">
           <span style="float:right;display:inline;"><img src="images/nextlevel.png"></span></div>
           </a>
			<script>
			progressBar((<?php echo $level ?>/48)*100, $('#progressBar'));
			</script>
           
           <?php
			    mysql_query("UPDATE `users` SET `level` = '".$level."'WHERE `id` = '".$_SESSION['uid']."'");
				
    			  $message= "Pheww...I have earned a new Xperienz in #theRUN Do you want to chase me ??  http://foces.org #foces ";
                                   $a = array(
	                                      'access_token' => $_SESSION['access_token'],
                                              'message' => $message,
                                              'name' => 'theRUN | FoCES ',
                                              'caption' => "theRUN",
                                              'link' => 'Code Design n Quiz',
                                              'description' => 'Cash prize worth ₹ 1K Why wait ? Start the chase....!',
                                              'picture' => 'http://www.foces.org/img/logo.png',
                                              'actions' => array(
                                                                 array(
                                                                       'name' => 'Get Search',
                                                                       'link' => 'http://www.google.com'
                                                                       )
                                                                 )
                                              );
                                   $facebook->api('/me/feed/', 'post', $a);
            
             die();
            }
           

 }
}
}
//echo "<center style='color:red;'><b><strong>Must select a Image in .png format .</center></b></strong>";
}
}
//header('location:mainchechk.php');


?>
							<div >
								<section class="toggle">
								<input type="checkbox" id="q1"/>
								<label for="q1">Question 1</label>
								<p> Design a poster for FoCES site launch ?
								</br>conditions : 
								</br>1: include foces logo
								</br>2: importance of this site
								</br>3: description of event in 1 word
								</p>
						     	
						    	</section>
						     	<form action="userOnlineDesign.php" method="post" enctype="multipart/form-data"/>
							    <input type="hidden" name="qstno" value="q1"/>
								<input type="file" name="dp"/>
                            	<input type="submit" value="Submit" name="submit"class="btn btn-danger"/>
                            	</form>

                          </div>
                          <div >
								<section class="toggle">
								<input type="checkbox" id="q1"/>
								<label for="q1">Question 2</label>
								<p> Design a unique fb cover pic  regarding the publicity of FoCES web site?
								</br>conditions : 
								</br>1: include foces logo
								</br>2: attractive so that every one will choose it as cover pic
								</br>3: include site url http://foces.org
								</p>
						     	
						    	</section>
						     	<form action="userOnlineDesign.php" method="post" enctype="multipart/form-data"/>
							    <input type="hidden" name="qstno" value="q2"/>
								<input type="file" name="dp"/>
                            	<input type="submit" value="Submit" name="submit"class="btn btn-danger"/>
                            	</form>

                          </div>
                          <div >
								<section class="toggle">
								<input type="checkbox" id="q1"/>
								<label for="q1">Question 3</label>
								<p> We are decided to give the name “theRUN “ to the our online competition event related to site launch .design a poster for theRUN
								</br>conditions : 
								</br>1: include foces logo
								</br>2: highlight  theme theRUN
								</br>3: invite every one n highlight prize money
								</p>
						     	
						    	</section>
						     	<form action="userOnlineDesign.php" method="post" enctype="multipart/form-data"/>
							    <input type="hidden" name="qstno" value="q3"/>
								<input type="file" name="dp"/>
                            	<input type="submit" value="Submit" name="submit"class="btn btn-danger"/>
                            	</form>

                          </div>
                          <div >
								<section class="toggle">
								<input type="checkbox" id="q1"/>
								<label for="q1">Question 4</label>
								<p> Design a logo for 'CAMPION' , Campion is the inter college football festival conducted by CEC every year
								</br>conditions : 
								</br>1: include college logo
								</br>2: invite everyone
								</br>3: should be attractive
								</p>
						     	
						    	</section>
						     	<form action="userOnlineDesign.php" method="post" enctype="multipart/form-data"/>
							    <input type="hidden" name="qstno" value="q4"/>
								<input type="file" name="dp"/>
                            	<input type="submit" value="Submit" name="submit"class="btn btn-danger"/>
                            	</form>

                          </div>
                          <div >
								<section class="toggle">
								<input type="checkbox" id="q1"/>
								<label for="q1">Question 5</label>
								<p> Design a Poster for 'CAMPION' , Campion is the inter college football festival conducted by CEC every year
								</br>conditions : 
								</br>1: include college logo n name
								</br>2: invite everyone
								</br>3: should be attractive
								</p>
						     	
						    	</section>
						     	<form action="userOnlineDesign.php" method="post" enctype="multipart/form-data"/>
							    <input type="hidden" name="qstno" value="q5"/>
								<input type="file" name="dp"/>
                            	<input type="submit" value="Submit" name="submit"class="btn btn-danger"/>
                            	</form>

                          </div>
                          <div >
								<section class="toggle">
								<input type="checkbox" id="q1"/>
								<label for="q1">Question 6</label>
								<p> Design a Poster for 'SUMMIT' , Summit is the tech fest conducted by CEC
								</br>conditions : 
								</br>1: include logo of SUMMIT n College
								</br>2: invite everyone
								</br>3: include a tendative date.
								</p>
						     	
						     	
						    	</section>
						     	<form action="userOnlineDesign.php" method="post" enctype="multipart/form-data"/>
							    <input type="hidden" name="qstno" value="q6"/>
								<input type="file" name="dp"/>
                            	<input type="submit" value="Submit" name="submit"class="btn btn-danger"/>
                            	</form>

                          </div>
                          <div >
								<section class="toggle">
								<input type="checkbox" id="q1"/>
								<label for="q1">Question 7</label>
								<p> Design a unique fb cover pic  for  ' theRUN '?
								</br>conditions : 
								</br>1: include foces logo
								</br>2: highlight the prize money.
								</br>3: include site url http://foces.org
								</p>
						     	
						    	</section>
						     	<form action="userOnlineDesign.php" method="post" enctype="multipart/form-data"/>
							    <input type="hidden" name="qstno" value="q7"/>
								<input type="file" name="dp"/>
                            	<input type="submit" value="Submit" name="submit"class="btn btn-danger"/>
                            	</form>

                          </div>
                            
                         




			<footer>
					
				
						<div class="row">
							<div class="span1">
								<a href="index.php" class="logo">
									<img src="img/logo.png">
								</a>
								<a href="http://foces.org">
									<img alt="Porto Website Template" src="img/logo-footer.png">
								</a>
							</div>
							<div class="span7">
								<p>© Copyright 2013 by FoCES. All Rights Reserved.</p>
							</div>
						</div>
					
			