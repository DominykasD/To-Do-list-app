<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Table</title>
</head>
<body>
    <?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "tasks";

        // Create connection
        $connect = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($connect -> connection_error) {
            die ("Connection failed: " . $connect -> connect_error);
        }

        // Create table tasks
        $sql = "CREATE TABLE Task (
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(100) NOT NULL
        )";

        if ($connect -> query($sql) === TRUE) {
            echo "Table Task created succesfully";
        } else {
            echo "Error creating table: " . $connect -> error;
        }

        $connect -> close();
    ?>
</body>
</html>