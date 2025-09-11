<?php
    $userid=$_GET["userid"];
    $name=$_GET["name"];
    /*<?php echo "" ?>*/
?>


<!DOCTYPE html>
<html>
    <head>
        <title>General Information - ARMS</title>
        <link rel="stylesheet" href="generalInfoStyle.css">
        <script src="generalInfoScript.js" defer></script>
        <style>
            #d101{
                background-color: bisque;
                border:1px solid black;
                width: 400px;
                height: 520px;
                border-radius: 15px;
                padding:15px;
                position:absolute;
                top:150px;
                left:50%;
                transform: translateX(-50%);
                display: none;
                justify-content: center;
            }

            #preadd, #peradd{
                width:100%;
                height:30px;
                border-radius: 5px;
                border:1px solid black;
                padding:5px;
                font-size: 16px;
                margin-bottom: 10px;
            }
            #imgerr, #preadderr, #peradderr, #abouterr{
                color:red;
                font-size: 14px;
            }
            #about{
                width:90%;
                border-radius: 5px;
                border:1px solid black;
                padding:5px;
                font-size: 16px;
                margin-bottom: 10px;
            }
            #img{
                font-size: 16px;
                margin-bottom: 10px;
            }
            #save{
                background-color: green;
                color: white;
                border:none;
                padding:10px 20px;
                border-radius: 5px;
                font-size: 16px;
                cursor: pointer;
            }
            #c{
                background-color: red;
                color: white;
                border:none;
                padding:5px 10px;
                border-radius: 5px;
                font-size: 16px;
                cursor: pointer;
                position:absolute;
                top:10px;
                right:10px;
            }
            #f1{
                text-align: center;
            }
            #c:hover{
                background-color: darkred;
            }
            #save:hover{
                background-color: darkgreen;
            }
        </style>
        

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
        <br>


        <div id="d10">
            <img id="myImg">
        </div>

        <div id="main">
            <span id="s1">Name                : </span>
                <span id="i1"></span><br><br>
            <span id="s2">Email               : </span>
                <span id="i2"></span><br><br>
            <span id="s3">Phone number        : </span>
                <span id="i3"></span><br><br>
            <span id="s5">Present Address     : </span>
                <span id="i4"></span><br><br>
            <span id="s6">Permanent Address   : </span>
                <span id="i5"></span><br><br>
            <span id="s7">About Me            : </span>
                <span id="i6"></span><br><br>
        </div><br><br><br> <br>


        <div id="d101">
            <form id="f1" method="post" action="updateinfor.php?userid=<?php echo urlencode($userid); ?>&name=<?php echo urlencode($name); ?>">
                <button id="c" type="button">X</button><br>
                <h2>Update Your Information</h2><br>
                <input type="file" id="img" name="img" accept="image/*" ><br>
                <span id="imgerr"></span><br>
                <input type="text" name="preadd" id="preadd" placeholder="Enter your present address"><br>
                <span id="preadderr"></span><br>
                <input type="text" name="peradd" id="peradd" placeholder="Enter your parmanent address"><br>
                <span id="peradderr"></span><br>
                <textarea id="about" name="about" rows="8" cols="30" placeholder="Write something about you..."></textarea><br>
                <span id="abouterr"></span><br>
                <input type="submit" id="save" value="Save">
            </form>
        </div>


        <button id="edit">Edit</button>
        
        <footer id="footer">
        <p id="fp1">Copyright &copy; 2024 ARMS. All rights reserved.</p>
        </footer>
    </body>
</html>