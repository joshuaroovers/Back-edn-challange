<?php
include '../connection.php';

$name = addslashes(htmlspecialchars($_POST['name']));
$id = $_POST['cardId'];


$updateCard = $conn->prepare("UPDATE cards SET name = '$name' WHERE id = $id");

$updateCard->execute();


header('Location:../index.php');

?>

