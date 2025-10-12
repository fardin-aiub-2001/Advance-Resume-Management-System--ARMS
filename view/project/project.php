<?php
    $userid=$_COOKIE['userid'];
    $name=$_COOKIE['name'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Project - ARMS</title>
        <link rel="stylesheet" href="project.css">
        <script src="project.js" defer></script>
    </head>
    <body id="dbody">
        <header id="head">
            <div id="d1">
                <div id="d2">
                    <span id="name"></span>NAME : <?php echo htmlspecialchars($name); ?><br>
                    <span id="uid">USERID : <?php echo htmlspecialchars($userid); ?></span>
                </div>

                <div id="d3">
                    <button id="logout">Logout</button>
                </div>

            </div>

        </header>

        <h1 id="h1">Project Details</h1>
        <hr>
        <button id="add">Add</button>
        <div id="form1">
            <div id="main">
                <table  id="table"><span id="tbname"></span>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Link</th>
                    </tr>
                    <?php
                        $con = mysqli_connect("127.0.0.1", "root", "", "arms");
                        $query = "SELECT title, description, link FROM project WHERE userid='$userid'";
                        $result = mysqli_query($con, $query);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['title'] . "</td>";
                                echo "<td>" . $row['description'] . "</td>";
                                echo "<td><a href='" . $row['link'] . "' target='_blank'>Visit</a></td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='3'>No projects found.</td></tr>";
                        }
?>
            </table>
            </div> 
            
            <div id="fdiv">
                <button id="x" style="position:absolute; right:15px;top:10px;">X</button><br><br>
                <label id="l1" style="color:bisque;">Project Details</label><br>
                <form id="form" action="../../controller/project.php" method="post">
                    <br>
                    <input type="text" id="i1" name="title" placeholder="Title"><br><br>
                    <input type="text" id="i2" name="description" placeholder="Description"><br><br>
                    <input type="text" id="i3" name="link" placeholder="Link"><br><br>
                    <input id="submit" type="submit" value="submit"> 
                </form>
            </div>
        
        <footer id="footer">
        <p id="fp1">Copyright &copy; 2024 ARMS. All rights reserved.</p>
        </footer>
    </body>
</html>