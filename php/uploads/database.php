<?php 
$db=mysqli_connect("localhost","root","","common");
if (!$db) {
		echo mysqli_err_no($db);
	};
 ?>