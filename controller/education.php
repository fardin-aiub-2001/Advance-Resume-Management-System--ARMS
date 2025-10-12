<?php
    $userid=$_COOKIE['userid'];
    $degree=htmlspecialchars($_POST['degree']);
    $field=htmlspecialchars($_POST['field']);
    $institute=htmlspecialchars($_POST['institute']);
    $year=htmlspecialchars($_POST['year']);
    $gpa=htmlspecialchars($_POST['gpa']);
    $status=htmlspecialchars($_POST['status']);
    $conn=new mysqli("127.0.0.1","root","","arms");
    $query = "INSERT INTO education (userid, institute, degree, field, year, gpa, status)
        VALUES ('$userid', '$institute', '$degree', '$field', '$year', '$gpa', '$status')";
    $result=mysqli_query($conn,$query);
    if($result){
        echo    "<script>alert('Education Details Added Successfully'); 
                window.location.href = '../view/education/education.php';</script>";
    }
    else{
        echo "Error: ".mysqli_error($conn);
    }
?>