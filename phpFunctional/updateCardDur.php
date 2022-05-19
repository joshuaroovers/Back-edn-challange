<?php
include '../connection.php';

$duration = addslashes(htmlspecialchars($_POST['cardDuration']));
$id = $_POST['cardId'];


$updateCard = $conn->prepare("UPDATE cards SET duration = '$duration' WHERE id = $id");

$updateCard->execute();


header('Location:../index.php');

?>