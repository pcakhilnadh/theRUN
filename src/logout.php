
<?php


require 'src/facebook.php';

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
  'appId'  => '161332474054971',
  'secret' => 'd89a1fa60725c8500c34cc200dc3c64e',
));

setcookie('fbs_'.$facebook->getAppId(), '', time()-100, '/', '127.0.0.1');

session_destroy();
header('Location: http://127.0.0.1/facebook-php-sdk-master/index.php');
?>