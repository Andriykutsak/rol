<?php 
if (!isset($_COOKIE['hash'])) {
	$hash=$_COOKIE['hash'];
require 'database.php';
echo"<h2 class='text-center'>Фейки доступні для покупки</h2>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Покупка Фейків</title>
	<style>
		td{
			border:  1px solid black;
			border-radius: 3px;
			padding: 5px 10px;
		}
		.button{
			padding: 10px 20px;
			border-radius: 3px;
			background-color: #6ef555;
			color: #fff;
		}
		.button a{
			font-family: tahoma;
			font-weight: bold;
			text-transform: uppercase;
			text-decoration: none;
			color: #fff;
			
		}

	</style>
</head>
<body>
	
</body>
</html>
<?php
$userData=mysqli_query($db,"SELECT * FROM `users` /*WHERE hash LIKE 'данні отримані з куків'*/");
function Str($value=""){
	$value=mysqli_fetch_assoc($value);
	return $value;
};
$userId=Str($userData);
$conQuery=mysqli_query($db,"SELECT * FROM `file_location`");

?>
<table>



	<?php 

if (mysqli_num_rows($userData)==0) {
	echo "<h1 class='text-center'> Сталася помилка під час виконання запиту, спробуйте пізніше</h1>";
}
	while ($res=mysqli_fetch_array($conQuery)) {
		echo"<tr>";
		echo "<td>".$res['id']."</td>";
		echo"<td>".$res['file-name']."</td>";
		echo"<td>".$res['file-description']."</td>";
		echo "<td>".$res['file-name']."</td>";
		echo "<td>".$res['price']."</td>";
		echo"<td> <div class='button'>"."<a href='".$res['file-location']."'>Переглянути</a></td>";
		echo"</tr>";

		
	}
	 ?>


</table>
	<?php
}
else{
	//header("location:authorethation-block.php");
}
 ?>