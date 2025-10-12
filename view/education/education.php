
<?php
    $userid=$_COOKIE['userid'];
    $username=$_COOKIE['name'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Education - ARMS</title>
        <link rel="stylesheet" href="education.css">
        <script src="education.js" defer></script>
    </head>
    <body id="dbody">
        <header id="head">
            <div id="d1">
                <div id="d2">
                    <span id="name"></span>NAME : <?php echo $userid; ?><br>
                    <span id="uid">USERID : <?php echo $username; ?></span>
                </div>

                <div id="d3">
                    <button id="logout">Logout</button>
                </div>

            </div>

        </header>

        <h1 id="h1">Education Details</h1>
        <hr>
        <button id="add">Add</button>
    <?php
    /*<div id="form">  
        <div id="main">
            <span id="degree"></span><br>
            <hr>
            <label> Field of Study  : </label>
                <span id="field"></span><br>
            <label> Institute       : </label>
                <span id="institute"></span><br>
            <label> Year of Passing : </label>
                <span id="year"></span><br>
            <label> GPA/Percentage  : </label>
                <span id="gpa"></span><br>
            <button id="delete">Delete</button>
        </div>
    </div>*/
    ?>

    <div id="form">

            <button id="x" style="position:absolute; right:20px;">X</button><br>
            
        <form id="eduform" action="../../controller/education.php" method="post">
            <label id="l1">Add Education Details</label><br><br>
            <select id="degree" name="degree" required style="font-size:16px;">
                <option value="" disabled selected>Select Degree</option>
                <option value="Junior School Certificate">Junior School Certificate</option>
                <option value="Secondary School Certificate">Secondary School Certificate</option>
                <option value="Higher Secondary Certificate">Higher Secondary Certificate</option>
                <option value="Bachelor of Science">Bachelor of Science</option>
                <option value="Bachelor of Arts">Bachelor of Arts</option>
                <option value="Bachelor of Commerce">Bachelor of Commerce</option>
                <option value="Bachelor of Business Administration">Bachelor of Business Administration</option>
                <option value="Bachelor of Engineering">Bachelor of Engineering</option>
                <option value="Bachelor of Technology">Bachelor of Technology</option>
                <option value="Bachelor of Laws">Bachelor of Laws</option>
                <option value="Bachelor of Medicine, Bachelor of Surgery">Bachelor of Medicine, Bachelor of Surgery</option>
                <option value="Bachelor of Pharmacy">Bachelor of Pharmacy</option>
                <option value="Bachelor of Architecture">Bachelor of Architecture</option>
                <option value="Master of Pharmacy">Master of Pharmacy</option>
                <option value="Master of Laws">Master of Laws</option>
                <option value="Master of Science">Master of Science</option>
                <option value="Master of Arts">Master of Arts</option>
                <option value="Master of Commerce">Master of Commerce</option>
                <option value="Master of Business Administration">Master of Business Administration</option>
                <option value="Master of Engineering">Master of Engineering</option>
                <option value="Master of Technology">Master of Technology</option>
                <option value="Doctor of Philosophy">Doctor of Philosophy</option>
                <option value="Post Doctoral">Post Doctoral</option>
                <option value="Other">Other</option>
            </select><br>
            <input type="text" id="field" name="field" placeholder="Field of Study" required><br>
            <input type="text" id="institute" name="institute" placeholder="Institute Name" required><br>
            <label id="l">Year of passing: </label>
            <input type="date" id="year" name="year" placeholder="Year of Passing" required><br>
            <input type="number" min="0" step="0.01" max="5.00" id="gpa" name="gpa" placeholder="GPA/Percentage" required><br><br>
            <div style="display:box;  justify-content:center; align-items:center;">
                <input type="radio" id="status1" name="status" value="Completed" >Completed
                <input type="radio" id="status2" name="status" value="Ongoing" >Ongoing<br><br>
            </div><br><br>
            <input type="submit" id="save" value="Save">
        </form>

    </div>

    <div id="records" style="display: flex; flex-wrap: wrap; justify-content: center; align-items: flex-start; gap: 20px; margin: 20px 0;">
        <?php
            $conn=mysqli_connect("127.0.0.1", "root", "", "arms");
            $query="SELECT * FROM education WHERE userid='$userid'";
            $result=mysqli_query($conn, $query);
            if (mysqli_num_rows($result)>0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $record_id=$row['id'] ?? '';
                    echo '<div class="record-box" style="width: 45%; max-width: 350px; height: 300px; border: 1px solid #ccc; border-radius: 8px; padding: 15px; background-color: #f9f9f9; box-shadow: 0 2px 5px rgba(0,0,0,0.1); box-sizing: border-box; display: flex; flex-direction: column; justify-content: space-between;">
                        <div class="main education-entry" data-id="'.htmlspecialchars($record_id) . '" style="flex: 1; display: flex; flex-direction: column; justify-content: space-between; overflow: hidden;">
                            <div>
                                <span class="degree" style="font-weight: bold; font-size: 18px; margin-bottom: 10px; display: block;">'.htmlspecialchars($row['degree']) . '</span>
                                <hr style="margin: 10px 0; border: none; border-top: 1px solid #ddd;">
                                <label style="font-weight: bold;">Field of Study:</label>
                                <span class="field" style="display: block; margin-bottom: 5px;">'.htmlspecialchars($row['field']) .'</span>
                                <label style="font-weight: bold;">Institute:</label>
                                <span class="institute" style="display: block; margin-bottom: 5px;">'.htmlspecialchars($row['institute']) . '</span>   
                                <label style="font-weight: bold;">Year of Passing:</label>
                                <span class="year" style="display: block; margin-bottom: 5px;">'.htmlspecialchars($row['year']) .'</span>                             
                                <label style="font-weight: bold;">GPA/Percentage:</label>
                                <span class="gpa" style="display: block; margin-bottom: 5px;">'.htmlspecialchars($row['gpa']) .'</span>
                                <label style="font-weight: bold;">Status:</label>
                                <span class="status" style="display: block; padding: 5px; background-color: #e9e9e9; border-radius: 4px; font-weight: bold;">' . htmlspecialchars($row['status'] ?? 'N/A') . '</span>
                            </div>
                        </div>
                    </div>';
                }
            } else {
                echo '<div style="text-align: center; padding: 20px; width: 100%;">No education details found.</div>';
            }
            mysqli_close($conn);
        ?>
</div>

        
        <footer id="footer">
        <p id="fp1">Copyright &copy; 2024 ARMS. All rights reserved.</p>
        </footer>
    </body>
</html>