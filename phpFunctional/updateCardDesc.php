<?php
include '../connection.php';

$cardDesc = addslashes(htmlspecialchars($_POST['cardDesc']));
$id = $_POST['cardId'];

$updateCard = $conn->prepare("UPDATE cards SET description = '$cardDesc' WHERE id = $id");
$updateCard->execute();


header('Location:../Main.php');

?>

<!-- I could just use one update thing and give it an extra variable to say what it is an the run it trough some if's to make the querry but meh -->