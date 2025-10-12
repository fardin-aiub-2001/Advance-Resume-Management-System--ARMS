<?php

    $userid=$_COOKIE['userid'];
    $name=$_COOKIE['name']; 
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Result - ARMS</title>
        <link rel="stylesheet" href="result.css">
        <script src="result.js" defer></script>
    </head>
    <body id="dbody">
        <header id="head">
            <div id="d1">
                <div id="d2">
                    <span id="name"></span>NAME : <?php echo $name; ?><br>
                    <span id="uid">USERID : <?php  echo $userid; ?></span>
                </div>

                <div id="d3">
                    <button id="logout">Logout</button>
                </div>

            </div>

        </header>
        <h1 id="h1">Result Details</h1>
        <hr>
        <button id="add">Add</button>
        
        <div id="form">
            <div id="main">
                <table  id="table"><span id="tbname"></span>
                    <tr>
                        <th>Course</th>
                        <th>Credit Hours</th>
                        <th>Grade</th>
                        <th>Semester</th>
                        <th>Year</th>
                    </tr>
                    <?php
                        $conn=new mysqli("127.0.0.1","root","","arms");
                        $query="SELECT * FROM result WHERE userid='$userid'";
                        $result=mysqli_query($conn,$query);
                        $results=array();
                        while($row=mysqli_fetch_assoc($result)){
                            $results[]=$row;
                        }
                        
                        foreach ($results as $row) {
                            echo "<tr>
                                    <td>".htmlspecialchars($row['course'])."</td>
                                    <td>".htmlspecialchars($row['credit'])."</td>
                                    <td>".htmlspecialchars($row['grade'])."</td>
                                    <td>".htmlspecialchars($row['semester'])."</td>
                                    <td>".htmlspecialchars($row['year'])."</td>
                                </tr>";
                        }

                        
                        mysqli_close($conn);
                    ?>
            
            </table>
            </div>
        </div>


        <div id="maindiv">
            <button id="x" style="position:absolute; right:20px;">X</button><br>
            <label id="l1">Add Result Details</label><br><br>
            <form action="../../controller/updateresult.php" method="post" style="display:flex; flex-direction:column; align-items:center;justify-content:center;">
                <input type="text" name="course" id="course" placeholder="Course"><br><br>
                <input type="number" min="1" step="1" max="3" name="credit" id="credit" placeholder="Credit Hour"><br><br>
                <input type="number" name="grade" step="0.01" id="grade" placeholder="Grade"><br><br>
                <input type="text" name="semester" id="semester" placeholder="Semester"><br><br>
                <input type="year" name="year" id="year" placeholder="Year"><br><br>
                <button id="submit">Submit</button>
            </form>
        </div>
        
        <footer id="footer">
        <p id="fp1">Copyright &copy; 2024 ARMS. All rights reserved.</p>
        </footer>
    </body>
</html>