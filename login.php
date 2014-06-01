<?php

 require 'connect.php';
require 'src/facebook.php';
//include_once 'time.php';
require 'time.php';
$facebook = new Facebook(array(
  'appId'  => '594426097255705',
  'secret' => '874c52194eb9e373b60327e3b4876270',
  
));

$user = $facebook->getUser();
$access_token = $facebook->getAccessToken();
$_SESSION['access_token'] =$access_token;
$_SESSION['uid'] = $user;
$_session['timeout']=time();
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
  $logoutUrl = $facebook->destroySession();
  //$logoutUrl = $facebook->getLogoutUrl(array( 'next' => ($fbconfig['baseurl'].'logout.php') ));
} else {
  $loginUrl = $facebook->getLoginUrl(array(
    'scope' => 'email,publish_actions'));

}



if ($_SESSION['uid']) {
               
        $id = $user_profile['id'];
		$email =$user_profile['email'];
		$name =$user_profile['name
		'];
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
  	header('location:userOnline.php');
                 
                
  }						
						
}

?>
	 
