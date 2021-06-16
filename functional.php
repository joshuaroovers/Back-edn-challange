<?php
$servername = "localhost";
$database = "back-end-checklist";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  // set the PDO error mode to exception
 
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


$test = $conn->prepare("CREATE TABLE `LISTNAME` ( `id` INT NOT NULL AUTO_INCREMENT , `name` TEXT NOT NULL , `description` TEXT NOT NULL , `duration` INT NOT NULL , `labels` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;");
$test->execute();

include 'Main.php';
?>

