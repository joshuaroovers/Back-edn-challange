<?php
include 'connection.php';

$getLists = $conn->prepare("SELECT * FROM lists ORDER BY position ASC");
$getLists->execute();
$allLists = $getLists->fetchAll();

$getCards = $conn->prepare("SELECT * FROM cards ORDER BY position ASC");
$getCards->execute();
$allCards = $getCards->fetchAll();


foreach ($allLists as $list) {

    $id = $list[0];
    $name = $list[1];
    $pos = $list[2];
    echo("
    <div class=\"list\">
        <div>
            <div>
                <div class=\"listName\">$name</div>
                <form class=\"hidden\" action=\"updateListName.php\" method=\"post\">
                    <input class=\"listNameEdit\" type=\"text\" value=\"$name\" name=\"name\">
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
            <button class=\"buttonCreateCard\">+ Een kaart toevoegen</button>
            <form class=\"hidden\" action=\"createCard.php\" method=\"post\">
                <input class=\"createCardEdit newCardInput\" type=\"text\" name=\"name\" placeholder=\"Geef deze kaart een naam...\" required oninvalid=\"setCustomValidity(' ')\">
                <input type=\"hidden\" name=\"fromList\" value=\"$id\"> <!--  -->
                <div>
                    <input type=\"submit\" value=\"Kaart toevoegen\">
                    <button class=\"buttonCancel\"><i class=\"fas fa-times\"></i></button>
                </div>
            </form>
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