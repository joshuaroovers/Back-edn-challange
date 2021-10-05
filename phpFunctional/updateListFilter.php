<?php
include '../connection.php';


$filter = $_POST['filter'];
$dir = $_POST["direction"];
$id = $_POST["id"];

$updateCardFilter = $conn->prepare("UPDATE lists SET sortBy = '$filter', sortDirect = '$dir' WHERE id = $id");

$updateCardFilter->execute();


header('Location:../Main.php');

?>