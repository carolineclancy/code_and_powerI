<html lang="en">
<body>
<!-- This chunk isn't php, it's just a basic table.--> 
<div class="container-fluid text-center">    
  <div class="row content" style="height: 0px;">
    <div class="col-sm-2 sidenav"></div>
    <div class="col-sm-8 text-left"> 
      <h1>Results</h1>
      <table class="table" style="border-color: #00;">
        <thead>
          <tr>
            <th scope="col">Website</th>
            <th scope="col">Rating</th>
          </tr>
        </thead>
        <tbody>
<!-- Start of the php code-->
          <?php
	    // Connects the $db object to the sqlite3 database. Just give it the relative path to the 
	    // database from this file. So the db is one dir up from this file so I have a 
	    // prefixed ../
            $db = new SQLite3('reviews.sqlite');
            
			// Gets everything from the database
			$query = "SELECT * FROM text_reviews";
			$results = $db->query($query);
		
			// This is used to map the website name (accessed by the database in element 0 of each row) to a pretty name for displaying on the table	
//			$cleanNames = array("Madison_police_dept.php" => "Madison Police Dept","abby_the_librarian.php" => "Abby the Librarian", "common_app.php" => "Common App", "educational_toys_planet.php" => "Educational Toys Planet");
            // Same thing as above 
//	    $links = array("Madison_police_dept.php" => "http://www.abbythelibrarian.com/", "common_app.php" => "http://www.commonapp.org/", "educational_toys_planet.php" => "https://www.educationaltoysplanet.com/", "Madison_police_dept.php" => "https://www.cityofmadison.com/police/");
  			$cleanNames = array("site_1.php" => "Tynker","site_2.php" => "Scratch", "site_3.php" => "KidsCanCode", "site_4.php" => "Code.org");
            // Same thing as above 
	    $links = array("site_1.php" => "http://www.tynker.com/", "site_2.php" => "https://scratch.mit.edu/", "site_3.php" => "https://www.kidscancode.org/", "site_4.php" => "https://www.code.org");          
	    
	    // Cannot access the results directly so we have to user a generator in a while loop to fetch each row. 
	    // Essetially each row is stored in x, and then I used the variable contents in x to print the elements in the table out in a pretty way. 
	    // $x is formatted as such = ["SiteName from database", "Review of this website goes here"];
	    // This format is the same as a schema of the table (as it should be)
	    while($x = $results->fetchArray()) {
			  echo '<tr style="border-color: #00;">';
              
              echo "<td style=\"border-color: #00; color: #ffff99;\">";
              echo "<p><a href=\"" . $links[$x[1]] . "\" _target=\"blank\">" . $cleanNames[$x[1]] . " </a></p>";
			  echo "</td>";
              
              echo '<td style="color: #ffff99;">';
			  echo $x[2];
			  echo '</td>';
              
              echo '</tr>'; 
            
            }
          ?>
        </tbody>
      </table>
      <hr>
    </div>
  </div>
  <div class="col-sm-2 sidenav"></div>



</div>
</body>
</html>
