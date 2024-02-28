<?php
include("config.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    
    $query = "DELETE FROM tasks WHERE id = '$id'";


    if ($conn -> query($query) === TRUE) {
        echo "Deleted Successfully";
    } else {
        echo "Not Deleted";
    }

    $conn->close();
}
?>

<br>
<a href="../index.php">
  <button>Back to Home</button>
</a>