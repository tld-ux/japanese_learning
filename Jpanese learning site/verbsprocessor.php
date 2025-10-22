<!DOCTYPE html>
<html>
    <head>
        <title>Searching</title>
          <!-- Link to external CSS -->
        <link rel="stylesheet" href="style.css">
        <?php
            // Retrieve submitted information
            $requested_word = htmlspecialchars($_GET["english_search"]); 
            $server = "localhost";
            $username = "tt";
            $password = "Rep0Nuk3";
            $database = "Japanese_vocabulary";
            $conn = mysqli_connect($server, $username, $password, $database);
            
            // Check for successful connection
            if (!$conn) {
              die("Connection failed: {mysqli_connect_error()}");
            }
            $sql = "select romaji, verb_group from Verbs where english='{$requested_word}';";
            $result = mysqli_query($conn, $sql);
        ?>
    </head>
    <body>
         <?= You searched up the verb $requested_word, here is what we found ?>.<br/>
        <?php
            foreach($result as $row) // There should only be one row returned!
            {
                echo "The japanese equivalent of this word in english would be
                {$row['romaji']} and is a verb group found in group {$row['verb_group']}";
            }
            // Don't forget to close the connection!
            mysqli_close($conn);
        ?>
    </body>
</html>