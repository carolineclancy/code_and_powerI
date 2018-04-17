<html>
    <?php

	$db = new SQLite3('feedback.sqlite');  
      	$filename = basename($_SERVER['PHP_SELF']);
        
        if(isset($_POST['site'])) {
            if($_POST['site'] !== "") {
		$s = "INSERT INTO feedback VALUES (" . "\"" . $_POST['inclusive'] . "\"" . ',' . "\"". $_POST['site']  . "\"" . ',' . "\"" . $_POST['agree'] . "\"" . ',' . "\"" . ',' . "\"" .  $_POST['improve'] . "\"" .  ");";
		$db->exec($s);
            } 
        }
        echo '<div>
    <form action="thanks.php" method="post">

	<center><br>How inclusive/effective are these 4 sites for kids? <br>    
		<br>
		<input type="text" style="height:200px;width:800px;font-size:14pt;" name="inclusive"><br></center>	
        	
	<center><br> Which site would you prefer kids you know to use? <br></center>
            <br>
	    <div style="margin-left:700px;">	
		<input type="radio" name="site" value="Tynker" checked> Tynker<br>
  		<input type="radio" name="site" value="Scratch"> Scratch<br>
  		<input type="radio" name="site" value="KidsCanCode"> KidsCanCode<br>
		<input type="radio" name="site" value="Code.org"> Code.org<br>
                <input type="radio" name="site" value="Other"> Other
 	    </div>
        <center><br> Do you agree with our ratings/analysis of our sites? If not, please explain. <br></center>
		<br>
		<center><input type="text" style="height:200px;width:800px;font-size:14pt;" name="agree"></center>


        <center><br> Any suggestions to improve our insight/design of website? <br></center>
		<br>
		<center><input type="text" style="height:200px;width:800px;font-size:14pt;" name="improve"></center>		
	<center><input style="margin:50px;" type="submit" value="Submit"></center>

    </form>
    </div>';
    
?>

</html>

