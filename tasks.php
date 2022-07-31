<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
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

        // Taking data from the form input
        $title = $_REQUEST['task'];

        // Inserting values;
        $sql = "INSERT INTO Task (title) VALUES ('$title')";

        // Check if inserted succesfully
        if($connect -> query($sql) === TRUE) {
            echo "Values inserted succesfully";
        } else {
            echo "Error failed to insert values: " . $connect -> error;
        }

        $connect -> close();

    ?>
</body>
</html>