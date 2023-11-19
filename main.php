<?php
include("backend/check_session.php");?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Home</title>
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
        <li><a class="active nav_ul_a" href="main.php">Home</a></li>
        <li><a class="nav_ul_a" href="cv.php">CV</a></li>
        <li><a class="nav_ul_a" href="gallery.php">Gallery</a></li>
        <li><a class="nav_ul_a" href="contact_us.php">Contact Us</a></li>
    </ul>
    <center>
        <main>
            <br>
            <img src="images/LAU.png" width="250px" height="100px" />
            <h1>Welcome to the website of Alyn Nazal</h1>
            <br><br>
            <h2>These are the technologies I used to make all what you see happen:</h2>
            <br><br>
            <div class="image-container">
                <img src="images/html.png" alt="html" width="250px" height="250px">
                <img src="images/css.png" alt="css" width="250px" height="250px">
                <img src="images/webhost.png" alt="webhost" width="250px" height="250px">
            </div>

        </main>
    </center>
</body>

</html>