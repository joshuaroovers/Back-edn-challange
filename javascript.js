
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


/* for(x = 0; x < document.getElementsByClassName("createCardEdit").length; x++)  //hide create card form on input blur  
{
    document.getElementsByClassName("createCardEdit")[x].addEventListener("blur", function(){
        this.parentElement.classList.toggle("hidden");
        this.parentElement.parentElement.parentElement.lastElementChild.firstElementChild.classList.toggle("hidden");
        this.parentElement.parentElement.parentElement.lastElementChild.lastElementChild.classList.toggle("hidden");
    });
} */ //this breakes all other buttons :p

for(x = 0; x < document.getElementsByClassName("buttonCancel").length -1; x++)  //cancel button hide form, create card  
{
    document.getElementsByClassName("buttonCancel")[x].onclick = function() {
        this.parentElement.parentElement.firstElementChild.classList.toggle("hidden");
        this.parentElement.classList.toggle("hidden");
        this.parentElement.parentElement.parentElement.childNodes[3].lastElementChild.classList.toggle("hidden")
    }
}/* technically I could just remove the functionality of the button cuz it already hides everything on blur which isn't great behavior
which is why I removed it dum dum but now it won't submit cuz of the blur so I do need it
*/

for(x = 0; x < document.getElementsByClassName("buttonSubmit").length -1; x++)/*  submit button create card  */
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
for(x = 0; x < document.getElementsByClassName("cardButtonDropDown").length; x++)
{
    document.getElementsByClassName("cardButtonDropDown")[x].onclick = function() {
        this.classList.toggle("cbddFlip");
        this.parentElement.lastElementChild.classList.toggle("hidden");
        /* dropdown = document.getElementsByClassName("cardDropDown")[x];
        dropdown.classList.toggle("hidden"); */
    }
}

for(x = 0; x < document.getElementsByClassName("cardDescText").length; x++)
{
    document.getElementsByClassName("cardDescText")[x].onclick = function() {
        this.classList.toggle("hidden");
        this.parentElement.lastElementChild.classList.toggle("hidden")
        this.parentElement.lastElementChild.firstElementChild.select();
    }
}
for(x = 0; x < document.getElementsByClassName("cardDescText").length; x++)   
{
    document.getElementsByClassName("cardDescText")[x].parentElement.lastElementChild.firstElementChild.addEventListener("blur", function(){
        this.parentElement.classList.toggle("hidden");
        this.parentElement.parentElement.firstElementChild.classList.toggle("hidden");
    });
}
/* for(x = 0; x < document.getElementsByClassName("cardDelete").length; x++) //don't need it I guess but it's got an error now and I didn't change anything??
{
    document.getElementsByClassName("cardDelete")[x].onclick() = function() {
        this.parentElement.submit();
    }
} */
//#endregion