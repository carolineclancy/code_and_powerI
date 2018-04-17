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
          <a href="site_1.php" class="active">Tynker</a>
          <a href="site_2.php">Scratch</a>
          <a href="site_3.php">KidsCanCode</a>
          <a href="site_4.php">Code.org</a>
          <a href="about_us.php">About Us</a>
          </div>
      </nav>
        <h1> Our Review </h1>
        <h2> Tynker </h2>
  </center>
  <?php
     $db = new SQLite3('../reviews.db');
     
     $query = "SELECT * FROM text_review";
     $results = $db->query($query);
     $cleanNames = array("site_1.php" => "Tynker","site_2.php" => "Scratch", "site_3.php" => "KidsCanCode", "site_4.php" => "Code.org");
     $links = array("site_1.php" => "https://www.tynker.com/", "site_2.php" => "https://scratch.mit.edu/", "site_3.php" => "http://kidscancode.org/", "site_4.php" => "https://www.code.org");
            while($x = $results->fetchArray()) {
			  echo '<tr style="border-color: #00;">';
              
              echo "<td style=\"border-color: #00; color: #ffff99;\">";
              echo "<p><a href=\"" . $links[$x[0]] . "\" _target=\"blank\">" . $cleanNames[$x[0]] . " </a></p>";
			  echo "</td>";
              
              echo '<td style="color: #ffff99;">';
			  echo $x[1];
			  echo '</td>';
              
              echo '</tr>'; 
            
            }
          ?>


  </body>
</html>
