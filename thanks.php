<?php
    $reviews = array();
    $ratings = array();
?>

<!doctype html>
<html lang="en">
  <head>
    <link rel="icon" href="images/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <title>Tynker</title>
  </head>
  <body>
    <center>
      <nav> 
          <div class="topnav">
          <a href="index.php">Home</a>
          <a href="site_1.php">Tynker</a>
          <a href="site_2.php">Scratch</a>
          <a href="site_3.php">KidsCanCode</a>
          <a href="site_4.php">Code.org</a>
          <a href="about_us.php">About Us</a>
          <a href="feedback.php">Feedback</a>  
	</div>
      </nav>
 <?php

        $db = new SQLite3('feedback.sqlite');
        $filename = basename($_SERVER['PHP_SELF']);

        if(isset($_POST['site'])) {
            if($_POST['site'] !== "") {
                $s = "INSERT INTO feedback VALUES (" . "\"" . $_POST['inclusive'] . "\"" . ',' . "\"". $_POST['site']  . "\"" . ',' . "\"" . $_POST['agree'] . "\"" . ',' . "\"" .  $_POST['improve'] . "\"" .  ");";
                $db->exec($s);
            }
        }
?>

        <h2> Thank you for your feedback! </h2>
  </center>
   </div>
  </body>
</html>

