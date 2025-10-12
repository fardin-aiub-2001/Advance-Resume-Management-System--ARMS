<?php
    $userid = $_COOKIE["userid"];
    $title = $_POST["title"];
    $description = $_POST["description"];
    $link = $_POST["link"];

    $con = mysqli_connect("127.0.0.1", "root", "", "arms");

    $query = "INSERT INTO project (userid, title, description, link, project_id) VALUES ('$userid', '$title', '$description', '$link', NULL)";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo "<script>
                    alert('Successfully Updated');
                    window.location.href = '../view/project/project.php';
             </script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
?>