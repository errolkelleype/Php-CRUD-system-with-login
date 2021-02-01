<?php

$id = $_GET['ID'];

include("config.php");
$result = mysqli_query($mysqli, "DELETE FROM birthdays where ID=$id");

header("Location:crud.php");

?>