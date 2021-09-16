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

                <div class="list">
                    <div>
                        <div>
                            <div class="listName" >*name</div>
                            <form class="hidden" action="updateListName.php" method="post" >
                                <input class="listNameEdit edit" type="text" value="*name">
                                <!-- <input type=\"hidden\" value=\"$id\" name=\"id\"> -->
                            </form>
                        </div>
                        <div></div>
                    </div>
                    <ul>
                        <li>
                            <div class="card">
                                <button style=""><i class="fas fa-angle-down"></i></button>
                                <span>
                                    <span class="cardText">1</span>
                                    <form class="hidden" action="updateCardName.php" method="post" >
                                        <input class="cardEdit" type="text" value="1">
                                        <!-- <input type=\"hidden\" value=\"$id\" name=\"id\"> -->
                                    </form>
                                </span>
                            </div>
                            
                            <div>

                            </div>
                        </li>
                        <form class="hidden" action="createCard.php" method="post">
                            <input class="createCardEdit newCardInput edit" type="text" name="name" placeholder="Geef deze kaart een naam..." required oninvalid="setCustomValidity(' ')">
                            <input type="hidden" name="fromList" value="1">
                        </form>
                    </ul>
                    <div>
                        <button class="buttonCreateCard">+ Een kaart toevoegen</button>
                        <div class="hidden">
                            <button class="buttonSubmit" >Kaart toevoegen</button>
                            <button class="buttonCancel"><i class="fas fa-times b"></i></button>
                        </div>
                        
                    </div>
                </div>

                
                <button id="buttonCreateList" class="list">
                    <div class="listName">+ Voeg een lijst toe</div>
                </button>

                <form id="buttonCreateListActive" class="list hidden" action="createList.php" method="post">
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