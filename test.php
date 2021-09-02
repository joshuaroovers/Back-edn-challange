<?php
include 'connection.php';

$id = $_POST['id'];
$name = $_POST['name'];

$updateListName = $conn->prepare("UPDATE lists SET name = '$name' WHERE id = $id");
$updateListName->execute();


                /* $test = $conn->prepare("CREATE TABLE `LISTtest` ( `id` INT NOT NULL AUTO_INCREMENT , `name` TEXT NOT NULL , `description` TEXT NOT NULL , `duration` INT NOT NULL , `labels` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;");
                */
                /*  $test = $conn->prepare("INSERT INTO listtest (name) VALUES ('testname')");
                $test->execute(); */

                /* $createNewList = $conn->prepare("CREATE TABLE lists ( `id` INT NOT NULL AUTO_INCREMENT , `name` TEXT NOT NULL , `position` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;");
                $createNewList->execute(); */

                /* $createNewList = $conn->prepare("INSERT INTO cards (name) VALUES ('testCARD')");
                $createNewList->execute();
                */

/* function createListItem($list, $itemName)
{
  $createNewItem = $conn->prepare("INSERT INTO cards (name, fromList) VALUES ($itemName,$list)");
  $createNewItem->execute();
}
*/
include 'Main.php';

?>

