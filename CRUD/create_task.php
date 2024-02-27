<?php
include("config.php");

if (isset($_POST["addButton"])){
    $title = $_POST["title"];
    $description = $_POST["description"];
    $priority = $_POST["priority"];
    $duedate = $_POST["duedate"];

    $sql = "INSERT INTO tasks (title, description, priority, due_date) VALUES ('$title', '$description', '$priority', '$duedate')";

    if ($conn->query($sql) === TRUE) {
        echo "Added Task Successfully";

      } else {
        echo "Failed to add task";
        // echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
    $conn->close();

    
}
?>

<br>
<a href="../index.php">
  <button>Back to Home</button>
</a>