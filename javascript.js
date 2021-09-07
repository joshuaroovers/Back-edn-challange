

document.getElementById("buttonCreateList").onclick = function() {
    document.getElementById("buttonCreateListActive").style.display = 'inline-block';
    document.getElementById("buttonCreateListActive").firstElementChild.select()
    document.getElementById("buttonCreateList").style.display = 'none';
}/* why is firstChild different in css compared to js I am going to scream    also firstElementChild otherwise it might give null for some reason*/

document.getElementById("buttonCreateListActive").lastElementChild.lastElementChild.onclick = function() {
    document.getElementById("buttonCreateListActive").firstElementChild.value = "";
    document.getElementById("buttonCreateListActive").style.display = 'none';
    document.getElementById("buttonCreateList").style.display = 'inline-block';
}


function listName(pos)
{
    el = document.getElementsByClassName("listName")[pos];

    el.classList.toggle("hidden");
    el.parentElement.lastElementChild.classList.toggle("hidden");
    el.parentElement.lastElementChild.firstElementChild.select();
}

for(x = 0; x < document.getElementsByClassName("listNameEdit").length; x++)
{
    document.getElementsByClassName("listNameEdit")[x].addEventListener("blur", function(){
        this.parentElement.classList.toggle("hidden");
        this.parentElement.parentElement.firstElementChild.classList.toggle("hidden");
    });
}

document.getElementsByClassName("buttonCreateCard")/* onclick enable form */
document.getElementsByClassName("cardCreateEdit")/* blur */


