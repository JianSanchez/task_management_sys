<?php
include("config.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    
    $query = "DELETE FROM `task` WHERE `id` = '$id'";


    if ($conn -> query($query) === TRUE) {
        echo "Deleted Successfully";
    } else {
        echo "Not Deleted";
    }

    $conn->close();
}




?>