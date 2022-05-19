<?php

include '../connection.php';

$newCardName = addslashes(htmlspecialchars($_POST['name']));
$newCardFrom = htmlspecialchars($_POST['fromList']);

$getLists = $conn->prepare("SELECT * FROM cards WHERE fromList = $newCardFrom ORDER BY fromList DESC, position DESC");
$getLists->execute();
$allCardsInList = $getLists->fetchAll();


if($allCardsInList == null)
{
  $newPos = 0;
}
else 
{
  $newPos = $allCardsInList[0][6] + 1;
}

$createNewCard = $conn->prepare("INSERT INTO cards (name, description, fromList, position) VALUES ('$newCardName','description...',$newCardFrom, $newPos)");
$createNewCard->execute();

header('Location:../index.php');

?>