<?php
include("backend/check_session.php");

// Function to read image names from gallery file
function getGalleryImages() {
    $galleryFile = 'gallery.json';

    if (file_exists($galleryFile)) {
        $galleryContent = file_get_contents($galleryFile);
        return json_decode($galleryContent);
    }

    return [];
}

$galleryImages = getGalleryImages();
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="css/gallery.css" />
  <title>Gallery</title>
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
    <li><a class="active nav_ul_a" href="gallery.php">Gallery</a></li>
    <li><a class="nav_ul_a" href="contact_us.php">Contact Us</a></li>
  </ul>

  <div class="gallery">
    <div class="text">
      <h2>Welcome to the Capitals Gallery</h2>
    </div>
    <div class="thumbnails">
      <?php foreach ($galleryImages as $imageName) : ?>
      <figure>
        <img src="images/city/<?php echo $imageName; ?>" alt="<?php echo pathinfo($imageName, PATHINFO_FILENAME); ?>"
          class="thumbnail">
        <figcaption class="caption">
          <?php echo pathinfo($imageName, PATHINFO_FILENAME); ?>
        </figcaption>
      </figure>
      <?php endforeach; ?>
    </div>
  </div>
</body>

</html>