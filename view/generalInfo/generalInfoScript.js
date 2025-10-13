let edit=document.getElementById("edit");
let d101=document.getElementById("d101");
let c=document.getElementById("c");
let img = document.getElementById("imga").value;
let preadd = document.getElementById("preadd").value;
let peradd = document.getElementById("peradd").value;
let about = document.getElementById("about").value;

let imgerr = document.getElementById("imgerr");
let preadderr = document.getElementById("preadderr");
let peradderr = document.getElementById("peradderr");
let abouterr = document.getElementById("abouterr");

let logout = document.getElementById("logout");

function functionout(event) {
    event.preventDefault();
    window.location.href='../welcome/welcome.php';
}

logout.addEventListener("click", functionout);

edit.addEventListener("click",load);
function load(){
    d101.style.display="flex";
}
c.addEventListener("click",cloose);
function cloose(){
    d101.style.display="none";
}

