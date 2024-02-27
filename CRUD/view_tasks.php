<?php
include("config.php");


if (isset($_GET["viewtasksbtn"])) {

    $query = "SELECT id, title, description, priority, due_date  FROM `tasks`";

    $result = mysqli_query($conn, $query);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            echo "Title: " . $row["title"] .
                " - Description: " . $row["description"] .
                " - Priority: " . $row["priority"] .
                " - Due Date: " . $row["due_date"] . 
                "<div class='mt-3'>" .
                "<a href='delete_task.php?id=" .$row["id"] . "' class='btn btn-danger'>Delete</a><br>";
                "</div><br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();



}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-warning">

</body>
</html>