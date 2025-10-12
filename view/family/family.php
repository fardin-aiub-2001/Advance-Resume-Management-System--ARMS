<?php
    $userid=$_COOKIE["userid"];
    $name=$_COOKIE["name"];
    $conn=mysqli_connect('127.0.0.1','root','','arms');
    $query="SELECT * FROM family WHERE userid='$userid'";

    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==0){
        $fname="";
        $foccu="";
        $fdesig="";
        $mname="";
        $moccu="";
        $mdesig="";
    }
    else{
        $row=mysqli_fetch_assoc($result);
        $fname=$row["father_name"];
        $foccu=$row["father_occupation"];
        $fdesig=$row["father_designation"];
        $mname=$row["mother_name"];
        $moccu=$row["mother_occupation"];
        $mdesig=$row["mother_designation"];
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Family Information - ARMS</title>
        <link rel="stylesheet" href="family.css">
        <script src="family.js" defer></script>

        <style>
            #x{
                background-color: red;
                color: white;
                border:none;
                padding:5px 10px;
                border-radius: 5px;
                font-size: 16px;
                cursor: pointer;
            }
        </style>

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

        <div id="main">
            <span id="s1">Father's Name       : <?php echo $fname; ?></span>
                <span id="i1"></span><br><br>
            <span id="s2">Occupation          : <?php echo $foccu; ?></span>
                <span id="i2"></span><br><br>
            <span id="s4">Designation         : <?php echo $fdesig; ?></span>
                <span id="i4"></span><br><br>
            <span id="s3">Mothers Name        : <?php echo $mname; ?></span>
                <span id="i3"></span><br><br>
            <span id="s5">Occupation          : <?php echo $moccu; ?></span>
                <span id="i5"></span><br><br>
            <span id="s6">Designation         : <?php echo $mdesig; ?></span>
                <span id="i6"></span><br><br>
        </div><br><br><br> <br>


        <div id="d11" style="display:none;">
            <form id="f" action="../../controller/familyinfo.php" method="post">
                <button id="X" style="position:absolute; right:20px;">X</button><br>
                <label id="l1">Edit Family Information</label><br><br>
                <input type="text" id="f1" name="f1" placeholder="Father's Name"><br>
                <input type="text" id="f2" name="f2" placeholder="Occupation"><br>
                <input type="text" id="f5" name="f5" placeholder="Designation"><br>
                <input type="text" id="f3" name="f3" placeholder="Mother's Name"><br>
                <input type="text" id="f4" name="f4" placeholder="Occupation"><br>
                <input type="text" id="f6" name="f6" placeholder="Designation"><br><br>
                <input type="submit" id="save" value="Update">
        </div>

        <button id="edit">Edit</button>
        
        
        <footer id="footer">
        <p id="fp1">Copyright &copy; 2024 ARMS. All rights reserved.</p>
        </footer>
    </body>
</html>