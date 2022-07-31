<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Database</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";

        // Create connection
        $connect = new mysqli($servername, $username, $password);

        // Check connection
        if ($connect -> connection_error) {
            die("Connection failed: " . $connect -> connection_error);
        }

        // Create Database
        $sql = "CREATE DATABASE tasks";
        if ($connect -> query($sql) === TRUE) {
            echo "Database created succesfully";
        } else {
            echo "Error creating database: " . $connect -> error;
        }

        $connect -> close();
    ?>
</body>
</html>