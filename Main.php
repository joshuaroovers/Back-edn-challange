<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>CheckList</title>
        <script src="https://kit.fontawesome.com/89f724c9b8.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body>
        <div id="mainContainer">
            <div id="titleContainer">
                <div id="mainTitle">Front-end-challenge</div>
            </div>
            <div id="listsContainer">
                <?php
                include 'writeLists.php'
                ?>

                <div class="list">
                    <div>
                        <div class="editListName" onclick="listName(5)">
                            <div class="listName">*name</div>
                            <form class="hidden" action="test.php" method="post" >
                                <input class="listName listNameEdit" type="text">
                            </form>
                        </div>
                        <div></div>
                    </div>
                    <ul>
                        <li>1</li>
                    </ul>
                    <div>
                        <button>+ Een kaart toevoegen</button>
                    </div>
                </div>

                           
                <button id="buttonCreateList" class="list">
                    <div class="listName">+ Voeg een lijst toe</div>
                </button>

                <form id="buttonCreateListActive" class="list" action="createList.php" method="post">
                    <input type="text" value="" name="listname" placeholder="Geef deze lijst een naam..." required oninvalid="setCustomValidity(' ')">
                    <div>
                        <input type="submit" value="Lijst toevoegen">
                        <button type="button">X</button>
                    </div>
                </form>

            </div>
        </div>
    </body>
    <script src='javascript.js'></script>
</html>
<!-- seperate the php in visual and functional  -->