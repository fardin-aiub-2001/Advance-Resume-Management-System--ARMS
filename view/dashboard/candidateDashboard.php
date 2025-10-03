<?php
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Candidate Dashboard - ARMS</title>
        <link rel="stylesheet" href="candidateStyle.css">
        <script src="candidateScript.js" defer></script>
    </head>
    <body id="dbody">
        <header id="head">
            <div id="d1">
                <div id="d2">
                    <span id="name"></span>NAME : <?php echo $name ?><br>
                    <span id="uid">USERID : <?php echo $userid ?></span>
                </div>

                <div id="d3">
                    <button id="logout">Logout</button>
                </div>

            </div>

        </header>

        <h1>Academic Journey</h1>


        <div id="d4">

            <div id="d5">
                <a href="<?php echo '../generalInfo/generalInfo.php?userid=' . urlencode($userid) . '&name=' . urlencode($name); ?>" style="color:bisque;">
                    <div class="im">
                        <img id="" src="../img/ginfo.gif">
                    </div>
                    <div class="te">
                        <h2>General Information</h2>
                    </div>
                </a>
            </div>
                
            <div id="d6">
                <a href="../family/family.php" style="color:bisque;">
                    <div class="im">
                        <img id="" src="../img/family.gif">
                    </div>
                    <div class="te">
                        <h2>Family Background</h2>
                    </div>
                </a>
            </div>

            <div id="d7">
                <a href="../education/education.php" style="color:bisque;">
                    <div class="im">
                        <img id="" src="../img/education.gif">
                    </div>
                    <div class="te">
                        <h2>Educational Information</h2>
                    </div>
                </a>
            </div>

            <div id="d11">
                <a href="../result/result.php" style="color:bisque;">
                    <div class="im">
                        <img id="" src="../img/result.gif">
                    </div>
                    <div class="te">
                        <h2>Results</h2>
                    </div>
                </a>
            </div>

        </div>

        <div id="d12">

            <div id="d8">
                <a href="../resume/resume.php" style="color:bisque;">
                    <div class="im">
                        <img id="" src="../img/resume.gif">
                    </div>
                    <div class="te">
                        <h2>Resume Snapshot</h2>
                    </div>
                </a>
            </div>

            <div id="d9">
                <a href="../project/project.php" style="color:bisque;">
                    <div class="im">
                        <img id="" src="../img/project.gif">
                    </div>
                    <div class="te">
                        <h2>Projects</h2>
                    </div>
                </a>
            </div>

            <div id="d10">
                <a href="../skills/skill.php" style="color:bisque;">
                    <div class="im">
                        <img id="" src="../img/skill.gif">
                    </div>
                    <div class="te">
                        <h2>Skills</h2>
                    </div>
                </a>
            </div>

            <div id="d13">
                <a href="../connect/connect.php" style="color:bisque;">
                    <div class="im">
                        <img id="" src="../img/social-media.gif">
                    </div>
                    <div class="te">
                        <h2>Connect with me</h2>
                    </div>
                </a>
            </div>


        </div>


        
        <footer id="footer">
        <p id="fp1">Copyright &copy; 2024 ARMS. All rights reserved.</p>
        </footer>
    </body>
</html>