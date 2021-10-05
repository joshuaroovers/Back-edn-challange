
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
        this.parentElement.lastElementChild.classList.toggle("hidden");
        this.parentElement.parentElement.childNodes[3].lastElementChild.classList.toggle("hidden")
        this.parentElement.parentElement.childNodes[3].lastElementChild.firstElementChild.select();
        this.parentElement.parentElement.childNodes[3].scrollTop = this.parentElement.parentElement.childNodes[3].scrollHeight;
    }
}


for(x = 0; x < document.getElementsByClassName("buttonCancel").length; x++)  //cancel button hide form, create card  
{
    document.getElementsByClassName("buttonCancel")[x].onclick = function() {
        this.parentElement.parentElement.firstElementChild.classList.toggle("hidden");
        this.parentElement.classList.toggle("hidden");
        this.parentElement.parentElement.parentElement.childNodes[3].lastElementChild.classList.toggle("hidden")
    }
}

for(x = 0; x < document.getElementsByClassName("buttonSubmit").length; x++)/*  submit button create card  */
{
    document.getElementsByClassName("buttonSubmit")[x].onclick = function() {
        if(this.parentElement.parentElement.parentElement.childNodes[3].lastElementChild.firstElementChild.value == '')
        {
            this.parentElement.parentElement.parentElement.childNodes[3].lastElementChild.firstElementChild.focus();
        }
        else
        {
            this.parentElement.parentElement.parentElement.childNodes[3].lastElementChild.submit();
        }
    }
}
//#region card interaction
for(x = 0; x < document.getElementsByClassName("cardText").length; x++)/* card edit show form */
{
    document.getElementsByClassName("cardText")[x].onclick = function() {
        this.classList.toggle("hidden");
        this.parentElement.lastElementChild.classList.toggle("hidden");
        this.parentElement.lastElementChild.firstElementChild.select();
    }
}

for(x = 0; x < document.getElementsByClassName("cardEdit").length; x++) /* card edit hide form on blur */ 
{
    document.getElementsByClassName("cardEdit")[x].addEventListener("blur", function(){
        this.parentElement.classList.toggle("hidden");
        this.parentElement.parentElement.firstElementChild.classList.toggle("hidden");
    });
}
//#endregion

//#region card dropdown
for(x = 0; x < document.getElementsByClassName("cardButtonDropDown").length; x++) /* flip button arrow */
{
    document.getElementsByClassName("cardButtonDropDown")[x].onclick = function() {
        this.classList.toggle("cbddFlip");
        this.parentElement.lastElementChild.classList.toggle("hidden");
    }
}

for(x = 0; x < document.getElementsByClassName("cardDescText").length; x++) /* swap to card desc form */
{
    document.getElementsByClassName("cardDescText")[x].onclick = function() {
        this.classList.toggle("hidden");
        this.parentElement.lastElementChild.classList.toggle("hidden")
        this.parentElement.lastElementChild.firstElementChild.select();
    }
}

for(x = 0; x < document.getElementsByClassName("cardDescText").length; x++) /* hide card desc form on blur */ 
{
    document.getElementsByClassName("cardDescText")[x].parentElement.lastElementChild.firstElementChild.addEventListener("blur", function(){
        this.parentElement.classList.toggle("hidden");
        this.parentElement.parentElement.firstElementChild.classList.toggle("hidden");
    });
}

for(x = 0; x < document.getElementsByClassName("listOptionsButton").length; x++) /* toggle list menu */
{
    document.getElementsByClassName("listOptionsButton")[x].onclick = function() {
        this.parentElement.childNodes[3].classList.toggle("hidden");
    }
}
//#endregion