<?php

include 'connection.php';

$newListName = htmlspecialchars($_POST['listname']);

$getLists = $conn->prepare("SELECT * FROM lists ORDER BY id DESC");
$getLists->execute();
$allLists = $getLists->fetchAll();

$newPos = $allLists[0][2] + 1;
/* echo($_POST['listname']);
 */ 

$createNewList = $conn->prepare("INSERT INTO lists (name , position) VALUES ('$newListName', $newPos)");
$createNewList->execute();

include 'Main.php';

?>