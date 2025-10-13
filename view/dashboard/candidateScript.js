let logout = document.getElementById("logout");

function functionout(event) {
    event.preventDefault();
    window.location.href='../welcome/welcome.php';
}

logout.addEventListener("click", functionout);