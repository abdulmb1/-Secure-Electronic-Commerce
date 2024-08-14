<?php
/*
* include files needed
*/
require_once 'PHPGangsta/GoogleAuthenticator.php';
require_once 'userprofile.php';
/*
* Get the data posted from index.php
*/
$name = $_POST["username"];
$password = $_POST["password"];
$otp = $_POST["otp"];
/*
* Define authenticator object
*/
$ga = new PHPGangsta_GoogleAuthenticator();
/*
* Check if username and password and secret are correct based on the userprofile.php
*/
if($name === $dummy_user['username'] && $password === $dummy_user['password']){
$checkResult = $ga->verifyCode($dummy_user['secret'], $otp, 2); // 2 = 2*30sec clock tolerance
if ($checkResult) {
echo 'Welcome to the webpage.';
} else {
echo 'Your OTP failed.';
}
}else{
echo "Username or password is wrong.";
}
?>