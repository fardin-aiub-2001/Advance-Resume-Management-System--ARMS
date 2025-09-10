<?php

    $nam="";
    //$ner="";
    $eml="";
    //$emlerr="";
    $pnum="";
   // $pnumerr="";
    $pass="";
    //$passerr="";
    $radio="";
    

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nam=$_POST["nam"];
        $eml=$_POST["eml"];
        $pnum=$_POST["pnum"];
        $pass=$_POST["pass"];
        $radio=$_POST["role"];

        $conn=mysqli_connect("localhost","root","","arms");
        
        if(!$conn){
            echo "<script> alert ('Connection Error...');</script>";
            exit;
        }

        
        $sql="INSERT INTO user (name,email,phone_number,password,type,userid) VALUES (?, ?, ?, ?, ?, '')";
        $stmt=mysqli_prepare($conn,$sql);

        if($stmt){
            mysqli_stmt_bind_param($stmt, "sssss", $nam, $eml, $pnum, $pass, $radio);
            if(mysqli_stmt_execute($stmt)){
                echo "<script>alert('Successfully added you');</script>";
            }
            else {
            echo "<script>alert('Execution failed: " . mysqli_stmt_error($stmt) . "');</script>";
        }
        mysqli_stmt_close($stmt);
        }
        else {
        echo "<script>alert('Statement preparation failed: " . mysqli_error($conn) . "');</script>";
    }
    } 
                    
?>