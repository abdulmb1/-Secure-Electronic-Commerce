<?php
session_start();
require_once 'PHPGangsta/GoogleAuthenticator.php';
require_once 'userprofile.php'; // contains dummy user data

$ga = new PHPGangsta_GoogleAuthenticator();

$otp = $_POST['otp'] ?? '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the 2FA code is correct
    $checkResult = $ga->verifyCode($dummy_user['secret'], $otp, 2); // 2*30sec clock tolerance

    if ($checkResult) {
        header("Location: landingPage.php");
        exit(); // Stop further processing to prevent the form from showing again
    } else {
        $error = "Invalid 2FA code. Please try again."; // Set the error message
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <link rel="stylesheet" href="styles2FA.css">
    <div class="login-container">
        <img src="data:image/png;base64,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" alt="Logo">
        <h1>Two-factor authentication</h1>

        <?php if ($error): ?>
            <div class="error"><?php echo $error; ?></div>
        <?php endif; ?>

        <form id="2faForm" action="" method="post">
            <div class="input_box">
                <input type="text" name="otp" placeholder="Authentication code" required>
            </div>

            <button type="submit">Verify</button>
        </form>

        <div class="info-text">
            <i class="uil uil-mobile-android"></i> Open the two-factor authentication app on your device to view your authentication code and verify your identity.
        </div>
    </div>
</body>
</html>
