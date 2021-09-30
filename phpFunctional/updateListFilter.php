<?php
include '../connection.php';


$filter = $_POST['filter'];
$dir = $_POST["direction"];
$id = $_POST["id"];

$updateCardFilter = $conn->prepare("UPDATE lists SET sortBy = '$filter', sortDirect = '$dir' WHERE id = $id");

                               /* UPDATE cards SET name = 'testC' WHERE position = 12hh AND fromList = 1; */
$updateCardFilter->execute();


header('Location:../Main.php');

?>