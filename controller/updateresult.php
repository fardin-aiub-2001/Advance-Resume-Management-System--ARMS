<?php
    $course=$_POST['course'];
    $credit=$_POST['credit'];
    $grade=$_POST['grade'];
    $semester=$_POST['semester'];
    $year=$_POST['year'];

    $userid=$_COOKIE['userid'];
    $conn=new mysqli("127.0.0.1","root","","arms");
    $query = "INSERT INTO result (userid, course, credit, grade, semester, year, resultid)
        VALUES ('$userid', '$course', '$credit', '$grade', '$semester', '$year', NULL)";
    
    $result=mysqli_query($conn,$query);
    if($result){
        echo   "<script>alert('Result Details Added Successfully'); 
                window.location.href = '../view/result/result.php';</script>";
    }
    else{
        echo "Error: ".mysqli_error($conn);
    }

    mysqli_close($conn);
?>