<?php 
$email=$_POST['email'];
$Password=$_POST['password'];
require 'database.php';

function clean($value=""){
$value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);
    
    return $value;
 }
 $email=clean($email);
 $user_name=clean($user_name);
 $Password=clean($Password);
$passwordHash=hash(md5, $Password);
$hashQuery=mysqli_query($db,"SELECT `hash` FROM `users` WHERE email LIKE '$email'");
$hash=mysqli_fetch_assoc($hashQuery);
$hash=$hash['hash'];
 $checkUserEmail=mysqli_query($db,"SELECT * FROM `users` WHERE email LIKE '$email'");
 $checkUserPassword=mysqli_query($db,"SELECT * FROM `users` WHERE password LIKE '$passwordHash'");

 if ($email=='admin'AND $Password=='admin') {
 	setcookie('hash','admin',time()+3600*76);
 	//header("location:admin.php");
 }
 if (mysqli_num_rows($checkUserEmail)<1) {
 	echo "Користувач з таким Email  не існує перевірте коректність введених данних";
 }
 else if(mysqli_num_rows($checkUserPassword)<1){
 	echo "Невірно ведений пароль";
 }
else if(mysqli_num_rows($checkUserEmail)==1 && mysqli_num_rows($checkUserPassword)==1){
	
	echo "зачекайте декілька секунд";
	setcookie('hash', $hash, time()+3600*76);
		header("location:../index.php");
		header('Set-cookie: hash= $hash');


}


 ?>
