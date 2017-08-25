<?php 
$email=$_POST['email'];
$user_name=$_POST['user-name'];
$Password=$_POST['password'];
$SecPass=$_POST['check-password'];
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
 $SecPass=clean($SecPass);
if ($Password==$SecPass) {

$passwordHash=hash(md5, $Password);
$hash=hash(md5, $passwordHash);
$checkUserEmail=mysqli_query($db,"SELECT * FROM `users` WHERE email LIKE '$email'");

 if (mysqli_num_rows($checkUserEmail)>0) {
 	echo "Користувач з таким Email  вже існує перевірте коректність введених данних";
} 
else{
	
	$createUserRow=mysqli_query($db,("INSERT INTO `users` (id, user_name, email, password, hash) VALUES (NULL, '$user_name', '$email', '$passwordHash', '$hash')"));
	if ($createUserRow) {
		$hashQuery=mysqli_query($db,"SELECT `hash` FROM `users` WHERE email LIKE '$email'");
$hash=mysqli_fetch_assoc($hashQuery);

		echo"ви успішно зареєстровані";
		sleep(2);
		header('location:../index.php');
		setcookie('hash',$hash['hash'],time()+3600*76);
	}
	else{
		echo "помилка реєстрації сробуйте пізніше";
	}
}
}
else{
	echo "паролі не збігаються";
}


 

 ?>
