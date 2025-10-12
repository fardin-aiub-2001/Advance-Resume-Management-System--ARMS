<?php
    $userid = $_COOKIE["userid"];
    $platform = $_POST["platform"];
    $link = $_POST["link"];

    $con = mysqli_connect("127.0.0.1", "root", "", "arms");

    $query = "INSERT INTO connect (userid, platform, link, connectid) VALUES ('$userid', '$platform', '$link', NULL)";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo "<script>
                    alert('Successfully Updated');
                    window.location.href = '../view/connect/connect.php';
             </script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
?>