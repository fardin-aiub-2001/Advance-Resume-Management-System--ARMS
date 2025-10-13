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
let logout = document.getElementById("logout");

function functionout(event) {
    event.preventDefault();
    window.location.href='../welcome/welcome.php';
}

logout.addEventListener("click", functionout);