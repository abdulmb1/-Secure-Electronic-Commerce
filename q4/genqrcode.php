<?php
require_once 'PHPGangsta/GoogleAuthenticator.php';

$ga = new PHPGangsta_GoogleAuthenticator();
$secret = $ga->createSecret();
echo "<div>Secret is: ".$secret."</div>";

$qrCodeUrl = $ga->getQRCodeGoogleUrl('Blog', $secret);
echo '<img src="'.$qrCodeUrl.'" />';

$oneCode = $ga->getCode($secret);
echo "<div>Checking Code is: ".$oneCode."</div>";

$checkResult = $ga->verifyCode($secret, $oneCode, 2); 
if ($checkResult) {
echo 'OK';
} else {
echo 'FAILED';
}
?>