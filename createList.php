<?php

include 'connection.php';

$newListName = htmlspecialchars($_POST['listname']);

$getLists = $conn->prepare("SELECT * FROM lists ORDER BY id DESC");
$getLists->execute();
$allLists = $getLists->fetchAll();

if($allLists[0][2] = null)
{
  $newPos = 0;
}
else 
{
  $newPos = $allLists[0][2] + 1;
}


$createNewList = $conn->prepare("INSERT INTO lists (name , position) VALUES ('$newListName', $newPos)");
$createNewList->execute();

include 'Main.php';

?>