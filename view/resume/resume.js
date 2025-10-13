let add=document.getElementById("add");
let form=document.getElementById("imdiv");
let close=document.getElementById("x");
close.addEventListener("click",dodo);
function dodo(event){
    event.preventDefault();
    form.style.display="none";
}
add.addEventListener("click",doit);
function doit(event){
    event.preventDefault();
    form.style.display="block";
}

let logout = document.getElementById("logout");

function functionout(event) {
    event.preventDefault();
    window.location.href='../welcome/welcome.php';
}

logout.addEventListener("click", functionout);