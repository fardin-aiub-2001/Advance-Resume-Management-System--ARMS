<?php
    //getting image from the form
    $filename=$_FILES["imga"]["name"];
    $tempname=$_FILES["imga"]["tmp_name"];
    $folder="../view/uploaded image/".$filename;
    $userid=$_COOKIE["userid"];
    move_uploaded_file($tempname,$folder);
    //getting other information from the form
    $preadd=$_POST["preadd"];
    $peradd=$_POST["peradd"];
    $about=$_POST["about"];
    $imgg=$filename;
    $squery="SELECT * FROM candidate WHERE userid='$userid'";
    $conn=mysqli_connect('127.0.0.1','root','','arms');
    $sresult=mysqli_query($conn,$squery);
    if(mysqli_num_rows($sresult)==0){
        $mainquery="INSERT INTO candidate(userid,present_address,parmanent_address,about_me,photo) VALUES('$userid','$preadd','$peradd','$about','$folder')";
    }
    else{
        $mainquery="UPDATE candidate SET present_address='$preadd', parmanent_address='$peradd', about_me='$about', photo='$imgg' WHERE userid='$userid'";
    }
    $mresult=mysqli_query($conn,$mainquery);
    if ($mresult) {
    // Query was successful

        echo "<script>
                        alert('Successfully Updated');
                        window.location.href = '../view/generalInfo/generalInfo.php';
             </script>";

        //echo "Information updated successfully.";
    } else {
        // Query failed
        echo "Error: " . mysqli_error($conn);
    }
    mysqli_close($conn);

    
?>