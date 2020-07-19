<?php
require_once 'db_connect.php';

if($_POST){
    $id = $_POST["id"];
    $media_type = $_POST["type"];
    $title = $_POST["title"];
    $author = $_POST["author"];
    $publisher = $_POST["publisher"];
    $ISBN = $_POST["ISBN"];
    $description = $_POST["description"];
    $image = $_POST["img"];
    $availability = $_POST["availability"];
    $publish_date = $_POST["publish_date"];
}

    $sql = "UPDATE `media` SET `type`= '$media_type',`title`='$title' ,`author`= '$author',`publisher` = '$publisher',
    `ISBN` = '$ISBN',`description` = '$description',`img`= '$image',`available` = '$availability',`publish_date`='$publish_date' WHERE id = $id";

// echo $sql; die;

   mysqli_query($conn, $sql); //run the query
   header("Location: ../media.php");

?>