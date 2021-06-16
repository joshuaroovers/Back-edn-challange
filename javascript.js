

document.getElementById("buttonCreateList").onclick = function() {
    document.getElementById("buttonCreateListActive").style.display = 'inline-block';
    document.getElementById("buttonCreateListActive").firstElementChild.firstElementChild.focus()
    document.getElementById("buttonCreateList").style.display = 'none';
}/* why is firstChild different in css compared to js I am going to scream    also firstElementChild otherwise it might give null for some reason*/

