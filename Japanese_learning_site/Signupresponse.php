<!DOCTYPE html>
<html>
<head>
    <title>Signup Response</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main class="page">

<?php
    $server = "localhost";
    $user_db = "tt";
    $pass_db = "Rep0Nuk3";
    $db = "Credentials";

    $conn = mysqli_connect($server, $user_db, $pass_db, $db);
    
    if (!$conn) {
        die("<h1> Connection failed </h1>");
    }

    $usernm = trim($_POST["user"]);
    $passwd = trim($_POST["pass"]);
    $phone = trim($_POST["phone"]);
    $email = trim($_POST["email"]);
    $hash_pass = password_hash($pass, PASSWORD_DEFAULT);

   
    $sql = "INSERT INTO Users (username, passwd, phone, email) VALUES ('$usernm', '$hash_pass', '$phone', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo "Sign up successful!</h2>";
        echo "<p>Welcome, $usernm to the Japanese learners community.</p>";
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