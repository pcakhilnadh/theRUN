<!DOCTYPE html>
<?php

 require 'connect.php';
require 'src/facebook.php';

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
		<link rel="shortcut icon" href="img/favicon.ico">
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png">

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

  


<?php
		
			
			
 
		//make sure you close the check if their online
		}}
 
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
                      $level=$row['level'];
 
		             echo $username;



                                                       
						}

					}}
 
				?>
   
					<img style="position:relative;" src='https://graph.facebook.com/<?php echo $usrnm;?>/picture'></h3></ul>
					</nav>
				  <h1> <b><center> Choose Your Arena </center></b></h1>
				</div>
			</header>

			<div role="main" class="main">

<div style="float:left"></div>
				<div class="unm" style="position:relative;padding-top:20px">
				</div>

				
</div>

	

</div>
</br></br></br></br></br></br></br></br></br>
			<footer>
					
				
						<div class="row">
							<div class="span1">
								<a href="#" class="logo">
									<img  src="img/logo.png">
								</a>
							</div>
							<div class="span7">
								<p>© Copyright 2013 by FoCES. All Rights Reserved.</p>
							</div>
						</div>
					
				
			</footer>
		

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
