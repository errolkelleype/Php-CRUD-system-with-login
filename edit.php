<?php 
	include_once("config.php");


if( isset($_POST['update']))
{
			$id = mysqli_real_escape_string($mysqli, $_POST['ID']);
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

				$result = mysqli_query($mysqli, "UPDATE birthdays set Name='$name',birthday='$birthday' WHERE ID=$id");
				header("Location: crud.php");
				
			}

}
?>



<?php 

	$id = $_GET['ID'];

	$result = mysqli_query($mysqli,"SELECT * from birthdays where ID=$id");

	while($res = mysqli_fetch_array($result))
	{
        $birthday = $res['birthday'];
		$name = $res['Name'];
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Edit data</title>
</head>
<body>

	<form name="form1" method="post" action="edit.php">

		<table widht="25%" border="0">
            
            <tr>
				<td>Birthday</td>
				<td><input type="text" name="birthday" value="<?php echo $birthday;?>" ></td>
			</tr>
            <tr>
				<td>Name</td>
				<td><input type="text" name="Name" value="<?php echo $name;?>"></td>
			</tr>
        	<tr>
				<td>
					<input type="hidden" name="ID" value="<?php echo $_GET['ID'];?>">
				</td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>		
		

	</form>



	
</body>
</html>