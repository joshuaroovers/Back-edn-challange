<?php
include '../connection.php';

$id = $_POST['id'];
$name = addslashes(htmlspecialchars($_POST["name"]));

$updateListName = $conn->prepare("UPDATE lists SET name = '$name' WHERE id = $id");
$updateListName->execute();


header('Location:../Main.php');

?>

