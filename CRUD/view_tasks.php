<?php
include("config.php");

$query = "SELECT id, title, description, priority, due_date  FROM tasks";

$result = mysqli_query($conn, $query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $title = $row["title"];
        $description = $row["description"];
        $priority = $row["priority"];
        $duedate = $row["due_date"];
        
        include(__DIR__ . "/../components/task.php");
    }
} else {
    echo "0 results";
}
$conn->close();
?>