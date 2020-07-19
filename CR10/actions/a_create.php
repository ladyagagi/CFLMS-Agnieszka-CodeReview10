<?php
    require_once ('db_connect.php');

    if($_POST){
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
       
    $sql = "INSERT INTO `media`(`type`, `title`, `author`, `publisher`, `ISBN`, `description`, `img`, `available`, `publish_date`) 
    VALUES ('$media_type','$title','$author' ,'$publisher','$ISBN','$description','$image','$availability','$publish_date')";

if(mysqli_query($conn, $sql)) {
    echo "success <br>
    <a href='../media.php'>Back to the media page</a>";
}else {
    echo "error";
}
header("Location: ../media.php");

?>