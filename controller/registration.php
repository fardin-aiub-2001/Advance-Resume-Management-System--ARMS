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
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $name= $_POST['nam'];
        $email= $_POST['eml'];
        $pnum= $_POST['pnum'];
        $pass= $_POST['pass'];
        $radio= $_POST['role'];

        $query1= "SELECT * FROM user WHERE email='$email'";
        $query2= "SELECT * FROM user WHERE phone_number='$pnum'";
        $con= mysqli_connect("127.0.0.1", "root", "", "arms");

        $result1= mysqli_query($con, $query1);
        if(mysqli_num_rows($result1) > 0){
            echo "<script>
                        alert('Email already exists');
                        window.location.href = '../view/welcome/welcome.php';
                </script>";   
        }
        else{
            $result2= mysqli_query($con, $query2);
            if(mysqli_num_rows($result2) > 0){
                echo "Phone number already exists";
            }
            else{
                $query3= "INSERT INTO user (name, email, phone_number, password, type) VALUES ('$name', '$email', '$pnum', '$pass', '$radio')";
                if(mysqli_query($con, $query3)){
                    echo "Registration successful";
                    header("Location: ../view/welcome/welcome.php");
                }
                else{
                    echo "Error: ". mysqli_error($con);
                }
            }
        }
    }
        
?>