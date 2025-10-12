let add=document.getElementById("add");
let close=document.getElementById("x");
let div=document.getElementById("fdiv");

add.addEventListener("click",doit);
function doit(event){
    event.preventDefault();
    div.style.display="flex";
}
close.addEventListener("click",dodo);
function dodo(event){
    event.preventDefault();
    div.style.display="none";
}
