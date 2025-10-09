<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to ARMS</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js" defer></script>
    </head>
    <body id="b1">

        <div id="d7">
            <div id="d1">
                <div style="display:flex;">
                    <h1 id="wlc">ARMS</h1>
                    <div id="d6">
                        <button id="but1">Sign In</button>
                        <button id="but2">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="curved_welcome">
            <h1 id="war">Welcome to ARMS</h1>
            <p id="p10">Your Ultimate Academic Resume Management System.</p>
            <p id="p9">Streamline Your Academic Journey with Ease and Efficiency.</p>
        </div>

        <div id="d22">
            <div id="d21">
                <h2 id="h2">Why Choose ARMS?</h2>
                <p id="p11">
                    "ARMS (Academic Result Management System) is more than just a record-keeping tool—it's a bridge between academic achievement and professional opportunity. Designed with both students and employers in mind, ARMS offers a clean, minimalist interface that transforms complex academic data into visually intuitive summaries. Unlike traditional platforms cluttered with redundant tables and jargon, ARMS presents your results, statistics, and performance metrics in a sleek, digestible format that speaks for itself.<br>
                    For students, this means effortless access to academic progress, GPA trends, and course histories—all presented in a way that’s easy to share and understand. Whether you're applying for internships, scholarships, or jobs, ARMS helps you showcase your achievements with clarity and confidence.<br>
                    Employers benefit from streamlined candidate evaluation. Instead of sifting through transcripts, they get a concise, standardized view of academic performance, skill indicators, and relevant statistics—all tailored to their recruitment needs. This reduces friction in the hiring process and ensures that talent is recognized quickly and fairly.<br>
                    ARMS is the only platform that prioritizes minimalist academic visualization without compromising depth. It’s not just about data—it’s about making your academic journey readable, relatable, and ready for the real world."
                </p>
            </div>
            <div id="d23">
                <img id="i6" src="../img/w5.jpg">
            </div>

        </div>

        <div id="d19">
            <div id="d15">
                <img id="i1" src="../img/w1.jpg">
                <p id="p1">Collect And Showcase All Your Certificate, Course Curricilum, Results, Bio-data.</p>
                <hr>
                <p id="p8">
                    ARMS acts as your personal academic vault—securely storing and organizing all your educational achievements in one place.
                </p>
                </div>
            <div id="d16">
                <img id="i2" src="../img/w2.jpg">
                <p id="p2">Easy to Share And Easy To Showcase.</p>
                <hr>
                <p id="p7">
                    Whether you're applying for a job or sharing your profile, ARMS makes it effortless to present your credentials with style and clarity.
                </p>
            </div>
            <div id="d17">
                <img id="i3" src="../img/w3.jpg">
                <p id="p3">One Click To Drop Cv and Easy to Apply</p>
                <hr>
                <p id="p6">
                    With ARMS, you can apply to multiple job openings with just one click, saving you time and effort in your job search.
                </p>
            </div>
            <div id="d18">
                <img id="i4" src="../img/w4.jpg">
                <p id="p4">Find The Right Candidate For Your Job</p>
                <hr>
                <p id="p5">
                    ARMS helps employers find the perfect fit for their job openings by providing access to a diverse pool of qualified candidates.
                </p>
            </div>
        </div>



        <div id="d2">
            <div id="d3">
                <button id="but3">X</button>
                <div id="d4">
                    <h3>Create Your Account</h3>
                </div>

                <form action="../../controller/registration.php" method="post" id="regform" onsubmit="return store()">
                    <div id="d8">
                        
                        <input id="nam" name="nam" type="text" placeholder="Full Name"><br>
                        <span id="ner"></span><br>

                        <input id="eml" name="eml" type="email" placeholder="Email"><br>
                        <span id="emlerr"></span><br>

                        <input id="pnum" name="pnum" type="text" placeholder="Phone Number"><br>
                        <span id="pnumerr"></span><br>

                        <input id="pass" name="pass" type="password" placeholder="Password"><br>
                        <span id="passerr"></span><br>

                        <input id="conpass" name="conpass" type="password" placeholder="Confirm Password"><br>
                        <span id="conpasserr"></span><br>
                    </div>
                    <div id="d9">
                        <input type="radio" id="can" value="candidate" name="role">Candidate
                        <input type="radio" id="hr" value="hr" name="role">Hr Manager <br>
                    </div>
                    <span id="radio"></span><br>

                    <input type="checkbox" id="ck1">By signing up you agree to our <a href="">Terms and Condition</a><br>
                    <span id="ckk"></span><br>

                    <div id="d5">
                        <input type="submit" value="Register" id="submit">
                    </div>
            </form>
            </div>
        </div>

        <div id="d10">
            <div id="d11">
                <button id="but4">X</button>
                <div id="d12">
                    <h3>Sign In Your Account</h3>
                </div>

                <form action="../../controller/login.php" method="get"  id="logform" onsubmit="return validation()">
                    <div id="d13">
                        <input type="text" id="log" name="log" placeholder="Enter Your Email"><br>
                        <span id="logerr"></span><br>

                        <input type="password" id="logpass" name="logpass" placeholder="Enter Your Password"><br>
                        <span id="logpasserr"></span><br>
                    </div>
                    
                    <div id="d14">
                        <button id="but5">Sign In</button>
                    </div>
                </form>
            </div>
        </div>



        <footer id="footer">
            <p id="fp1">Copyright &copy; 2024 ARMS. All rights reserved.</p>
            <p id="fp2">Contact:01537252971</p>
            <p id="fp1">Email:arms@gmail.com <br> Address:House#11, Road#22, Block#FJ, Rothi, Dhaka-8765</p>
            <p id="fp2">Follow creators on Github:<br>
                <a href="https://github.com/fardin-aiub-2001">Fardin Ahmed</a> <br>
                <a href="https://github.com/juthi-2004-aiub">Jannatul Islam</a>
            </p>
        </footer>
        
    </body>
</html>