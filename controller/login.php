<?php
     $eml="";
     $pass="";

    //cookies
    if(isset($_COOKIE['eml']) && isset($_COOKIE['pass'])){
        $eml= $_COOKIE['eml'];
        $pass= $_COOKIE['pass'];
        header("Location: ../view/dashboard/candidateDashboard.php");
    }
    else{
        $conn= mysqli_connect("127.0.0.1", "root", "", "arms");
        if(isset($_GET['log']) && isset($_GET['logpass'])){
            $eml= $_GET['log'];
            $pass= $_GET['logpass'];

            $query= "SELECT * FROM user WHERE email='$eml' AND password='$pass'";
            $result= mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0){
                $sqlrel= mysqli_fetch_assoc($result);
                setcookie('eml', $eml, time()+86400, '/');
                //setcookie('pass', $pass, time()+86400, '/');
                setcookie('userid', $sqlrel['userid'], time()+86400, '/');
                setcookie('name', $sqlrel['name'], time()+86400, '/');
                if($sqlrel['type']=="candidate"){
                header("Location: ../view/dashboard/candidateDashboard.php");
                }

                else if($sqlrel['type']=="admin"){
                header("Location: ../view/admin/admin.php");
                }
                
            }
            else{
                echo "<script>
                        alert('Invalid email or password');
                        window.location.href = '../view/welcome/welcome.php';
                </script>";   
            }
        }
    }
?>