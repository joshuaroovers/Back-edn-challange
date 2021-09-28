<?php
include '../connection.php';

$name = addslashes(htmlspecialchars($_POST['name']));
$id = $_POST['cardId'];


$updateCard = $conn->prepare("UPDATE cards SET name = '$name' WHERE id = $id");
                               /* UPDATE cards SET name = 'testC' WHERE position = 12hh AND fromList = 1; */
$updateCard->execute();


header('Location:../Main.php');

?>

