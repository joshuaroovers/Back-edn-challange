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
                <form class=\"hidden\" action=\"phpFunctional/updateListName.php\" method=\"post\">
                    <input class=\"listNameEdit\" value=\"$name\" type=\"text\" name=\"name\" maxlength=\"88\">
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
            $cardId = $card[0];
            $cardName = $card[1];
            $cardDesc = $card[2];
            $cardDur = $card[3];
            $cardFromList = $card[5];
            $cardPos = $card[6];
            
            
            echo("
            <li class=\"card\">
                <button class=\"cardButtonDropDown\"><i class=\"fas fa-angle-down\"></i></button>
                <span>
                    <span class=\"cardText\">$cardName</span>
                    <form class=\"hidden\" action=\"phpFunctional/updateCardName.php\" method=\"post\">
                        <input class=\"cardEdit edit\" value=\"$cardName\" type=\"text\" name=\"name\">
                        <input type=\"hidden\" value=\"$cardId\" name=\"cardId\">
                    </form>
                </span>
                <div class=\"cardDropDown hidden\">
                    <div class=\"cardDesc\">
                        <div class=\"cardDescText\">$cardDesc</div>
                        <form class=\"hidden\" action=\"phpFunctional/updateCardDesc.php\" method=\"post\">
                            <input class=\"edit\" type=\"text\" value=\"$cardDesc\" name=\"cardDesc\">
                            <input type=\"hidden\" value=\"$cardId\" name=\"cardId\">
                        </form>
                    </div>
                    <div>    
                        <form class=\"cardDeleteContainer\" action=\"phpFunctional/deleteCard.php\" method=\"post\">                        
                            <button class=\"cardDelete\"><i class=\"far fa-trash-alt\"></i></button>
                            <input type=\"hidden\" value=\"$cardId\" name=\"cardId\">
                        </form>
                        <form class=\"cardDuration\" action=\"phpFunctional/updateCardDur.php\" method=\"post\"> 
                            <input class=\"cardDurInput\" type=\"text\" value=\"$cardDur\" name=\"cardDuration\" maxlength='3'>
                            <input type=\"hidden\" value=\"$cardId\" name=\"cardId\">
                            <i class=\"far fa-clock\"></i>
                        </form>
                    </div>

                </div>
            </li>"
        );
        }
    }
    echo("
            <form class=\"hidden\" action=\"phpFunctional/createCard.php\" method=\"post\">
                <input class=\"createCardEdit newCardInput\" type=\"text\" name=\"name\" placeholder=\"Geef deze kaart een naam...\" required oninvalid=\"setCustomValidity(' ')\" value=\"\">
                <input type=\"hidden\" name=\"fromList\" value=\"$id\"> <!--  -->
            </form>
        </ul>
        <div>
            <button class=\"buttonCreateCard\">+ Een kaart toevoegen</button>
            <div class=\"hidden\">
            <button class=\"buttonSubmit\" >Kaart toevoegen</button>
                <button class=\"buttonCancel\"><i class=\"fas fa-times\"></i></button>
            </div>
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