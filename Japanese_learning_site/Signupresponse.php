<!DOCTYPE html>
<html>
<head>
    <title>Signup Response</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main class="page">

<?php
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    $confirm  = htmlspecialchars($_POST["confirm"]);
    $phone    = htmlspecialchars($_POST["tel"]);
    $email    = htmlspecialchars($_POST["email"]);

    if ($password !== $confirm) {
        echo "<h2 Passwords do not match! Please go back and try again.</h2>";
        exit;
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $server = "localhost";
    $username = "tt";
    $password = "Rep0Nuk3";
    $database = "Credentials";

    $conn = mysqli_connect($server, $username_db, $password_db, $database);

    if (!$conn) {
        die("<h1> Connection failed </h1>");
    }

    $sql = "INSERT INTO Users (username, password, tel, email)
            VALUES ("$username", "$hashed_password", "$phone", "$email")";

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