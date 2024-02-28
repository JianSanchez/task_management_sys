<?php
include("config.php");

if (isset($_POST["addButton"])){
    $title = $_POST["title"];
    $description = $_POST["description"];
    $priority = $_POST["priority"];
    $duedate = $_POST["duedate"];

    $query = "INSERT INTO tasks (title, description, priority, due_date) VALUES ('$title', '$description', '$priority', '$duedate')";

    if ($conn->query($query) === TRUE) {
        echo "Added Task Successfully";

      } else {
        echo "Failed to add task";
        // echo "Error: " . $query . "<br>" . $conn->error;
      }
      
    $conn->close();

    
}
?>

<br>
<a href="../index.php">
  <button>Back to Home</button>
</a>