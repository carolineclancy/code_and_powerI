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
    <title>Code.org</title>
  </head>
  <body>
    <center>
      <nav> 
          <div class="topnav">
          <a href="index.php">Home</a>
          <a href="site_1.php" >Tynker</a>
          <a href="site_2.php">Scratch</a>
          <a href="site_3.php">KidsCanCode</a>
          <a href="site_4.php" class="active">Code.org</a>
          <a href="about_us.php">About Us</a>
          </div>
      </nav>
      <h1> Our Review </h1>
      <h2> Code.org </h2>
  </center>
    <p>
    <img src="images/Code.org.png" style="float: left; width: 100%; margin-right: 10%; margin-bottom: 0.5em;">
	</p>
    <p style="text-align:center">Code.org is a site with interactive lessons which have the aim of making Computer Science more approachable to young kids from different backgrounds. </p>


    <h2 style="text-align:center">Design</h2>
    <p>
    <img src="images/Homepage.png" style="float: left; width: 100%; margin-right: 10%; margin-bottom: 0.5em;">
	</p>
    <p style="text-align:center">Overall, the design of Code.org is very appealing and enaging. According to me, kids of all age groups would find the site to be very engaging and easy to follow. I would personally reccomend this site to young kids who are starting to learn to code. It is colorful and you can see that throughout the site there are kids from various ethnicities and genders featured which shows just how deeply they care about promoting diversity.</p>

    <h2 style="text-align:center">Themes</h2>
    <p>
    <img src="images/Theme.png" style="float: left; width: 100%; margin-right: 10%; margin-bottom: 0.5em;">
    </p>
    <p style="text-align:center">The theme of the site is the same throughout the site. I personally really like the theme as it is simple but at the same time colorful and stylish enough that kids would feel engaged and motivated to explore the site.</p>

    <h2 style="text-align:center">Usability</h2>
    <p>
    <img src="images/Game.png" style="float: left; width: 40%; margin-right: 10%; margin-bottom: 0.5em;">
    <img src="images/Game2.png" style="float: left; width: 40%; margin-right: 10%; margin-bottom: 0.5em;">
    </p>
    <p>
    <img src="images/Game3.png" style="float: left; width: 40%; margin-right: 10%; margin-bottom: 0.5em;">
    <img src="images/Game4.png" style="float: left; width: 40%; margin-right: 10%; margin-bottom: 0.5em;">
    </p>
    <p style="text-align:center">The lessons are taught through interactive activities where kids can drag blocks that execute code and then their output shows up on the little screen on the side. I found it to be really intuitive as you can see the types of blocks that can fit together. Once you have a working code, you can display your output. There are also fun images(wizard in the above image) that you can display through your code which I feel is a nice touch. </p>

    <h2 style="text-align:center">Inclusivity</h2>
    <p>
    <img src="images/Diversity.png" style="width: 100%; margin-right: 10%; margin-bottom: 0.5em;">
	</p>
    <p style="text-align:center">Code.org is making a genuine effort in promoting diversity in technology. Their aim is to increase participation of women and underrepresented minorities in the computer science. The pie charts above shows the percentage of their students that are women, underrepresented minorities, and students on free or reduced meals.</p>
    <p>
    <img src="images/Mission.png" style="width: 100%; margin-right: 10%; margin-bottom: 0.5em;">
	</p>
    <p style="text-align:center">In the About Us section on their site, you can read about their efforts to encourage more women and underrepresented minorities to get involved in Computer Science.</p>
  	<p>We learned in class that there are certain stereotypes about who is a coder and who isn't. Code.org specifically acknowledges this problem and is part of an international campaign called Hour Of Code which according to it's website is largest-scale effort to introduce computer science to girls. 48% of the participants of Hour Of Code are female.</p>
     <img src="images/Stereotypes.png" style="width: 100%; margin-right: 10%; margin-bottom: 0.5em;">
         <p style="text-align:center">Code.org's commitment to promoting diversity can be seen not only through their external efforts but also their internal efforts. They pride themselves in the fact that their team is very diverse.</p>
    	<p>
    	<img src="images/CompanyStat.png" style="width: 100%; margin-right: 10%; margin-bottom: 0.5em;">
		</p>

		
		    <h2 style="text-align:center">Our Rating: 5</h2>

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
    <form action="site_4.php" method="post">
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