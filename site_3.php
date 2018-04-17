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
    <title>KidsCanCode</title>
  </head>
  <body>
    <center>
      <nav> 
          <div class="topnav">
          <a href="index.php">Home</a>
          <a href="site_1.php" >Tynker</a>
          <a href="site_2.php">Scratch</a>
          <a href="site_3.php" class="active">KidsCanCode</a>
          <a href="site_4.php">Code.org</a>
          <a href="about_us.php">About Us</a>
          <a href="feedback.php">Feedback</a>  
	</div>
      </nav>
        <h1> Our Review </h1>
        <h2> KidsCanCode </h2>
  </center>

<body>
<p> <!--  TO DO: PLEASE ADD A SUMMARY OF WHAT THE WEBSIT DOES HERE--> </p>

<h2 id="toc_1">Design</h2>

<div id="design">
   <center> <img src="images/KidsCanCodeHP.png" style="width: 50%; height:50%;"> </center>

<p>Simple design, less kid-friendly than Tynker or Scratch</p>    
 
    <center><img src="images/white%20kid%20.png" style="width: 50%; height:50%;"> </center>  

<p>Un-inclusive homepage gallery, one white child in focus</p>

</div>
 
<br><br/>

<h2 id="toc_2">Courses &amp; Content </h2>

   <center><img src="images/youtube%20page.png" style="width: 50%; height:50%;"></center>

<div id="Courses">
<ul>
<li>Curriculum teaches Python, a more versitile coding language with cross-curricular benefits for children with a multitude of interests</li>

<li>Boring Youtube videos, not as engaging as Tynker content</li>

<li>Allows children to learn from anywhere, assuming they have access to a computer</li>
<div/>

<br><br/>
    <center><img src="images/Limited%20availability.png"> </center>
<br><br/>

<li>Limited class space, $250 tuition costs</li>

<li>No options for children under 8 to establish a foundation to learn how to code</li>

<li>Based in California, but allows users to contact them to implement program in their local area</li>
<br><br/>    
    <img src="images/age.png">
<br><br/>
<li>Suggested Age of 10+, but makes exceptions for "exceptional" students</li>
<br><br/>
    <center><img src="images/Special%20Programs%20Screenshot.png" style="width: 70%; height: 70%;"></center>
<br><br/>
<li>Coding Classes for Girls: "to remove the social pressure of gender competition"</li>

<li>Corporate Sponsorship Program: Addresses Digital Divide, all-inclusive effort for underserved communities</li>
</ul>
<br><br/>
<h2 id="toc_3">Overall Critique</h2>

<ul>
<li>An effort to irradicate "Imposter Syndrome" by teaching kids code at a young age, encouraging underserved populations</li>
<li>Addresses Digital Divide, opening the door to generous corporations to fund </li>
<li>Created to Address underfunded public school curriculum, which often neglects CS</li>
<li>Despite Education and Web Design backgrounds, the creators miss the mark on connecting and engaging with children, especially children of color </li>
</ul>
<center><h2>My Inclusivity Rating: 2</h2></center>


<br><br/>
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
                    <?php $i++; ?>
                </div>
                <br>
        <?php endforeach; ?>
 <?php endif; ?>
 
<!-- get review and rating from user and refresh the page to display them-->
<div class="add_review">
<br>
 <h2> Add a Review </h2>
 <?php include './review_site.php'?>
</div>
  </body>
</html>
