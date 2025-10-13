let add=document.getElementById("add");
let div=document.getElementById("maindiv");
let close=document.getElementById("x");
close.addEventListener("click",hidediv);
function hidediv(event){
    event.preventDefault();
    div.style.display="none";
}


add.addEventListener("click",showdiv);
function showdiv(event){
    event.preventDefault();
    div.style.display="block";
}

let logout = document.getElementById("logout");

function functionout(event) {
    event.preventDefault();
    window.location.href='../welcome/welcome.php';
}

logout.addEventListener("click", functionout);