<?php
include("config.php");

if (isset($_GET["viewtasksbtn"])) {

    $query = "SELECT title, description, priority, due_date  FROM `tasks`";

    $result = mysqli_query($conn, $query);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            echo "Title: " . $row["title"] .
                " - Description: " . $row["description"] .
                " - Priority: " . $row["priority"] .
                " - Due Date: " . $row["due_date"] . "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();



}

?>