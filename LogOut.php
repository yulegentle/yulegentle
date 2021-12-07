<?php
session_start();
unset($_SESSION['ONESMUS']);
session_destroy();

header("Location: Adminlogin.php");
exit;
?>