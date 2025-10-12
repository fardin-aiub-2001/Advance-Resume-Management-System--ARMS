<?php
    $file=$_FILES["resume"]["name"];
    $tempname=$_FILES["resume"]["tmp_name"];
    $folder="../view/uploaded image/".$file;
    move_uploaded_file($tempname,$folder);
    

    $type=$_POST["type"];
    $userid=$_COOKIE["userid"];
    $conn=mysqli_connect('127.0.0.1','root','','arms');

    $query="SELECT * FROM resume WHERE userid='$userid' AND type='$type'";
    $result=mysqli_query($conn,$query);
    $qtype=mysqli_fetch_assoc($result);
    $mainquery="";
    if($qtype['type']==$type){
        $mainquery="UPDATE resume SET file='$file' WHERE userid='$userid' AND type='$type'";
    }
    else{
        $mainquery="INSERT INTO resume(userid,type,file,resume_id) VALUES('$userid','$type','$file',NULL)";
    }
    $mresult=mysqli_query($conn,$mainquery);
    if($mresult){
        echo "<script>
                alert('Successfully Updated');
                window.location.href='../view/resume/resume.php';
                </script>";
    }
?>