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
    <title>Home</title>
  </head>
  <body>
    <center>
      <nav> 
          <div class="topnav">
          <a href="index.php">Home</a>
          <a href="site_1.php" >Tynker</a>
          <a href="site_2.php">Scratch</a>
          <a href="site_3.php">ARTICLE 3</a>
          <a href="site_4.php" class="active">Code.org</a>
          <a href="about_us.php">About Us</a>
          </div>
      </nav>
  </center>
  <h1> Our Review </h1>
	<!--   TODO: ADD YOUR WEBSITE IMAGES HERE-->
  <!--   TODO: MAKE SURE YOU ADD YOUR ACTUAL IMAGE(s) TO THE IMAGES FOLDER -->
   <img src="images/FILENAME">
    <p> <!--   TODO: ADD YOUR REVIEW OF THE WEBSITE HERE--> </p>
  <h1> User Reviews </h1>
  <?php 
//	  make sure a review has been entered
 if (isset($_POST['reviews'])):
        $i = 0; 
	  // retrieve reviews input an ratings input
        $reviews = $_POST['reviews'];
        $ratings = $_POST['ratings'];
	  
	  // go through reviews and ratings and display each
        foreach($reviews as $review): ?>
                <div class="review">
                    <p> <?php echo "$review"; ?> </p> <br>
                    <div class="site-rating">Rating: <?php echo "$ratings[$i]"; ?> </div>
                    <?php $i++; ?>
                </div>
                <br>
        <?php endforeach; ?>
 <?php endif; ?>
 
<!-- get review and rating from user and refresh the page to display them-->
 <h1> Add a Review </h2>
    <form action="site_1.php" method="post">
<!--       user review-->
        <div class="rating">
            Comments: <input type="text" name="reviews[]"> <br>
		<!-- user rating (radio button: can choose either 1, 2, 3, 4, or 5-->
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