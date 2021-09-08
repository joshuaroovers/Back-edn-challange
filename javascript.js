
/* create list show form */
document.getElementById("buttonCreateList").onclick = function() {
    document.getElementById("buttonCreateListActive").style.display = 'inline-block';
    document.getElementById("buttonCreateListActive").firstElementChild.select()
    document.getElementById("buttonCreateList").style.display = 'none';
}/* why is firstChild different in css compared to js I am going to scream    also firstElementChild otherwise it might give null for some reason*/

/* create list cancel button/hide form */
document.getElementById("buttonCreateListActive").lastElementChild.lastElementChild.onclick = function() {
    this.firstElementChild.value = "";
    document.getElementById("buttonCreateListActive").style.display = 'none';
    document.getElementById("buttonCreateList").style.display = 'inline-block';
}


for(x = 0; x < document.getElementsByClassName("listName").length; x++)  /* list name show form */
{
    document.getElementsByClassName("listName")[x].onclick = function(){
        this.classList.toggle("hidden");
        this.parentElement.lastElementChild.classList.toggle("hidden");
        this.parentElement.lastElementChild.firstElementChild.select();
    };
}

for(x = 0; x < document.getElementsByClassName("listNameEdit").length; x++) /* list name hide form on blur */
{
    document.getElementsByClassName("listNameEdit")[x].addEventListener("blur", function(){
        this.parentElement.classList.toggle("hidden");
        this.parentElement.parentElement.firstElementChild.classList.toggle("hidden");
    });
}


for(x = 0; x < document.getElementsByClassName("buttonCreateCard").length; x++)/* create card button show form */
{
    document.getElementsByClassName("buttonCreateCard")[x].onclick = function() {
        this.classList.toggle("hidden");
        this.parentElement.lastElementChild.classList.toggle("hidden")
        this.parentElement.lastElementChild.firstElementChild.select();
    }
}

/* DOESNT WORK */
for(x = 0; x < document.getElementsByClassName("cardCreateEdit").length; x++) /* hide create card form on blur input */ 
{
    document.getElementsByClassName("cardCreateEdit")[x].addEventListener("blur", function(){
        this.parentElement.classList.toggle("hidden");
        this.parentElement.parentElement.firstElementChild.classList.toggle("hidden");
    });
}


for(x = 0; x < document.getElementsByClassName("buttonCancel").length -1; x++)/*  cancel button create card  */
{
    document.getElementsByClassName("buttonCancel")[x].onclick = function() {
        this.parentElement.parentElement.classList.toggle("hidden");
        this.parentElement.parentElement.parentElement.firstElementChild.classList.toggle("hidden")
    }
}




