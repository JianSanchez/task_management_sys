<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="card-body d-flex flex-row align-items-center justify-content-between m-2 rounded"
        style="height: 110px; background-color: #E7F5F5;">
        <div class="d-flex flex-column flex-fill mx-1" style="width: 30%;">
            <div class="p-1">
                <h5 class="m-0">
                    <?php echo $title ?>
                </h5>
            </div>
            <div class="p-1">
                <p class="m-0">
                    <?php echo $description ?>
                </p>
            </div>
        </div>
        <div class="d-flex flex-column flex-fill mx-1" style="width: 20%;">
            <div class="p-1">
                <h5 class="m-0">
                    Priority:
                </h5>
            </div>
            <div class="p-1">
                <p class="m-0">
                    <?php echo $priority ?>
                </p>
            </div>
        </div>
        <div class="d-flex flex-column flex-fill mx-1" style="width: 20%;">
            <div class="p-1">
                <h5 class="m-0">
                    Due Date:
                </h5>
            </div>
            <div class="p-1">
                <p class="m-0">
                    <?php echo $duedate ?>
                </p>
            </div>
        </div>
        <div class="d-flex flex-row flex-fill justify-content-end mx-1" style="width: 20%;">
            <a href="/task_management_sys/CRUD/edit_task.php?id=<?php echo $id ?>">
                <i class="fa-solid fa-pen fa-lg mx-2" style="color: #1f3251;"></i>
            </a>

            <a href="/task_management_sys/CRUD/delete_task.php?id=<?php echo $id ?>">
                <i class="fa-solid fa-trash fa-lg mx-2" style="color: #d31717;"></i>
            </a>
        </div>
    </div>
</body>

</html>