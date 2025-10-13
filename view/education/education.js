let add=document.getElementById("add");
let form=document.getElementById("form");
let close=document.getElementById("x");

close.addEventListener("click",dodo);

function dodo(event){
    event.preventDefault();
    form.style.display="none";
}
add.addEventListener("click",doit);

function doit(event){
    event.preventDefault();
    form.style.display="flex";
    form.style.justifyContent="center";
    form.style.alignItems="center";
}


let logout = document.getElementById("logout");

function functionout(event) {
    event.preventDefault();
    window.location.href='../welcome/welcome.php';
}

logout.addEventListener("click", functionout);
