<?php
include("config.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $query = "SELECT * FROM tasks WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $title = $row["title"];
            $description = $row["description"];
            $priority = $row["priority"];
            $duedate = $row["due_date"];

            include(__DIR__ . "/../pages/edit_task_page.php");
        }
    } else {
        echo "No task found";
    }
}

if (isset($_POST["editButton"])) {
    $id = $_POST["id"];
    $title = $_POST["title"];
    $description = $_POST["description"];
    $priority = $_POST["priority"];
    $duedate = $_POST["duedate"];

    $query = "UPDATE tasks 
            SET title = '$title', 
                description = '$description', 
                priority = '$priority', 
                due_date = '$duedate' 
            WHERE id = '$id'";

    if ($conn->query($query) === TRUE) {
        echo "Edited Task Successfully";
    } else {
        echo "Failed to edit task";
        // echo "Error: " . $query . "<br>" . $conn->error;
    }

    $conn->close();

    echo "<br><a href='../index.php'><button>Back to Home</button></a>";
}
?>

