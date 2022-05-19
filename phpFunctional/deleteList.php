<?php
include '../connection.php';

$id = $_POST['id'];

$deleteList = $conn->prepare("DELETE FROM lists WHERE id = $id; DELETE FROM cards WHERE fromList = $id;");
$deleteList->execute();


header('Location:../index.php');



?>