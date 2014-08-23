<!DOCTYPE html>

<?php
session_start();
 require 'connect.php';
require 'src/facebook.php';

//error_reporting(0);


$facebook = new Facebook(array(
  'appId'  => '###############',
  'secret' => '###############',
  
));

$user = $facebook->getUser();
$access_token = $facebook->getAccessToken();
$_SESSION['access_token'] =$access_token;
//$_SESSION['uid'] = $user;
$_SESSION['uid'] = 655338562;
$_SESSION['expire'] =time();
if ($user) {
  try {
         $user_profile = $facebook->api('/me');

  } catch (FacebookApiException $e) {

    error_log($e);
    $user = null;
  }
}

if ($user) {
//$logoutUrl = $facebook->getLogoutUrl(array( 'next' =>'http://http://127.0.0.1/facebook-php-sdk-master/logout.php','access_token'=>$facebook->getAccessToken()));
 // $logoutUrl = $facebook->destroySession();
  //$logoutUrl = $facebook->getLogoutUrl(array( 'next' => ($fbconfig['baseurl'].'logout.php') ));
} else {
  $loginUrl = $facebook->getLoginUrl(array(
    'scope' => 'email,publish_actions'));

}

if($_SESSION['uid'])
{


	    $id = $user_profile['id'];
		$email =$user_profile['email'];
		$name =$user_profile['name'];
		$usrnm=$user_profile['username'];



               
      
		$res2 = mysql_query("INSERT INTO `users` (`id`, `name`, `email`,`username`) VALUES('".$id."','".$name."','".$email."','".$usrnm."')");
	     $ft = mysql_query("SELECT * FROM `users` WHERE `id`='".$id."'") ; 
	     if($r = mysql_fetch_assoc($ft)){ 
	            $ftime=$r['online'];
	            $registered=$r['college'];
            }


 if(!$registered){
     
     
    // mysql_query("UPDATE `users` SET `online` = '1' WHERE `id` = '".$user."'"); 
		        header('location:register.php');
     
     }
     else{

  	mysql_query("UPDATE `users` SET `online` = '1' WHERE `id` = '".$_SESSION['uid']."'");
	$_SESSION['expire'] =time()+(15*60);

  	header('location:userOnline.php');
                 
                
  }						
						
}
	 

/* $message= "--- test app FoCES ---message";
                                   $a = array(
	                                      'access_token' => $_SESSION['access_token'],
                                              'message' => $message,
                                              'name' => 'FoCES | Site Launch name ',
                                              'caption' => "http://foces.org ......caption",
                                              'link' => 'http://foces.org',
                                              'description' => 'this is a description',
                                              'picture' => 'http://www.foces.org/sitef/img/logo.png',
                                              'actions' => array(
                                                                 array(
                                                                       'name' => 'Get Search',
                                                                       'link' => 'http://www.google.com'
                                                                       )
                                                                 )
                                              );
                                   $facebook->api('/me/feed/', 'post', $a);
 */


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
			<header>
				<div class="container">
					<h1 class="logo">
						
					Start the chase with <a href="index.html"><img alt="Porto" src="img/logo.png"></a>
					</h1>
					
					<nav>
						<ul class="nav nav-pills nav-main" id="mainMenu">
							
							<li>
								<a href="rules.php">Rules</a>
							</li>
							<li>
								<a href="crew.html">Crew</a>
							</li>
							
						</ul>
					</nav>
					
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
 <div style="margin:50px 10px 10px 350px ;">
         <p style="color:orange;font-size:20px"> Are you playing it for the FIRST TIME ... ?? Read our <a href="rules.php">RULES</a></p>
          <p style="color:white;font-size:22px"><b> Racer Must allow all APP Permissions !</b></p>
          <p style="color:orange;font-size:20px"> <a href="http://foces.org"> FoCES</a> proudly presents online Gaming....</br>There are 3 Arenas n different levels in it, Each level carries SCORE </br>
           Racer with maximum mark n finishing the race is the Winner !</p>
           <p style="color:white;font-size:20px">  Cash prize worth ₹1 k </b></p>
         </div>
         <center style=" color:cyan;font-size:20px"> Why wait ...? start the chase... </center>
				
						
					
				</br></br><a  href="<?php echo $loginUrl; ?>" > <img id="ready"src="images/img.png"></a>
      
					<center><div><h1 style="color:red"><?php $result=mysql_query("SELECT COUNT(*) AS total FROM users"); $count=mysql_fetch_assoc($result); echo $count['total']; ?> RaCERzz</h1></div></center>
					
			</div>

			<footer>
				
				<div class="footer-copyright">
					<div class="container">
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
