<?php
session_start();
session_unset();
session_destroy();

// Redirect to login page
header("Location: login3.php");
exit();
?>
