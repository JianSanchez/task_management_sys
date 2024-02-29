<?php
include("config.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    
    $query = "DELETE FROM tasks WHERE id = '$id'";


    if ($conn -> query($query) === TRUE) {
        echo "<script>alert('Deleted Successfully');</script>";
        echo "<script>window.location.href = '../index.php';</script>";
        exit();
    } else {
        echo "Not Deleted";
    }

    $conn->close();
}
?>
