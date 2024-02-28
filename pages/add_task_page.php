<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="bg-secondary">
    <div class="card position-absolute top-50 start-50 translate-middle border border-4 border-dark" style="width: 500px; height: 550px;">
        <div class="fs-3 d-flex justify-content-center mt-5">
            <form action="../CRUD/create_task.php" method="post">
                <label for="title">Title:</label><br>
                <input class="border border-secondary" type="text" name="title"><br>

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
                <br>
                <input class="rounded-3" type="submit" name="addButton">
            </form>
        </div>      
    </div>
    
    
</body>


</html>