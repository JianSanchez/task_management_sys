<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Task</title>
</head>

<body>
    <form action="../CRUD/create_task.php" method="post">
        <label for="title">Title:</label><br>
        <input type="text" name="title"><br>

        <label for="description">Description:</label><br>
        <input type="text" name="description"><br>

        <label for="priority">Priority Level:</label><br>
        <select name="priority">
            <option value="Low">Low</option>
            <option value="Medium">Medium</option>
            <option value="High">High</option>
        </select><br>

        <label for="duedate">Due Date</label><br>
        <input type="date" name="duedate"><br>

        <input type="submit" name="addButton">
    </form>
</body>

</html>