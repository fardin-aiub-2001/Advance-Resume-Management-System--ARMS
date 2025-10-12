<?php
$con = mysqli_connect("127.0.0.1", "root", "", "arms");
$id = $_POST['id'];
mysqli_query($con, "DELETE FROM user WHERE userid='$id'");
header("Location: ../view/admin/admin.php");
?>