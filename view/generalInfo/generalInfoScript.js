let edit=document.getElementById("edit");
let d101=document.getElementById("d101");
let c=document.getElementById("c");

let img = document.getElementById("img").value;
let preadd = document.getElementById("preadd").value;
let peradd = document.getElementById("peradd").value;
let about = document.getElementById("about").value;

let imgerr = document.getElementById("imgerr");
let preadderr = document.getElementById("preadderr");
let peradderr = document.getElementById("peradderr");
let abouterr = document.getElementById("abouterr");



edit.addEventListener("click",load);
function load(){
    d101.style.display="flex";
}
c.addEventListener("click",close);
function close(){
    d101.style.display="none";
}
