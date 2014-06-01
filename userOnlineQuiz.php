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
				  <h1> <b><center> Quiz Arena </center></b></h1>
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
 if(isset($_POST['submit'])){

           $quizans=$_POST['answer'];
           $qstno=$_POST['qstno'];
           $quizans=mysql_real_escape_string(trim($quizans));
           $qans= protect(stripslashes(stripcslashes($quizans)));
 	 		if (!$qans) {echo "<center style='color:red;'><b><strong>You need to fill an Answer</center></b></strong>";
			                                                               
 	 		
 	 		}
 	 		else
 	 		{
           $check= mysql_query("SELECT * FROM `quizans` WHERE  `id`='".$_SESSION['uid']."' ") ; 
					                               if($quizqstn = mysql_fetch_assoc($check)){ 
                                                                            $quizqstn[$qstno];}
           
            
          
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
             <?php
           }
           else
           {	mysql_query("UPDATE `quizans` SET `$qstno` = '".$qans."' WHERE `id` = '".$_SESSION['uid']."'");
       		    $check= mysql_query("SELECT * FROM `users` WHERE  `id`='".$_SESSION['uid']."' ") ; 
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
            }
           die();

 }
}}}
//header('location:mainchechk.php');


?>
				<div >
<section class="toggle">
								<input type="checkbox" id="q1"/>
								<label for="q1">Question 1</label>
								<p><b>In a certain code, “FRIEND” is written as “HUMJTK”, how is “CANDLE” written in that code?</b></p>
						     	
						    	</section>
						     	<form action="userOnlineQuiz.php" method="post"/>
							    <input type="hidden" name="qstno" value="q1"/>
								<input type="text" placeholder="Your Answer" name="answer">
                            	<input type="submit" value="Submit" name="submit"class="btn btn-danger"/>
                            	</form>

                          </div>
                            <div >
								<section class="toggle">
								<input type="checkbox" id="q1"/>
								<label for="q1">Question 2</label>
								<p><b>Find the missing term?</b><img src="images/qstn/quiz/q2.png"></p>
						     	
						    	</section>
						     	<form action="userOnlineQuiz.php" method="post"/>
							    <input type="hidden" name="qstno" value="q2"/>
								<input type="text" placeholder="Your Answer" name="answer">
                            	<input type="submit" value="Submit" name="submit"class="btn btn-danger"/>
                            	</form>

                            </div>
                            <div >
								<section class="toggle">
								<input type="checkbox" id="q1"/>
								<label for="q1">Question 3</label>
								<p><b>If P $ Q means P is the brother of Q; P # Q means P is the mother of Q; P * Q means P is the daughter of Q in A # B $ C * D, who is the father?</b></p>
						     	
						    	</section>
						     	<form action="userOnlineQuiz.php" method="post"/>
							    <input type="hidden" name="qstno" value="q3"/>
								<input type="text" placeholder="Your Answer" name="answer">
                            	<input type="submit" value="Submit" name="submit"class="btn btn-danger"/>
                            	</form>

                            </div>
                            <div >
								<section class="toggle">
								<input type="checkbox" id="q1"/>
								<label for="q1">Question 4</label>
								<p><b>In a certain office, 1/3 of the workers are women, ½ of the women are married and 1/3 of the married women have children. If 3/4 th of the men are married and2/3 rd of the married men have children, what part of workers are without children? </b></p>
						     	
						    	</section>
						     	<form action="userOnlineQuiz.php" method="post"/>
							    <input type="hidden" name="qstno" value="q4"/>
								<input type="text" placeholder="Your Answer" name="answer">
                            	<input type="submit" value="Submit" name="submit"class="btn btn-danger"/>
                            	</form>

                            </div>
                             <div >
								<section class="toggle">
								<input type="checkbox" id="q1"/>
								<label for="q1">Question 5</label>
								<p><b>Which figure is next in the series?  </b><img src="images/qstn/quiz/q5.png"></p>
						     	
						    	</section>
						     	<form action="userOnlineQuiz.php" method="post"/>
							    <input type="hidden" name="qstno" value="q5"/>
								<input type="text" placeholder="Your Answer" name="answer">
                            	<input type="submit" value="Submit" name="submit"class="btn btn-danger"/>
                            	</form>

                            </div>
                            <div >
								<section class="toggle">
								<input type="checkbox" id="q1"/>
								<label for="q1">Question 6</label>
								<p><b>A, P, R, X, S and Z are sitting in a row. S and z are in the centre. A and P are at the ends. R is sitting to the left of A. Who is to the right of P?  </b></p>
						     	
						    	</section>
						     	<form action="userOnlineQuiz.php" method="post"/>
							    <input type="hidden" name="qstno" value="q6"/>
								<input type="text" placeholder="Your Answer" name="answer">
                            	<input type="submit" value="Submit" name="submit"class="btn btn-danger"/>
                            	</form>

                            </div>
                             <div >
								<section class="toggle">
								<input type="checkbox" id="q1"/>
								<label for="q1">Question 7</label>
								<p><b>A cube is cut in two equal parts along a plane parallel to one of its faces. One piece is then colored red on the two larger faces and green on remaining. While the other is colored green on two smaller adjacent faces and red on the remaining. Each is then cut into 32 cubes of same size and mixed up. </b></p>
						     	
						    	</section>
						     	<form action="userOnlineQuiz.php" method="post"/>
							    <input type="hidden" name="qstno" value="q7"/>
								<input type="text" placeholder="Your Answer" name="answer">
                            	<input type="submit" value="Submit" name="submit"class="btn btn-danger"/>
                            	</form>

                            </div>
                            <div >
								<section class="toggle">
								<input type="checkbox" id="q1"/>
								<label for="q1">Question 8</label>
								<p><b> Which fig. belongs in neither group?</b><img src="images/qstn/quiz/q8.png"></p>
						     	
						    	</section>
						     	<form action="userOnlineQuiz.php" method="post"/>
							    <input type="hidden" name="qstno" value="q8"/>
								<input type="text" placeholder="Your Answer" name="answer">
                            	<input type="submit" value="Submit" name="submit"class="btn btn-danger"/>
                            	</form>

                            </div>
                            <div >
								<section class="toggle">
								<input type="checkbox" id="q1"/>
								<label for="q1">Question 9</label>
								<p><b> Which letter replaces the question mark '?' ?</b><img src="images/qstn/quiz/q9.png"></p>
						     	
						    	</section>
						     	<form action="userOnlineQuiz.php" method="post"/>
							    <input type="hidden" name="qstno" value="q9"/>
								<input type="text" placeholder="Your Answer" name="answer">
                            	<input type="submit" value="Submit" name="submit"class="btn btn-danger"/>
                            	</form>

                            </div>
                             <div >
								<section class="toggle">
								<input type="checkbox" id="q1"/>
								<label for="q1">Question 10</label>
								<p><b> A man was engaged on a job for 30 days on the condition that he would get a wage of Rs. 10 for the day he works, but he have to pay a fine of Rs. 2 for each day of his absence. If he gets Rs. 216 at the end, he was absent for work for ... days.</b></p>
						     	
						    	</section>
						     	<form action="userOnlineQuiz.php" method="post"/>
							    <input type="hidden" name="qstno" value="q10"/>
								<input type="text" placeholder="Your Answer" name="answer">
                            	<input type="submit" value="Submit" name="submit"class="btn btn-danger"/>
                            	</form>

                            </div>
                            <div >
								<section class="toggle">
								<input type="checkbox" id="q1"/>
								<label for="q1">Question 11</label>
								<p><b>A software engineer has the capability of thinking 100 lines of code in five minutes and can type 100 lines of code in 10 minutes. He takes a break for five minutes after every ten minutes. How many lines of codes will he complete typing after an hour?</b></p>
						     	
						    	</section>
						     	<form action="userOnlineQuiz.php" method="post"/>
							    <input type="hidden" name="qstno" value="q11"/>
								<input type="text" placeholder="Your Answer" name="answer">
                            	<input type="submit" value="Submit" name="submit"class="btn btn-danger"/>
                            	</form>

                            </div>
                            <div >
								<section class="toggle">
								<input type="checkbox" id="q1"/>
								<label for="q1">Question 12</label>
								<p><b>Diophantus passed one sixth of his life in childhood, one twelfth in youth, and one seventh more as a bachelor; five years after his marriage a son was born who died four years before his father at half his final age. How old is Diophantus?</b></p>
						     	
						    	</section>
						     	<form action="userOnlineQuiz.php" method="post"/>
							    <input type="hidden" name="qstno" value="q12"/>
								<input type="text" placeholder="Your Answer" name="answer">
                            	<input type="submit" value="Submit" name="submit"class="btn btn-danger"/>
                            	</form>

                            </div>

                            <div >
								<section class="toggle">
								<input type="checkbox" id="q1"/>
								<label for="q1">Question 13</label>
								<p><b>Eight friends Harsha, Fakis, Balaji, Eswar, Dhinesh, Chandra, Geetha, and Ahmed are sitting in a circle facing the center. Balaji is sitting between Geetha and Dhinesh. Harsha is third to the left of Balaji and second to the right of Ahmed. Chandra is sitting between Ahmed and Geetha and Balaji and Eshwar are not sitting opposite to each other. Who is third to the left of Dhinesh?</b></p>
						     	
						    	</section>
						     	<form action="userOnlineQuiz.php" method="post"/>
							    <input type="hidden" name="qstno" value="q13"/>
								<input type="text" placeholder="Your Answer" name="answer">
                            	<input type="submit" value="Submit" name="submit"class="btn btn-danger"/>
                            	</form>

                            </div>
                            <div >
								<section class="toggle">
								<input type="checkbox" id="q1"/>
								<label for="q1">Question 14</label>
								<p><b>A contractor agreeing to finish a work in 150 days, employed 75 men each working 8 hours daily. After 90 days, only 2/7 of the work was completed. Increasing the number of men by ________ each working now for 10 hours daily, the work can be completed in time</b></p>
						     	
						    	</section>
						     	<form action="userOnlineQuiz.php" method="post"/>
							    <input type="hidden" name="qstno" value="q14"/>
								<input type="text" placeholder="Your Answer" name="answer">
                            	<input type="submit" value="Submit" name="submit"class="btn btn-danger"/>
                            	</form>

                            </div>
                            <div >
								<section class="toggle">
								<input type="checkbox" id="q1"/>
								<label for="q1">Question 15</label>
								<p><b>Five farmers have 7, 9, 11, 13 and 14 apple trees, respectively in their orchards. Last year, each of them discovered that every tree in their own orchard bore exactly the same number of apples. Further, if the third farmer gives one apple to the first, and the fifth gives three to each of the second and the fourth, they would all have exactly the same number of apples. What were the yields per tree in the orchards of the third farmer?</b></p>
						     	
						    	</section>
						     	<form action="userOnlineQuiz.php" method="post"/>
							    <input type="hidden" name="qstno" value="q15"/>
								<input type="text" placeholder="Your Answer" name="answer">
                            	<input type="submit" value="Submit" name="submit"class="btn btn-danger"/>
                            	</form>

                            </div>
                            <div >
								<section class="toggle">
								<input type="checkbox" id="q1"/>
								<label for="q1">Question 16</label>
								<p><b>  If y=cos-1(cosx + 4sinx)/(17)1/2, then dy/dx = ?</b></p>
						     	
						    	</section>
						     	<form action="userOnlineQuiz.php" method="post"/>
							    <input type="hidden" name="qstno" value="q16"/>
								<input type="text" placeholder="Your Answer" name="answer">
                            	<input type="submit" value="Submit" name="submit"class="btn btn-danger"/>
                            	</form>

                            </div>
                             <div >
								<section class="toggle">
								<input type="checkbox" id="q1"/>
								<label for="q1">Question 17</label>
								<p><b>  If “YDIN =VAFK ”. and “x=BGLQ” find x? </b></p>
						     	
						    	</section>
						     	<form action="userOnlineQuiz.php" method="post"/>
							    <input type="hidden" name="qstno" value="q17"/>
								<input type="text" placeholder="Your Answer" name="answer">
                            	<input type="submit" value="Submit" name="submit"class="btn btn-danger"/>
                            	</form>

                            </div>
                            <div >
								<section class="toggle">
								<input type="checkbox" id="q1"/>
								<label for="q1">Question 18</label>
								<p><b> A landscaper estimates that landscaping a new park will take 1 person 48 hours. If 4 people work on the job and they each work 6-hour days, how many days are needed to complete the job?</b></p>
						     	
						    	</section>
						     	<form action="userOnlineQuiz.php" method="post"/>
							    <input type="hidden" name="qstno" value="q18"/>
								<input type="text" placeholder="Your Answer" name="answer">
                            	<input type="submit" value="Submit" name="submit"class="btn btn-danger"/>
                            	</form>

                            </div><div >
								<section class="toggle">
								<input type="checkbox" id="q1"/>
								<label for="q1">Question 19</label>
								<p><b>  There are 3 persons Sudhir, Arvind, and Gauri. Sudhir lent cars to Arvind and Gauri as many as they had already. After some time Arvind gave as many cars to Sudhir and Gauri as many as they have. After sometime Gauri did the same thing. At the end of this transaction each one of them had 24. Find the cars Gauri originally had.? </b></p>
						     	
						    	</section>
						     	<form action="userOnlineQuiz.php" method="post"/>
							    <input type="hidden" name="qstno" value="q19"/>
								<input type="text" placeholder="Your Answer" name="answer">
                            	<input type="submit" value="Submit" name="submit"class="btn btn-danger"/>
                            	</form>

                            </div><div >
								<section class="toggle">
								<input type="checkbox" id="q1"/>
								<label for="q1">Question 20</label>
								<p><b> A man bought a horse and a cart. If he sold the horse at 10 % loss and the cart at 20 % gain, he would not lose anything; but if he sold the horse at 5% loss and the cart at 5% gain, he would lose Rs. 10 in the bargain. The amount paid by him was Rs._______ for the horse  </b></p>
						     	
						    	</section>
						     	<form action="userOnlineQuiz.php" method="post"/>
							    <input type="hidden" name="qstno" value="q20"/>
								<input type="text" placeholder="Your Answer" name="answer">
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
					
			