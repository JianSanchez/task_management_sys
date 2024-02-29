<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Task</title>
</head>

<body style="background-color: #142d4c;">
    <div class="header" 
    style="background-color: #385170; border-radius: 5px; border-style: solid; margin-top: 5px;">
        <div class="navbar navbar-expand-lg">
            <h3 style="color:aliceblue; margin-left: 10px;">Task Management System</h3>       
        </div>
    </div>

    <div class="card position-absolute top-50 start-50 translate-middle border border-4 border-dark" style="width: 500px; height: 550px; background-color: #9fd3c7; color: #142d4c; border-radius: 20px; border-style: solid; border-color: #385170;">
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
        <button style="margin-left: 20px; border-radius: 10px; color: aliceblue; background-color: #385170; border: #385170; border-style: solid;">Back to Home</button>
    </a>

    <div class="footer" style="background-color: #385170; margin-top: 800px; color: aliceblue;">
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