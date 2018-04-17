<html>
    <?php

	//$file_db->exec("ATTACH DATABASE 'C:/Users/name/folder/Projects/htdocs/p1/dbs/yourdbfile.db' AS db2");
//        $db = new SQLite3('/home/chrx/Documents/code_and_powerI/reviews.db');
	$db = new SQLite3('reviews.sqlite');  
      $filename = basename($_SERVER['PHP_SELF']);
        
        $pageReview = [
            "site_1.php" => 5,
            "site_2.php" => 5,
            "site_3.php" => 3,
            "site_4.php" =>3 
        ];
        $pageNames = [
            "site_1.php" => "Tynker",
            "site_2.php" => "Scratch",
            "site_3.php" => "KidsCanCode",
            "site_4.php" => "Code.org"
        ];
        $tynker = "https://tynker.com/";
        $scratch = "https://scratch.mit.edu/";
        $kidscc = "http://kidscancode.org/";
        $code = "https://code.org/";
        if(isset($_POST['user_input'])) {
            if($_POST['user_input'] !== "") {
                $url = "";
                switch ($filename) {
                    case 'site_1.php':
                        $url = $tynker;
                        break;
                    case 'site_2.php':
                        $url = $scratch;
                        break;
                    case 'site_3.php':
                        $url = $kidscc;
                        break;
                    case 'site_4.php':
                        $url = $code;
                        break;
                }
		
		$s = "INSERT INTO Reviews VALUES (" . "\"" . NULL . "\"" . ',' . "\"" . $filename . "\"" . ',' . "\"". $_POST['user_input']. "\"". ", " . "\"" . $url . "\"" . ");";
		$db->exec($s);
            } else {
                echo "Must enter values 1 to 6.";
            }
        }
        
        if(isset($_POST['review'])) {
            if($_POST['review'] !== "") {
                $url = "";
                switch ($filename) {
                    case 'site_1.php':
                        $url = $tynker;
                        break;
                    case 'site_2.php':
                        $url = $scratch;
                        break;
                    case 'site_3.php':
                        $url = $kidscc;
                        break;
                    case 'site_4.php':
                        $url = $code;
                        break;
                }
	
              //  $s = "INSERT INTO text_reviews VALUES (\"" . NULL  . "\",\"" . $filename . "\",\"" . $_POST['review'] . "\")";
//$items = array(
  //  array(
    //    'id' => NULL,
      //  'filename' => $filename,
	//'review' => $_POST['review'],
   // ),
//);                

//$s = "INSERT INTO text_reviews (id, filename, review) VALUES (:id, :filename, :review)";
//$stmt = $db->prepare($s);
//$stmt->bindParam(':id', $id);
//$stmt->bindParam(':filename', $filename);
//$stmt->bindParam(':review', $_POST['review']);

//foreach($data as $item){
//	$title = $item['id'];
//	$file = $item['filename'];
//	$rev = $item['review'];

//	$stmt->execute();
//}


//$s = "INSERT INTO text_reviews (id, filename, review) VALUES ('".NULL."','" . $filename . "','" .$review ."');";

$s = "INSERT INTO text_reviews VALUES (" . "\"" . 1 . "\"" . ',' . "\"" . $filename . "\"" . ',' . "\"". $_POST['review']  . "\"" . ");";
$db->exec($s);
            } 
        }
        echo ' <div class="form">
    <form action="' . $filename . '" method="post">
<!--       user review-->
        <div class="rating">
            Comments: <input type="text" name="review"> <br>
    <!-- user rating (radio button: can choose either 1, 2, 3, 4, or 5-->
            <label>
                <input type="radio" name="user_input" value="1" checked>
                <h2> 1 </h2>
            </label>
            <label>
                <input type="radio" name="user_input" value="2">
                <h2> 2 </h2>
            </label>
            <label>
                <input type="radio" name="user_input" value="3">
                <h2> 3 </h2>
            </label>
            <label>
                <input type="radio" name="user_input" value="4">
                <h2> 4 </h2>
            </label>
            <label>
                <input type="radio" name="user_input" value="5">
                <h2> 5 </h2>
            </label>
        </div>
        <br>
        <input type="submit" value="Submit">
      </div>
    </form>
    </div>';
    ?>
</html>
