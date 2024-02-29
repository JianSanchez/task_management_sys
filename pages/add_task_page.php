<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header">
        <div class="navbar navbar-expand-lg">
            <h3 style="margin-left: 10px;">Task Management System</h3>       
        </div>
    </div>
    
    <div class="card position-absolute top-50 start-50 translate-middle" style="width: 500px; height: 550px;">
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
                <input class="submitButton" type="submit" name="addButton">
            </form>
        </div>      
    </div>

    <br>
    <a href="../index.php">
        <button class="backHome">Back to Home</button>
    </a>
    <div class="footer">
        <div class="card-footer">
            <div class="text-center">
                <h5>These are the rights that authors are entitled to according to the law of copyright,
                    under Part IV of R.A. 8293, or the Intellectual Property Code of the Philippines.</h5>
                <h5>We Company Inc.</h5>
                <h5>Call Us 0987652211</h5>
                <h5>Message us: WeCompany@gmail.com</h5>
                <h5>All rights Reserve</h5>
            </div>
        </div>
    </div>
    
</body>


</html>