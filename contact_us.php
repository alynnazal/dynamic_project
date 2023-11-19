<?php
include("backend/check_session.php");?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/contact.css" />
    <title>Contact Us</title>
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
        <li><a class="nav_ul_a" href="main.php">Home</a></li>
        <li><a class="nav_ul_a" href="cv.php">CV</a></li>
        <li><a class="nav_ul_a" href="gallery.php">Gallery</a></li>
        <li><a class="active nav_ul_a" href="contact_us.php">Contact Us</a></li>
    </ul>
    <div class="left-padding">
        <section id="contact">
            <br>
            <h1>Contact Us</h1>
            <p>If you have any questions or feedback, please feel free to contact me using the form below.</p>

            <form>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit">Send</button>
            </form>

            <h4>I am also available through my phone "+961 81996672" and email "alyn.nazal@lau.edu"</h4>
        </section>
    </div>
</body>

</html>