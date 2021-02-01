<?php 
	include_once("config.php");

	$result = mysqli_query($mysqli, "SELECT * FROM birthdays");
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	
	<title>Homepage</title>
</head>
<body>
<div class="txtcenter">
	<h1><?php echo "Famous Birthdays CRUD System"; ?></h1>
	<p><b><?php echo "by : Errol Pe / BSIT 3 B1 A"; ?></b></p>
	<a href="logout.php" class="btnlogout">Logout</a>
	<a href="add.html">Add new Data</a><br/><br/>
	
	</div>
	<table class="center" id="customers">
		<tr>
			<th>Birthday </th>
			<th>Name </th>
			<th>Update</th>
		</tr>

	
		<?php 

		while( $res = mysqli_fetch_array($result)){
			echo "<tr>";
			echo "<td>".$res['birthday']."</td>";

			echo "<td>".$res['Name']."</td>";
			echo "<td><a href=\"edit.php?ID=$res[ID]\">Edit</a> | <a href=\"delete.php?ID=$res[ID]\" onClick=\"return confirm('Are you sure you want to delete this record?')\">Delete</a></td>";
			echo "</tr>";
		} 

		?>
	</table>
	

	</div>
	
</body>
</html>