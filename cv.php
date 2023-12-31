<?php
include("backend/check_session.php");?>
<html>
<head>
    <title>CV</title>
    <link rel="stylesheet" href="css/cv.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
<div class="header">
        <div id="welcome-msg">
            <?php
            // Display the welcome message with the user's name
            echo "Welcome, " . $_SESSION['user']['fullname'];
            ?>
        </div>
        <div id="logout-btn">
            <a href="backend/logout.php">Logout</a>
        </div>
    </div>

    <ul class="nav_ul">
        <li class="nav_ul_li"><a class="nav_ul_a" href="main.php">Home</a></li>
        <li class="nav_ul_li"><a class="active nav_ul_a" href="cv.php">CV</a></li>
        <li class="nav_ul_li"><a class="nav_ul_a" href="gallery.php">Gallery</a></li>
        <li class="nav_ul_li"><a class="nav_ul_a" href="contact_us.php">Contact Us</a></li>
    </ul>
    <div class="left-padding">
        <div class="box-head">
            <div class="div-header-l">
                <div class="box-div">
                    <p style="font-size: 70; ">Alyn Nazal</p>
                    <h2>Senior Computer Scientist</h2>
                    <p>As a dedicated computer science student, I am passionate about utilising technology to solve
                        complex
                        problems and drive innovation. With strong skills in coding, programming, and problem-solving, I
                        am
                        committed to continually expanding my knowledge and expertise in the field. I am eager to apply
                        my
                        skills to real-world projects and contribute to the advancement of technology.</p>
                </div>
            </div>

            <div class="div-header-r">
                <div style="padding: 30px;"></div>
                <div class="box-div">
                    <img src="images/profile_picture.jpg" width="250px" class="img-custom">

                </div>
            </div>

            <div style="padding: 200px;"></div>
            <div class="info-container">
                <div class="box"><i class="material-icons icon">phone</i>+961 81 996672</div>
                <div class="box"><i class="material-icons icon">email</i>alyn.nazal@lau.edu</div>
                <div class="box"><i class="material-icons icon">home</i>Beirut, Lebanon</div>
            </div>
        </div>

        <div style="padding: 30px;"></div>

        <div class="title-parent"></div>
        <div class="title-child">
            <h2>Education</h2>
        </div>

        <div style="padding: 20px;"></div>


        <div class="box-div">
            <ul>
                <li>B.S in Computer Science
                    Lebanese American University &emsp;</li>
                <li>Baccalaureate in Sociology and Economics
                    Ghobiery 3rd Official School &emsp;</li>
            </ul>
        </div>

        <div style="padding: 20px;"></div>
        <div class="title-parent"></div>
        <div class="title-child">
            <h2>Technical Skills</h2>
        </div>
        <div style="padding: 10px;"></div>
        <div class="box-div">
            <div class="technical-skills">
                <h5>Java </h5>
                <h5>C</h5>
                <h5> Python</h5>
                <h5>SQL</h5>
                <h5>OOP </h5>
                <h5>Algorithms</h5>
                <h5> Multi-threading</h5>
                <h5>Time Management</h5>
                <h5>Collaboration</h5>
            </div>
        </div>



        <div style="padding: 20px;"></div>
        <div class="title-parent"></div>
        <div class="title-child">
            <h2>Language Skills</h2>
        </div>

        <div style="padding: 20px;"></div>
        <div class="div-fifty-l">
            <div class="box-div">
                <ul>
                    <li>
                        <p>Arabic</p>
                        <div class="skillbarcontainer">
                            <div class="skills native"></div>
                        </div>
                        <br>
                    </li>
                    <li>
                        <p>English</p>
                        <div class="skillbarcontainer">
                            <div class="skills fluent"></div>
                        </div>
                        <br>
                    </li>
                </ul>
            </div>
        </div>
        <div class="div-fifty-r">
            <div class="box-div">
                <ul>
                    <li>
                        <p>German</p>
                        <div class="skillbarcontainer">
                            <div class="skills normal"></div>
                        </div>
                        <br>
                    </li>
                    <li>
                        <p>French</p>
                        <div class="skillbarcontainer">
                            <div class="skills limited"></div>
                        </div>
                        <br>
                    </li>

                </ul>
            </div>
        </div>


        <div style="padding: 120px;"></div>

        <div class="title-parent"></div>
        <div class="title-child">
            <h2>Skills</h2>
        </div>


        <div style="padding: 10px;"></div>
        <div class="box-div">
            <ul>
                <li>Work with teammates and under pressure</li>
                <li>Strong communication skills</li>
                <li>Strong analytical and organizational skills</li>
                <li>Strong in planning and have leadership skills</li>
            </ul>
        </div>


        <div style="padding: 10px;"></div>

        <div class="title-parent"></div>
        <div class="title-child">
            <h2>Projects</h2>


        </div>
        <div style="padding: 10px;"></div>
        <div class="box-div">
            <p style="font-size: x-large;
            font-weight: 800;">Simple RISC Processor
                Computer Organization Course Project</p>
            <ul>
                <li>Designed a simple RISC processor that supports a set of
                    memory and arithmetic instructions.
                </li>
                <li>Researched best approached to identify instruction
                    structures.
                </li>
                <li>Implemented design and test bench using Java.
                </li>
            </ul>
        </div>
        <div style="padding: 10px;"></div>
        <div class="box-div">
            <p style="font-size: x-large;
                font-weight: 800;">Zoo Management System
                Database Course Project</p>
            <ul>

                <li>Designed the database schema for a zoo management
                    system.
                </li>
                <li>Implemented data validation rules to ensure the accuracy
                    of data entered into the system.
                </li>
                <li>Developed user interfaces for adding, updating, and
                    retrieving data from the database.</li>
            </ul>
        </div>


        <div style="padding: 20px;"></div>

        <div class="title-parent"></div>
        <div class="title-child">
            <h2>INTERESTS / HOBBIES</h2>
        </div>
        <div style="padding: 40px;"></div>
        <div class="box-div">

            <div class="phrase-container">
                <div class="phrase">Content Creation</div>
                <div class="phrase">Emerging Technologies</div>
                <div class="phrase">Volunteer Work</div>
                <div class="phrase">Traveling</div>
            </div>
            <div style="padding: 30px;"></div>
        </div>
    </div>
</body>

</html>