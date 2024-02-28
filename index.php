<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c127f8c694.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include("components/header.php");
    ?>

    <?php
    include("CRUD/view_tasks.php");
    ?>

    <div class="card-body" style="height: 750px;">
        <!-- <form action="CRUD/view_tasks.php" method="get">
            <button type="submit" name="viewtasksbtn" class="rounded-3">View Tasks</button><br>
        </form> -->

        <a href="pages/add_task_page.php">
            <button class="rounded-3">Add Tasks</button>
        </a>
    </div>

    <?php
    include("components/footer.php");
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>