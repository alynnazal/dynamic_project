<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
    $sex = $_POST["sex"];
    $dob = $_POST["dob"];

    $user = array(
        "fullname" => $fullname,
        "username" => $username,
        "password" => $password,
        "sex" => $sex,
        "dob" => $dob
    );

    $users = json_decode(file_get_contents("users.json"), true);
    $users[] = $user;

    file_put_contents("users.json", json_encode($users));

    echo '<script>alert("User registered successfully!");window.location.href="../index.html";</script>';
    exit()
    ;
}
?>
