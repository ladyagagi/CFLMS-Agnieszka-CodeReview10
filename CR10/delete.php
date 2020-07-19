<?php
require_once 'actions/db_connect.php';
if($_GET["id"]) {
    $id = $_GET["id"];

    $sql = "DELETE FROM media WHERE id = $id";

    if(mysqli_query($conn, $sql)) {
        echo "the item was  sussccesfully deleted<br> <a href='media.php'>back to homepage </a>";
    } else {
        echo "error";
    }
    $conn->close();
}
?>


