<?php require 'config.php';  ?>
<?php
ob_start();
if (isset($_SESSION['user_name'])) {
session_destroy();
header("location:login-user.php");
  
}

else{
    header("location:".BURL);
}


?>