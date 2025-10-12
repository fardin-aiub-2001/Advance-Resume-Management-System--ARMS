<?php
$con = mysqli_connect("127.0.0.1", "root", "", "arms");
$id = $_POST['id'];
mysqli_query($con, "DELETE FROM candidate WHERE candidate_id='$id'");
header("Location: ../view/admin/admin.php");
?>