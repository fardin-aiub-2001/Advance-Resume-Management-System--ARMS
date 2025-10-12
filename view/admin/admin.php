<?php
$con= mysqli_connect("127.0.0.1", "root", "", "arms");

$candidate_count=0;
$user_count=0;

if ($con) {
    $q1=mysqli_query($con, "SELECT COUNT(*) AS total FROM candidate");
    $q2=mysqli_query($con, "SELECT COUNT(*) AS total FROM user");

    $candidate_count=mysqli_fetch_assoc($q1)['total'];
    $user_count=mysqli_fetch_assoc($q2)['total'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <style>
        body{
            background-color: #08041f;
            color: bisque;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            padding-top: 120px;
        }
        #d1{
            width: 100%;
            height: 100px;
            background-color: bisque;
            box-shadow: 0px 4px 12px rgba(242, 242, 244, 0.6);
            position: absolute;
            top: 0px;
            left: 0px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .stat-box{
            background-color: #1a1440;
            border: 1px solid bisque;
            padding: 20px;
            margin: 10px;
            width: 300px;
            text-align: center;
            box-shadow: 0px 2px 8px rgba(255, 255, 255, 0.2);
            border-radius: 8px;
        }
        .stat-box h2{
            margin-bottom: 10px;
        }
        .stat-box p{
            font-size: 24px;
            font-weight: bold;
            color: #f0e6d2;
        }
        .popup{
            position: fixed;
            top: 120px;
            background-color: #1a1440;
            border: 1px solid bisque;
            padding: 20px;
            width: 90%;
            max-height: 70vh;
            overflow-y: auto;
            display: none;
            z-index: 1000;
        }
        .popup table{
            width: 100%;
            border-collapse: collapse;
            color: bisque;
        }
        .popup th, .popup td{
            border: 1px solid bisque;
            padding: 10px;
            text-align: left;
        }
        .popup th{
            background-color: bisque;
            color: #08041f;
        }
        .close-btn{
            position: absolute;
            top: 10px;
            right: 15px;
            background-color: bisque;
            color: #08041f;
            border: none;
            font-weight: bold;
            padding: 5px 10px;
            cursor: pointer;
        }
        .delete-btn{
            background-color: crimson;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
        .view-btn{
            background-color: teal;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
        img{
            max-width: 80px;
            max-height: 80px;
        }
    </style>
</head>
<body>
    <div id="d1">
        <h1 style="color:#08041f;">Admin Panel</h1>
    </div>

    <div class="stat-box">
        <h2>Total Candidates</h2>
        <p><?php echo $candidate_count; ?></p>
        <button onclick="document.getElementById('candidatePopup').style.display='block'">View</button>
    </div>

    <div class="stat-box">
        <h2>Total Users</h2>
        <p><?php echo $user_count; ?></p>
        <button onclick="document.getElementById('userPopup').style.display='block'">View</button>
    </div>

    <div class="popup" id="candidatePopup">
        <button class="close-btn" onclick="document.getElementById('candidatePopup').style.display='none'">X</button>
        <h2>Candidate Details</h2>
        <table>
            <tr>
                <th>Candidate ID</th>
                <th>User ID</th>
                <th>Photo</th>
                <th>Present Address</th>
                <th>Permanent Address</th>
                <th>About Me</th>
                <th>Delete</th>
                <th>View</th>
            </tr>
            <?php
            $q=mysqli_query($con, "SELECT candidate_id, userid, photo, present_address, parmanent_address, about_me FROM candidate");
            while ($row=mysqli_fetch_assoc($q)) {
                echo "<tr>";
                echo "<td>{$row['candidate_id']}</td>";
                echo "<td>{$row['userid']}</td>";
                echo "<td><img src='../uploaded image/{$row['photo']}' alt='photo'></td>";
                echo "<td>{$row['present_address']}</td>";
                echo "<td>{$row['parmanent_address']}</td>";
                echo "<td>{$row['about_me']}</td>";
                echo "<td>
                        <form method='post' action='../../controller/delete_candidate.php' onsubmit=\"return confirm('Delete this candidate?')\">
                            <input type='hidden' name='id' value='{$row['candidate_id']}'>
                            <input type='submit' class='delete-btn' value='Delete'>
                        </form>
                      </td>";
                echo "<td>
                        <form method='get' action='../../view/candidate_summary.php'>
                            <input type='hidden' name='userid' value='{$row['userid']}'>
                            <input type='submit' class='view-btn' value='View'>
                        </form>
                      </td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>

    <div class="popup" id="userPopup">
        <button class="close-btn" onclick="document.getElementById('userPopup').style.display='none'">X</button>
        <h2>User Details</h2>
        <table>
            <tr>
                <th>User ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Delete</th>
            </tr>
            <?php
            $q = mysqli_query($con, "SELECT * FROM user");
            while ($row = mysqli_fetch_assoc($q)) {
                echo "<tr>";
                echo "<td>{$row['userid']}</td>";
                echo "<td>{$row['name']}</td>";
                echo "<td>{$row['email']}</td>";
                echo "<td>
                        <form method='post' action='../../controller/delete_user.php' onsubmit=\"return confirm('Delete this user?')\">
                            <input type='hidden' name='id' value='{$row['userid']}'>
                            <input type='submit' class='delete-btn' value='Delete'>
                        </form>
                      </td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>