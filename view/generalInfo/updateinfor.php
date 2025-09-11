<?php
    $img="";
    $preadd="";
    $peradd="";
    $about="";
    $userid=$_GET["userid"] ?? "";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $img=$_POST["img"];
        $preadd=$_POST["preadd"];
        $peradd=$_POST["peradd"];
        $about=$_POST["about"];
        

        $conn=mysqli_connect("localhost","root","","arms");
        if(!$conn){
            echo "<script>alert('Connection failed...');<script>";
            exit;
        }
        $sql="INSERT INTO candidate (userid, photo, present_address, parmanent_address, about_me) VALUES (?, ?, ?, ?, ?)";
        $stmt=mysqli_prepare($conn,$sql);
        if($stmt){
            mysqli_stmt_bind_param($stmt, 'sssss', $userid, $img, $preadd, $peradd, $about);
            if(mysqli_stmt_execute($stmt)){
                echo "<script>alert('Information updated successfully');</script>";
            }
            else {
                echo "<script>alert('Execution failed: " . mysqli_stmt_error($stmt) . "');</script>";
            }
            mysqli_stmt_close($stmt);

        }
        else {
            echo "<script>alert('Statement preparation failed: " . mysqli_error($conn) . "');</script>";
        }
        mysqli_close($conn);
    }   

?>