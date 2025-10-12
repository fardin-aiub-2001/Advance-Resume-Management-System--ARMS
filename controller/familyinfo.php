<?php
    $fname=$_POST["f1"];
    $foccu=$_POST["f2"];
    $fdesig=$_POST["f5"];
    $mname=$_POST["f3"];
    $moccu=$_POST["f4"];
    $mdesig=$_POST["f6"];
    $userid=$_COOKIE["userid"];
    
    $conn=mysqli_connect('127.0.0.1','root','','arms');
    $query="SELECT * FROM family WHERE userid='$userid'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==0){
        $mainquery="INSERT INTO family(`userid`, `father_name`, `father_occupation`, `father_designation`, `mother_name`, `mother_occupation`, `mother_designation`, `family_id`) VALUES('$userid','$fname','$foccu','$fdesig','$mname','$moccu','$mdesig','')";
    }
    else{
        $mainquery="UPDATE family SET father_name='$fname', father_occupation='$foccu', father_designation='$fdesig', mother_name='$mname', mother_occupation='$moccu', mother_designation='$mdesig' WHERE userid='$userid'";
    }
    $mresult=mysqli_query($conn,$mainquery);
    if ($mresult) {
        echo "<script>
                    alert('Successfully Updated');
                    window.location.href = '../view/family/family.php';
             </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>