<?php 
session_start();
unset($_SESSION["id"]);  
setcookie('hash',time()-3600);
unset($_COOKIE['hash']);
header("Location: authorethation-block.php");
exit();
 ?>