

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
    con = document.getElementsByClassName("editListName")[pos];

    Lname = con.firstElementChild.innerHTML
    console.log(Lname)
    console.log(con.lastElementChild.innerHTML)/*
    con.lastElementChild.value = Lname;
    console.log(con.lastElementChild.value) */
    con.firstElementChild.classList.toggle("hidden");
    con.lastElementChild.classList.toggle("hidden");
    con.lastElementChild.firstElementChild.select();
}

