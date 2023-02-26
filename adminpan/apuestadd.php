<html>

<head>
    <title>Add Data</title>
</head>

<body>
    <?php
	    include_once "includes/class.apuesta.php";

if(isset($_POST['Submit'])) {	
		$title =  $_POST['title'];
		$team =  $_POST['team']; 
		$teamimgblob_name =  $_FILES['teamimgblob']["name"]; 
		$teamimgblob_size= $_FILES["teamimgblob"]["size"];
		$teamimgblob_type= $_FILES["teamimgblob"]["type"]; 
		$teamimgblob_temporal= $_FILES["teamimgblob"]["tmp_name"]; 
		$teamimgblob_temporal = file_get_contents($teamimgblob_temporal);  
		$profit = $_POST['profit'];
		$date_start =  $_POST['date_start'];
    	$date_end =  $_POST['date_end'];
		$codigo = ApuestaAdmin::generateCode();
 
 	if(empty($title) || empty($team) || empty($teamimgblob_name) ||   empty($date_start) ||   empty($date_end) || empty($profit) ) { 
		if(empty($title)) {
			echo "<font color='red'>title field is empty.</font><br/>";
		}
		
		if(empty($team)) {
			echo "<font color='red'>team field is empty.</font><br/>";
		}

		if(empty($teamimgblob_name)) {
			echo "<font color='red'>team imagen field is empty.</font><br/>";
		}
		 

        if(empty($date_start)) {
			echo "<font color='red'>date field is empty.</font><br/>";
		}

		if(empty($date_end)) {
			echo "<font color='red'>date field is empty.</font><br/>";
		}

		if(empty($profit)) {
			echo "<font color='red'>profit field is empty.</font><br/>";
		}
		 
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else {   
		$sql = $dbh->prepare("INSERT INTO confrontation(
							 codigo,
							 title, 
							 team, 
							 teamimgnombre,
							 teamimgblob,  
							 profit,
							 date_hour_start,
							 date_hour_end) 
							 VALUES (
							 :codigo,
							 :title,
							 :team,
							 :teamimgnombre,
							 :teamimgblob, 
							 :profit,
							 :date_hour_start, 
							 :date_hour_end)");
	    $sql->bindParam(':codigo', $codigo[0]['codigo']);
        $sql->bindParam(':title', $title);
        $sql->bindParam(':team', $team);
		$sql->bindParam(':teamimgnombre', $teamimgblob_name);
		$sql->bindParam(':teamimgblob',  $teamimgblob_temporal ); 
		$sql->bindParam(':profit', $profit);
        $sql->bindParam(':date_hour_start', $date_start);
		$sql->bindParam(':date_hour_end', $date_end);
		$sql->execute();
		 
         

		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='../apuesta'>View Result</a>";
	}
}
?>
</body>

</html>