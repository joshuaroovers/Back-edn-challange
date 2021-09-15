<?php
include 'connection.php';

$name = addslashes(htmlspecialchars($_POST['name']));
$pos = $_POST['pos'];
$fromList = $_POST['fromList'];


$updateCardName = $conn->prepare("UPDATE cards SET name = '$name' WHERE position = $pos AND fromList = $fromList");
                               /* UPDATE cards SET name = 'testC' WHERE position = 12hh AND fromList = 1; */
$updateCardName->execute();


include 'Main.php';

?>

