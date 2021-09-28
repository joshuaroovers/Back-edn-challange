<?php
include '../connection.php';

$duration = addslashes(htmlspecialchars($_POST['cardDuration']));
$id = $_POST['cardId'];


$updateCard = $conn->prepare("UPDATE cards SET duration = '$duration' WHERE id = $id");
                               /* UPDATE cards SET name = 'testC' WHERE position = 12hh AND fromList = 1; */
$updateCard->execute();


header('Location:../Main.php');

?>