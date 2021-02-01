<?php 
	include_once("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<title>Add Script</title>
</head>
<body>


<?php
if( isset($_POST['Submit'])){
	$name = mysqli_real_escape_string($mysqli, $_POST['Name']);
	$birthday = mysqli_real_escape_string($mysqli, $_POST['birthday']);

	if( empty($name) || empty($birthday)  ){ 

		if(empty($name)){
			echo "<font color='red'> Name field is empty. </font><br/>";
		}

		if(empty($birthday)){
			echo "<font color='red'> Birthday field is empty. </font><br/>";
		}

		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";

	} else {

		$result = mysqli_query($mysqli, "INSERT INTO birthdays(Name, birthday) VALUES ('$name', '$birthday')");
		echo "<font color='green'> Data Added Successfully.";
		echo "<br/><a href='crud.php'> View Result </a>";
	}


}
?>


	
</body>
</html>
