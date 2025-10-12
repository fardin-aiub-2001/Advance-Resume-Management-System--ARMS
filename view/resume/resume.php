<?php
    $name=$_COOKIE['name'];
    $userid=$_COOKIE['userid'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>View and Update Resume - ARMS</title>
        <link rel="stylesheet" href="resume.css">
        <script src="resume.js" defer></script>
    </head>
    <body id="dbody">
        <header id="head">
            <div id="d1">
                <div id="d2">
                    <span id="name"></span>NAME : <?php echo $name; ?><br>
                    <span id="uid">USERID : <?php echo $userid; ?></span>
                </div>

                <div id="d3">
                    <button id="logout">Logout</button>
                </div>

            </div>

        </header>

        <h1 id="h1">Resume and Cv</h1>
        <hr>
        <div id="dbut">
            <button id="add">Add</button>
        </div>

        <?php
            $conn = mysqli_connect('127.0.0.1', 'root', '', 'arms');
            $query = "SELECT * FROM resume WHERE userid='$userid'";
            $result = mysqli_query($conn, $query);

            $resumes = array();
            while ($row = mysqli_fetch_assoc($result)) {
                $resumes[] = $row;
            }

            foreach ($resumes as $row) {
                echo "<div class='image-div' style='text-align: center; margin: 10px 0;'>
                            <img src='../uploaded image/" . htmlspecialchars($row['file']) . "' style='max-width: 100%; height: auto; border: 1px solid #ccc; border-radius: 4px;'>
                    </div>";
}

        ?>

        <div id="imdiv">
            <button id="x" style="position:absolute; right:20px;">X</button><br><br>
            <label id="l1" style="display:block;text-align:center;">Upload Resume/CV</label><br><br>
            <form id="form" action="../../controller/updateresume.php" method="post" enctype="multipart/form-data"style="display: flex; flex-direction: column; align-items: center;">

                <div style="width: 100%; display: flex; justify-content: center;">
                    <input type="file" id="resume" name="resume"accept=".pdf,.doc,.docx,.jpg,.jpeg,.png"style="margin: 0 auto;">
                </div>
                <br><br>

                <div style="display: inline-block; text-align: center; font-size: 16px; margin-bottom: 20px;">
                    <label id="l2">Select Type:</label>
                    <input type="radio" id="res" name="type" value="resume">RESUME
                    <input type="radio" name="type" value="cv">CV
                </div>
                <br><br>

                <button type="submit" id="submit">Upload</button>
            </form>
        </div>
        



        
        <footer id="footer">
        <p id="fp1">Copyright &copy; 2024 ARMS. All rights reserved.</p>
        </footer>
    </body>
</html>