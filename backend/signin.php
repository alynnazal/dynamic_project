<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $users = json_decode(file_get_contents("users.json"), true);

    foreach ($users as $user) {
        if ($user["username"] === $username && password_verify($password, $user["password"])) {
            // Store user information in the session
            $_SESSION['user'] = $user;

            // Redirect to main.html on successful login
            header("Location: ../main.php");
            exit();
        }
    }

    echo '<script>alert("Invalid username or password. Please try again.");window.location.href="../index.html";</script>';
    exit();
}
?>
