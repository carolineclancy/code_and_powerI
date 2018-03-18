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
    <title>Welcome</title>
  </head>
  <body>
    <center>
      <nav> 
          <div class="topnav">
          <a href="index.php">Home</a>
          <a href="site_1.php" class="active">Tynker</a>
          <a href="site_2.php">Scratch</a>
          <a href="site_3.php">ARTICLE 3</a>
          <a href="site_4.php">ARTICLE 4</a>
          <a href="about_us.php">About Us</a>
          </div>
      </nav>
  </center>
  <h1> Our Review </h1>
    <p> </p>
  <h1> User Reviews </h1>
  <?php 
 if (isset($_POST['reviews'])):
        $i = 0; 
        $reviews = $_POST['reviews'];
        $ratings = $_POST['ratings'];
        foreach($reviews as $review): ?>
                <div class="review">
                    <p> <?php echo "$review"; ?> </p> <br>
                    <div class="site-rating">Rating: <?php echo "$ratings[$i]"; ?> </div>
                    <?php $i++; ?>
                </div>
                <br>
        <?php endforeach; ?>
 <?php endif; ?>
 <h1> Add a Review </h2>
    <form action="site_1.php" method="post">
        <div class="rating">
            Comments: <input type="text" name="reviews[]"> <br>
            <label>
                <input type="radio" name="ratings[]" value="1" checked>
                <h2> 1 </h2>
            </label>
            <label>
                <input type="radio" name="ratings[]" value="2">
                <h2> 2 </h2>
            </label>
            <label>
                <input type="radio" name="ratings[]" value="3">
                <h2> 3 </h2>
            </label>
            <label>
                <input type="radio" name="ratings[]" value="4">
                <h2> 4 </h2>
            </label>
            <label>
                <input type="radio" name="ratings[]" value="5">
                <h2> 5 </h2>
            </label>
        </div>
        <br>
        <input type="submit" value="Submit">
    </form>


  </body>
</html>