<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Task: <input name="task" type="text"> 
        <button>ADD</button>
    </form>
    <?php
        $task = $_POST["task"];
        echo $task;
    ?>
</body>
</html>

