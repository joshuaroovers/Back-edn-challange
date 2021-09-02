<?php
include 'connection.php';

$getLists = $conn->prepare("SELECT * FROM lists ORDER BY id ASC");
$getLists->execute();
$allLists = $getLists->fetchAll();

$getCards = $conn->prepare("SELECT * FROM cards");
$getCards->execute();
$allCards = $getCards->fetchAll();


foreach ($allLists as $list) {

    $id = $list[0];
    $name = $list[1];
    $pos = $list[2];
    echo("
    <div class=\"list\">
        <div>
            <div class=\"editListName\" onclick=\"listName($pos)\">
                <div class=\"listName\">$name</div>
                <form class=\"hidden\" action=\"test.php\" method=\"post\">
                    <input class=\"listName listNameEdit\" type=\"text\" value=\"$name\" name=\"name\">
                    <input type=\"hidden\" value=\"$id\" name=\"id\">
                </form>
            </div>
            <div></div>
        </div>
        <ul>
    ");
    foreach ($allCards as $card) {
        if($card[5] == $list[0])
        {
            $cardName = $card[1];
            echo("<li>$cardName</li>");
        }
    }
    echo("
        </ul>
        <div>
            <button>+ Een kaart toevoegen</button>
        </div>
    </div>
    ");
}


/* 
$lists[x] what list

$lists[x][0] id
$lists[x][1] name
$lists[x][2] pos

*/

?>