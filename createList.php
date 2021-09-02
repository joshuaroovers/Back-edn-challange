<?php

include 'connection.php';

$newListName = htmlspecialchars($_POST['listname']);

/* echo($_POST['listname']);
 */ 

$createNewList = $conn->prepare("INSERT INTO lists (name , position) VALUES ('$newListName', 0)");
$createNewList->execute();

include 'Main.php';

?>