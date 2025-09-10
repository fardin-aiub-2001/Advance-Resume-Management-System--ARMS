<?php
   $email="";
   $password=""; 

    if($_SERVER["REQUEST_METHOD"]=="GET"){

            if (isset($_GET["log"]) && isset($_GET["logpass"])) {
            $email = $_GET["log"];
            $password = $_GET["logpass"];
        } else {
            $email = "";
            $password = "";
    }

        $conn=mysqli_connect("localhost","root","","arms");
        
        if(!$conn){
            echo "<script>alert('Connection Failed...');</script>";
            exit;
        }
        $sql=   "SELECT userid
                FROM user
                WHERE email=? and password=?";
        $stmt=mysqli_prepare($conn,$sql);
        
        if($stmt){
            mysqli_stmt_bind_param($stmt,"ss",$email,$password);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            
            if(mysqli_stmt_num_rows($stmt)>=1){
                    mysqli_stmt_bind_result($stmt, $userid);
                    mysqli_stmt_fetch($stmt);

                header("Location: ../dashboard/candidateDashboard.php?userid=".urlencode($userid));
                exit;
            }
            else {
                echo "<script>alert('Invalid email or password');</script>";
            }
            
        }
        else {
            
        echo "<script>alert('Statement preparation failed: " . mysqli_error($conn) . "');</script>";
    }
        
        mysqli_stmt_close($stmt);
        
    }
        mysqli_close($conn);

     
?>