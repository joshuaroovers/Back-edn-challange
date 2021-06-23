<?php
include 'connection.php';

$getLists = $conn->prepare("SELECT * FROM lists");
$getLists->execute();
$allLists = $getLists->fetchAll();


foreach ($allLists as $list) {

    $name = $list[1];
    echo
    ("
    <div class=\"list\">
        <div>
            <div class=\"listName\">$name</div>
            <!-- <form>
                <input type=\"text\" value=\"name\">
            </form> -->
            <div></div>
        </div>
        <ul>
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