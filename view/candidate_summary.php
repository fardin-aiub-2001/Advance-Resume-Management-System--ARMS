<?php
$con = mysqli_connect("127.0.0.1", "root", "", "arms");
$userid = $_GET['userid'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Candidate Summary</title>
    <style>
        body {
            background-color: #08041f;
            color: bisque;
            font-family: Arial, sans-serif;
            padding: 40px;
        }
        h1, h2 {
            color: bisque;
            border-bottom: 1px solid bisque;
            padding-bottom: 5px;
        }
        .section {
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid bisque;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: bisque;
            color: #08041f;
        }
        img {
            max-width: 120px;
            max-height: 120px;
        }
        a {
            color: lightblue;
        }
    </style>
</head>
<body>
    <h1>Candidate Summary</h1>

    <div class="section">
        <h2>Basic Info</h2>
        <?php
        $q = mysqli_query($con, "SELECT * FROM candidate WHERE userid='$userid'");
        if ($row = mysqli_fetch_assoc($q)) {
            echo "<p><strong>Candidate ID:</strong> {$row['candidate_id']}</p>";
            echo "<p><strong>User ID:</strong> {$row['userid']}</p>";
            echo "<p><strong>Present Address:</strong> {$row['present_address']}</p>";
            echo "<p><strong>Permanent Address:</strong> {$row['parmanent_address']}</p>";
            echo "<p><strong>About Me:</strong> {$row['about_me']}</p>";
            echo "<p><strong>Photo:</strong><br><img src='uploaded image/{$row['photo']}' alt='photo'></p>";
        } else {
            echo "<p>No candidate data found.</p>";
        }
        ?>
    </div>

    <div class="section">
        <h2>Education</h2>
        <table>
            <tr>
                <th>Institute</th><th>Degree</th><th>Field</th><th>Year</th><th>GPA</th><th>Status</th>
            </tr>
            <?php
            $q = mysqli_query($con, "SELECT * FROM education WHERE userid='$userid'");
            while ($row = mysqli_fetch_assoc($q)) {
                echo "<tr>
                    <td>{$row['institute']}</td>
                    <td>{$row['degree']}</td>
                    <td>{$row['field']}</td>
                    <td>{$row['year']}</td>
                    <td>{$row['gpa']}</td>
                    <td>{$row['status']}</td>
                </tr>";
            }
            ?>
        </table>
    </div>

    <div class="section">
        <h2>Family Info</h2>
        <?php
        $q = mysqli_query($con, "SELECT * FROM family WHERE userid='$userid'");
        if ($row = mysqli_fetch_assoc($q)) {
            echo "<p><strong>Father:</strong> {$row['father_name']} ({$row['father_occupation']}, {$row['father_designation']})</p>";
            echo "<p><strong>Mother:</strong> {$row['mother_name']} ({$row['mother_occupation']}, {$row['mother_designation']})</p>";
        } else {
            echo "<p>No family data found.</p>";
        }
        ?>
    </div>

    <div class="section">
        <h2>Projects</h2>
        <table>
            <tr>
                <th>Title</th><th>Description</th><th>Link</th>
            </tr>
            <?php
            $q = mysqli_query($con, "SELECT * FROM project WHERE userid='$userid'");
            while ($row = mysqli_fetch_assoc($q)) {
                echo "<tr>
                    <td>{$row['title']}</td>
                    <td>{$row['description']}</td>
                    <td><a href='{$row['link']}' target='_blank'>Visit</a></td>
                </tr>";
            }
            ?>
        </table>
    </div>

    <div class="section">
        <h2>Resume</h2>
        <?php
        $q = mysqli_query($con, "SELECT * FROM resume WHERE userid='$userid'");
        if ($row = mysqli_fetch_assoc($q)) {
            echo "<p><a href='uploaded image/{$row['file']}' target='_blank'>Download Resume</a></p>";
        } else {
            echo "<p>No resume uploaded.</p>";
        }
        ?>
    </div>

    <div class="section">
        <h2>Results</h2>
        <table>
            <tr>
                <th>Course</th><th>Credit</th><th>Grade</th><th>Semester</th><th>Year</th>
            </tr>
            <?php
            $q = mysqli_query($con, "SELECT * FROM result WHERE userid='$userid'");
            while ($row = mysqli_fetch_assoc($q)) {
                $course = isset($row['course']) ? $row['course'] : 'N/A';
                $credit = isset($row['credit']) ? $row['credit'] : 'N/A';
                $grade = isset($row['grade']) ? $row['grade'] : 'N/A';
                $semester = isset($row['semester']) ? $row['semester'] : 'N/A';
                $year = isset($row['year']) ? $row['year'] : 'N/A';

                echo "<tr>
                    <td>$course</td>
                    <td>$credit</td>
                    <td>$grade</td>
                    <td>$semester</td>
                    <td>$year</td>
                </tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>