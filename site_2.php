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
    <title>Scratch</title>
  </head>
  <body>
    <center>
      <nav> 
          <div class="topnav">
          <a href="index.php">Home</a>
          <a href="site_1.php">Tynker</a>
          <a href="site_2.php" class="active">Scratch</a>
          <a href="site_3.php">KidsCanCode</a>
          <a href="site_4.php">Code.org</a>
          <a href="about_us.php">About Us</a>
          </div>
      </nav>
        <h1> Our Review </h1>
        <h2> Scratch </h2>
  </center>

  <!--   TODO: ADD YOUR WEBSITE IMAGES HERE-->
      <p>Scratch is a visual, block-based programming language. The Scratch IDE allows children to build creative, interactive programs in a way that is simpler than actually typing out code. Users are expected to implement interactive programs using logic commonly used by computer scientists.  </p>
      <img src="images/scratch1.PNG" alt="scratch" width="600" height="300" >
      <center><h2> Inclusivity </h2></center>
      <p>Scratch is free to use and has been integrated into many after school program curricula. However, the interface is not very intuitive and it may deter younger children from code rather than encourage them. 
      Because some of the features require a higher level of math and logic, the average age of a Scratch user is about 13: </p>

      <img src="images/scratch_age.PNG" alt="map" width="600" height="300">

      <p>Also, Scratch assumes childlren have access to computers and Wifi. According to <a href="www.childtrends.org">childtrends.org</a>, only roughly 57% of U.S. children have a computer <i>and</i> Wifi access at home. Therefore, only about 57% of U.S. children can use Scratch in their free time.
       Despite the issue of requiring a Wifi-enabled device, Scratch has incredible reach and is used by people throughout the world. The website offers a large variety of languages. This may be the reason Scratch is used throughout the world: </p>
      
      <img src="images/world.PNG" alt="map" width="600" height="300">

      <p>There are many games and code templates children can use on Scratch. From our analysis, all of these games seemed to be gender neutral. None seem to have aspects that veer typically "feminine" or "masculine". From its inclusivity of genders, languages, and economic statuses, Scratch creates an open environment for many users to collaborate, contribute, and learn.</p>
     
      <img src="images/users.PNG" alt="users" width="600" height="300">
      <img src="scratch4.PNG" alt="school price" style="float:left;width:45%;">
      <p style="clear:both;">
      <center><h1> Our Rating: 5 </h1></center>
  <!--TODO: MAKE SURE YOU ADD YOUR ACTUAL IMAGE(s) TO THE IMAGES FOLDER -->
   <!--<img src="images/FILENAME">-->
    <p> <!--   TODO: ADD YOUR REVIEW OF THE WEBSITE HERE--> </p>
  <center><h1> User Reviews </h1></center>
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
                    <h3> <?php echo "$review"; ?> </h3> <br>
                    <div class="site-rating">Rating: <?php echo "$ratings[$i]"; ?> </div>
                    <?php $i++; ?>
                </div>
                <br>
        <?php endforeach; ?>
 <?php endif; ?>
 
<!-- get review and rating from user and refresh the page to display them-->
<div class="add_review">
<br>
 <h2> Add a Review </h2>
 <div class="form">
    <form action="site_2.php" method="post">
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
      </div>
    </form>
    </div>
  </body>
</html>