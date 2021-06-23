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
                        <div class="listName">name</div>
                        <!-- <form>
                            <input type="text" value="name">
                        </form> -->
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

                <form id="buttonCreateListActive" class="list">
                    <input type="text" placeholder="Geef deze lijst een naam...">
                    <div>
                        <input type="submit" value="Lijst toevoegen">
                        <button>X</button>
                    </div>
                </form>

            </div>
        </div>
    </body>
    <script src='javascript.js'></script>
</html>
<!-- seperate the php in visual and functional  -->