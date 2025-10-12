let x=document.getElementById("X");
let edit=document.getElementById("edit");

d11=document.getElementById("d11");

x.addEventListener("click",doit);
edit.addEventListener("click",dodo);

function doit(event){
    event.preventDefault();
    d11.style.display="none";
}
function dodo(event){
    event.preventDefault();
    d11.style.display="block";
}