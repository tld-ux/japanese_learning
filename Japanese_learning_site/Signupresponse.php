<!DOCTYPE html>
<html>
<head>
    <title>Signup Response</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main class="page">

<?php
    $username = htmlspecialchars($_GET["username"]);
    $password = htmlspecialchars($_GET["passwd"]);
    $phone    = htmlspecialchars($_GET["phone"]);
    $email    = htmlspecialchars($_GET["email"]);

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $server = "localhost";
    $username_db = "tt";
    $password_db = "Rep0Nuk3";
    $database = "Credentials";

    $conn = mysqli_connect($server, $username_db, $password_db, $database);

    if (!$conn) {
        die("<h1> Connection failed </h1>");
    }

    $sql = "INSERT INTO Users (username, passwd, phone, email) VALUES ('$username', '$hashed_password', '$phone', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo "<h2> Sign up successful!</h2>";
        echo "<p>Welcome, $username to the Japanese learner's community.</p>";
    } else {
        echo "<h1> Error: Sorry, Try again later. </h2>";
    }

    mysqli_close($conn);
?>
<br><br>
<a href="JLcontent.html">Home</a>
</main>
</body>
</html>