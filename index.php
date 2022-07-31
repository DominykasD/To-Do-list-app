<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do list app</title>
</head>
<body>
    <form action="" method="post">
        Task: <input name="task" type="text"> 
        <button>ADD</button>
    </form>

    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "tasks";

        // Create connection
        $connect = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($connect -> connect_error) {
            die("Connection failed: " . $connect -> connect_error);
        }

        
    ?>
</body>
</html>

