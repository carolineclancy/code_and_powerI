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
          <a href="feedback.php">Feedback</a>  
	</div>
      </nav>
        <h1> Our Review </h1>
        <h2> Tynker </h2>
  </center>

  <!--   TODO: ADD YOUR WEBSITE IMAGES HERE-->
      <p>Tynker is a site dedicated to teaching coding to kids from school and home.They have plans for individual kids to lesson plans for schools.This site is very kid-friendly and inviting for children to learn coding. </p>
      <img src="images/tynker4.PNG" alt="benefits for kids" width="600" height="300" >
      <p>Although this website seems pretty exciting and easy for kids to understand, there are some implicit things that kids might not notice. </p>
      <img src="images/tynker1.PNG" alt="map" width="600" height="300">
      <p>Not <b>everyone</b> has access to computers and technology and everyone might not have the money or resources that coding demands.</p>
      <img src="images/tynker2.PNG" alt="individual price" style="float:left;width:45%;margin-left:2%; margin-right:1%;">
      <img src="images/tynker3.PNG" alt="school price" style="float:left;width:45%;">
      <p style="clear:both;">
  <!--TODO: MAKE SURE YOU ADD YOUR ACTUAL IMAGE(s) TO THE IMAGES FOLDER -->
   <!--<img src="images/FILENAME">-->
     <center> <p><h1> Overall rating: 4<h1></h1></p>
      <h1> User Reviews </h1></center>
  <?php 
//    make sure a review has been entered
 if (isset($_POST['reviews'])):
        $i = 0; 
    // retrieve reviews input an ratings input
        $reviews = $_POST['reviews'];
        $ratings = $_POST['ratings'];
    
    // go through reviews and ratings and display each
        foreach($reviews as $review): ?>
                <div class="review">
                    <?php $i++; ?>
                </div>
                <br>
        <?php endforeach; ?>
 <?php endif; ?>
 
<!-- get review and rating from user and refresh the page to display them-->
<div class="add_review">
<br>
 <h2> Add a Review </h2>
<!--       user review-->
<?php include './review_site.php'?>
   </div>
  </body>
</html>
