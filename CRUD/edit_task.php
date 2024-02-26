<?php
include("config.php");

if (isset($_POST[""])) {
    $id = $_POST["id"];
    $title = $_POST["title"];
    $description = $_POST["description"];
    $priority = $_POST["priority"];
    $duedate = $_POST["duedate"];

    $sql = "UPDATE tasks 
            SET title = '$title', 
                description = '$description', 
                priority = '$priority', 
                due_date = '$duedate' 
            WHERE id =$id";

    if ($conn->query($sql) === TRUE) {
        echo "Edited Task Successfully";
    } else {
        echo "Failed to edit task";
        // echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>