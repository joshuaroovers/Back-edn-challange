<?php
include '../connection.php';

$id = $_POST['cardId'];

$deleteCard = $conn->prepare("DELETE FROM cards WHERE id = $id");
$deleteCard->execute();


header('Location:../Main.php');



?>