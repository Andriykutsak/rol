<?php
if (!isset($_COOKIE['hash'])) {
  $hash=$_COOKIE['hash'];
  $query=mysqli_query($db,"SELECT * FROM `users` WHERE hash LIKE '$hash'");
  if (mysqli_num_rows($query)==0) {
    //header("location: authorethation-block.php");
  }
}
else{
 // header('location:authorethation-block.php');
}


?>
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8"/>
    <title>Mini Ajax File Upload Form</title>

    <!-- Google web fonts -->
    <link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet' />

    <!-- The main CSS file -->
    <link href="../css/styles.css" rel="stylesheet" />
  </head>

  <body>
  <p class="text-center">на сайті зареєстровано користувачів</p>


<form action="desc.php" method="POST" class="desc">
  <input type="text" placeholder="Ціна" name="price">
    <input type="text" placeholder="Опис" name="description">
    <input type="text" placeholder="Імя" name="name">
    <input type="submit" value="send">
  </form>
    <form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
    
      <div id="drop">
        Drop Here

        <a>Browse</a>
        <input type="file" name="upl" multiple />
      </div>

      <ul>
        <!-- The file uploads will be shown here -->
      </ul>

    </form>

    
        
    <!-- JavaScript Includes -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="../js/jquery.knob.js"></script>

    <!-- jQuery File Upload Dependencies -->
    <script src="../js/jquery.ui.widget.js"></script>
    <script src="../js/jquery.iframe-transport.js"></script>
    <script src="../js/jquery.fileupload.js"></script>
    
    <!-- Our main JS file -->
    <script src="../js/script.js"></script>

  </body>
</html>