<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
</head>

<body>
    <h2>Edit Task</h2>
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

        <input type="submit" name="editButton">
    </form>

    <br>
    <a href="../index.php">
        <button>Back to Home</button>
    </a>
</body>

</html>