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
                <div id="mainTitle">Back-end-challenge</div>
            </div>
            <div id="listsContainer">
                
                <?php
                include 'writeLists.php'
                ?>
                
                <button id="buttonCreateList" class="list">
                    <div class="listName">+ Voeg een lijst toe</div>
                </button>

                <form id="buttonCreateListActive" class="list hidden" action="phpFunctional/createList.php" method="post" target="redirect">
                    <input class="edit" type="text" value="" name="listname" placeholder="Geef deze lijst een naam..." required oninvalid="setCustomValidity(' ')">
                    <div>
                        <input type="submit" value="Lijst toevoegen">
                        <button class="buttonCancel"><i class="fas fa-times"></i></button>
                    </div>
                </form>

            </div>
        </div>
    </body>
    <script src='javascript.js'></script>
</html>
<!-- seperate the php in visual and functional  -->