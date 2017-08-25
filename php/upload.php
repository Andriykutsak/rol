<?php

// A list of permitted file extensions
$allowed = array('png', 'jpg', 'gif','zip','css','html','js','json','mp3','mp4','otf','ttf','map','php','less');

if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){
$name=$_POST['name'];
$description=$_POST['description'];
$price=$_POST['price'];
echo $name.' and '.$description.' and '.$price;
	$extension = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);

	if(!in_array(strtolower($extension), $allowed)){
		echo '{"status":"error"}';
		exit;
	}

	if(move_uploaded_file($_FILES['upl']['tmp_name'], 'uploads/'.$_FILES['upl']['name'])){
		echo '{"status":"success"}';
		exit;
	}
}

echo '{"status":"error"}';
exit;