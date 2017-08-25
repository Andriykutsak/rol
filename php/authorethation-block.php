<?php 
session_start();
if (!isset($_COOKIE['hash'])) {
	//header("location:../index.php");
}
else{?>
<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Авторизація</title>
			<style>
			input{
				padding: 10px 20px;
				border:  2px solid #0d4e0d; 
				border-radius: 3px;
				display: block;
				margin: 20px auto;
			}
			input[type="submit"]{
				border-radius: 20px;
				border:  none;
				background-color: #efd30e;
			}
			.wrapper{
				margin-top: 60px;
			}
			.tabs{
				max-width: 210px;
				margin: 0 auto;
			}
			.tab{
				margin: 0 auto;
				background-color: #efd30e;
				max-width: 300px;
				font-size: 1.2em;
				padding: 10px 20px;
			}
			.tab.active{
				border-bottom: 3px solid red;  
			}

			</style>
		</head>
		<body>
			
		<div class="wrapper">
    <div class="tabs">
        <span class="tab">Реєстрація</span>
        <span class="tab">Вхід</span>       
    </div>
    <div class="tab_content">
        <div class="tab_item">
        	<form action="signUp.php" id="reg" method="POST">
						<input type="text" name="email" placeholder="Ведіть Email" required>
						<input type="text" name="user-name" placeholder="Ведіть ваше ім`я" required>
						<input type="password" name="password" placeholder="Ведіть ваш пароль" required>
						<input type="password" name="check-password" placeholder="Повторіть ваш пароль" required>
						<input type="submit" value="Зареєструватися">
					</form>

        </div>
        <div class="tab_item">
        	<form action="login.php" id="login" method="POST">
						<input type="text" name="email" placeholder="Ваш email" required>
						<input type="password" name="password" placeholder="Ваш пароль" required>
						<input type="submit" value="Війти">
					</form>
        </div>
        
    </div>
</div>
	<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script>
	$(".tab_item").not(":first").hide();
$(".wrapper .tab").click(function() {
	$(".wrapper .tab").removeClass("active").eq($(this).index()).addClass("active");
	$(".tab_item").hide().eq($(this).index()).fadeIn()
}).eq(0).addClass("active");
</script>






		</body>
		</html>
		<?php
		}
		?>
		
