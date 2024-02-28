<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Task</title>
</head>

<body class="bg-secondary">
    <div class="card position-absolute top-50 start-50 translate-middle border border-4 border-dark" style="width: 500px; height: 550px;">
        <div class="fs-3 d-flex justify-content-center mt-5">
            <form action="../CRUD/edit_task.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id ?>">

                <label for="title">Title:</label><br>
                <input type="text" name="title" value="<?php echo $title ?>"><br>

                <label for="description">Description:</label><br>
                <input type="text" name="description" value="<?php echo $description ?>"><br>

                <label for="priority">Priority Level:</label><br>
                <select name="priority">
                    <option value="Low" <?php if ($priority == 'Low')
                        echo 'selected' ?>>Low</option>
                        <option value="Medium" <?php if ($priority == 'Medium')
                        echo 'selected' ?>>Medium</option>
                        <option value="High" <?php if ($priority == 'High')
                        echo 'selected' ?>>High</option>
                    </select><br>

                    <label for="duedate">Due Date</label><br>
                    <input type="date" name="duedate" value="<?php echo $duedate ?>"><br>
                    <br>

                <input class="rounded-3" type="submit" name="editButton">
            </form>
        </div>
    </div>

    <br>
    <a href="../index.php">
        <button class="rounded-3">Back to Home</button>
    </a>
</body>

</html>