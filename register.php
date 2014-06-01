<!DOCTYPE html>
<?php

 session_start();
require 'connect.php';
include "functions.php";
require 'src/facebook.php';
$facebook = new Facebook(array(
  'appId'  => '594426097255705',
  'secret' => '874c52194eb9e373b60327e3b4876270',
  
));


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
		<link rel="shortcut icon" href="img/favicon.ico">
		
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

	</head>
	<body>

		<div class="body">
		 <?php

		 		
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


		                                                       }
                                 else{ 


                                 	$check= mysql_query("SELECT * FROM `users` WHERE `id`='".$_SESSION['uid']."'") ; 
					                               while($c = mysql_fetch_assoc($check)){ 
                                                                            $college=$c['college'];
 																			$ftime=$c['online'];
                                                                             }
                        if($college)         
                          if($ftime==0)
                         	header('location:logout.php');
                         else
                         	header('location:userOnline.php');
                         
		                      if(isset($_POST['submit'])){
		                      									
                                                                  $college=protect($_POST['college']);
                                                                  $phone=protect($_POST['phone']);
			                                          if(!$phone || !$college){
				                                                           echo "<center>You need to fill in all of the required filds!</center>";
			                                                                  }
                                                                  else{
                                                                  	 $res2 = mysql_query("INSERT INTO `codeans` (`id`) VALUES('".$id."')");
       																 $res2 = mysql_query("INSERT INTO `designans` (`id`) VALUES('".$id."')");
      																  $res2 = mysql_query("INSERT INTO `quizans` (`id`) VALUES('".$id."')");

				                                       mysql_query("UPDATE `users` SET `college` = '".$college."',`phonenumber` = '".$phone."',`online` = '1' WHERE `id` = '".$_SESSION['uid']."'");
				                                       $_SESSION['expire']=time()+(15*60);
                                                                       
  $message= "Whoo...I have registered succssfully for #theRUN Do you want to chase me ??  http://foces.org #foces ";
                                   $a = array(
	                                      'access_token' => $_SESSION['access_token'],
                                              'message' => $message,
                                              'name' => 'theRUN | FoCES ',
                                              'caption' => "theRUN",
                                              'link' => 'Design Code n Quiz',
                                              'description' => 'Cash prize worth ₹ 1K Why wait ? Start the chase....',
                                              'picture' => 'http://www.foces.org/img/logo.png',
                                              'actions' => array(
                                                                 array(
                                                                       'name' => 'Get Search',
                                                                       'link' => 'http://www.google.com'
                                                                       )
                                                                 )
                                              );
                                   $facebook->api('/me/feed/', 'post', $a);
				                                       header('location:userOnline.php');
			                                              }
			                                          }
			                                         }
			                          
            
		?>
			<header>
				<div class="container">
					<h1 class="logo">
						<a href="index.php">
							<img  src="img/logo.png">
						</a>
					</h1>
	
					
					<nav>
						<ul class="nav nav-pills nav-main" id="mainMenu">
							<li >
								<a  href="index.php">
									Home
									
								</a>
								
							</li>
							<li>
								<a href="about-us.html">Rules</a>
							</li>
							
						</ul>
					</nav>
					<h1> <b><center> Create Racer Profile </center></b></h1>
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
			<div >
<center>
			<form action="register.php" method="post">
			<div >
 

				<table  cellspacing="0" border="0">
                                         <tr>
						<td><b></br>Class :</b></td>
						<td></br><input type="text" name="college" size="25"/></td>
					</tr>
                                                <td><b></br>Phone: </b></td>
						<td></br><input type="tel" name="phone" size="10"/></td>
					</tr>

					<tr>
						<td colspan="2" align="center"><input type="submit" name="submit" class="btn btn-inverse" value="Start Racing " /></td>
						
					</tr>
					
				</table>
		
			</form>
		</center>
			</div>
			</br></br></br></br></br></br></br></br></br></br></br></br></br>
		</div>

			<div role="main" class="main">
				<div class="footer-copyright">
					<div class="container">
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
					</div>
				</div>
			</footer>
		</div>

		<!-- Libs -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="vendor/jquery.js"><\/script>')</script>
		<script src="vendor/jquery.easing.js"></script>
		<script src="vendor/jquery.cookie.js"></script>
		<!-- <script src="master/style-switcher/style.switcher.js"></script> -->
		<script src="vendor/bootstrap.js"></script>
		<script src="vendor/selectnav.js"></script>
		<script src="vendor/twitterjs/twitter.js"></script>
		<script src="vendor/flexslider/jquery.flexslider.js"></script>
		<script src="vendor/jflickrfeed/jflickrfeed.js"></script>
		<script src="vendor/fancybox/jquery.fancybox.js"></script>
		<script src="vendor/jquery.validate.js"></script>

		<script src="js/plugins.js"></script>

		<!-- Page Scripts -->

		<!-- Theme Initializer -->
		<script src="js/theme.js"></script>

		<!-- Custom JS -->
		<script src="js/custom.js"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
		<!--
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-XXXXX-X']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		-->
	</body>
</html>
