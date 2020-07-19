<?php

require_once 'actions/db_connect.php';

if($_GET["id"]) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM media WHERE id = $id";
    $result = mysqli_query($conn, $sql); //to run the query
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity ="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<?php include ("header.php"); ?>
<div class="container">

<h4 class="mt-4 mb-3">Update item:</h4>
        <form action="actions/a_update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']?>">
            <div class="form-group bg-light rounded p-3">

            <label for="type">type</label> 
            <div class="input-group-prepend w-25">
               
                    <label for="type">book</label>
                    <input type="radio" name="type" class="form-control mr-3 btn-sm" value="book" <?php if($row['type'] == 'book') {echo 'checked="checked"';}?> >
                
                        <label for="type">cd</label> 
                    <input type="radio" name="type" class="form-control mr-3 btn-sm" value="cd" <?php if($row['type'] == 'cd') {echo 'checked="checked"';}?> >
                   
                        <label for="type">dvd</label> 
                   <input type="radio" name="type" class="form-control mr-3 btn-sm" value="dvd" <?php if($row['type'] == 'dvd') {echo 'checked="checked"';}?> >
          
            </div>   

            
                <label for="">title</label>
                    <input type="text required" name="title" class="form-control" value="<?php echo $row['title'] ?>" >
                <br>
                <label for="">author</label>
                    <input type="text required" name="author" class="form-control" value="<?php echo $row['author'] ?>" >
                <br>
                <label for="">publisher/director</label>
                     <input type="text"name="publisher" class="form-control" value="<?php echo $row['publisher'] ?>" >
                <br>
                <label for="">ISBN</label>
                        <input type="text"name="ISBN" class="form-control" value="<?php echo $row['ISBN'] ?>" >
                <br>
                <label for="">description</label>
                        <input type="textarea"name="description" class="form-control" value="<?php echo $row['description'] ?>" >
                <br>
                <label for="">image/url</label>
                        <input type="text"name="img" class="form-control" value="<?php echo $row['img'] ?>" >
                <br>
                <label for="">availability</label> <!--checkbox-->
                <div class="input-group-prepend w-25">
                <label for="">yes</label>
                        <input type="radio" name="availability" class="form-control" value="yes" <?php if($row['available'] == 'yes') {echo 'checked="checked"';}?>>
                <label for="">no</label>
                        <input type="radio" name="availability" class="form-control" value="no" <?php if($row['available'] == 'no') {echo 'checked="checked"';}?>>
                </div>
                <br>
                <!-- <label for="">availability</label> 
                        <input type="text"name="availability" class="form-control">
                <br> -->
                <label for="">publish date</label>
                        <input type="date"name="publish_date" class="form-control" value="<?php echo $row['publish_date'] ?>">
                <br>
                <p class="text-right">
                        
                        <input type="submit" value="update" name="update" class="btn btn-success">
            </p>
            </div>
        </form>

</div>
<?php include ("footer.php"); ?>   
</body>
</html>