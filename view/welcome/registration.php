<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name=$_POST['nam'];
    $email=$_POST['eml'];
    $phone=$_POST['pnum'];
    $password=$_POST['pass'];
    $type=$_POST['role'];

    if ($name && $email && $phone && $password && $type) {
        // Connect to database
        $con=new mysqli('localhost','root','','arms');
        if($con->connect_error) {
            die('Connection Failed: '.$con->connect_error);
        }
        // Generate custom User ID
        $result=$con->query("SELECT COUNT(*) AS total FROM `user`");
        $row=$result->fetch_assoc();
        $count=$row['total']+1;
        $userid="USR".str_pad($count,6,"0",STR_PAD_LEFT);

        // Prepare and execute insert
        $stmt = $con->prepare("INSERT INTO `user` (`userid`, `name`, `email`, `phone_number`, `password`, `type`) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $userid, $name, $email, $phone, $password, $type);

        if ($stmt->execute()) {
            // Start session and redirect
            session_start();
            $_SESSION['userid'] = $userid;
            $_SESSION['name'] = $name;

            echo    "<script>
                        alert('Registration successful! Please log in to explore more.');
                        window.location.href = 'dashboard.php';
                    </script>";
    exit();
        } else {
            echo "Registration failed: ".$stmt->error;
        }
        
        $stmt->close();
        $con->close();
    } else {
        echo "Please fill in all required fields.";
    }
} else {
    echo "Invalid request method.";
}
?>