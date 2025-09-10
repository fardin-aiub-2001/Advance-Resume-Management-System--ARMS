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
                    <span id="name"></span>NAME : <br>
                    <span id="uid">USERID : </span>
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

        <div style="display: flex;justify-content:center;flex-direction:column; align-items: center; gap: 20px; margin-top: 20px;">
            <div id="resimg">
                <img id="resimg1" src="" alt="Resume Image">
            </div>

            <div id="cvimg">
                <img id="cvimg1" src="" alt="CV Image">
            </div>
        </div>
        



        
        <footer id="footer">
        <p id="fp1">Copyright &copy; 2024 ARMS. All rights reserved.</p>
        </footer>
    </body>
</html>