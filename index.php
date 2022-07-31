<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do list app</title>
</head>
<body>
    <form action="tasks.php" method="post">
        Task: <input name="task" type="text"> 
        <button>ADD</button>
    </form>

    <?php 
        $connect = new mysqli("localhost", "root", "", "tasks");
        if ($connect -> connection_error) {
            die ("Connection failed" . $connect -> connect_error);
        }

        // Select and show created tasks
        $sql = "SELECT * FROM Task";
        if ($task = $connect -> query($sql)) {
            while ($row = $task -> fetch_array()) {
                echo $row["id"];
                echo $row["title"];
                echo "<br>";
            }
        }
    ?>
</body>
</html>

