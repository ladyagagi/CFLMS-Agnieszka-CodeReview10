<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity ="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<?php include ("header.php"); ?>
<div class="container">

<h4 class="mt-4 mb-3">To insert a new item to library database please fill the following form:</h4>
        <form action="actions/a_create.php" method="post">
            <div class="form-group bg-light rounded p-3">
            <label for="type">type</label> 
            <div class="input-group-prepend w-25">
                <label for="type">book</label> <!--checkbox-->
                    <input type="radio" name="type" class="form-control mr-3 btn-sm radio" value="book">
                <label for="type">cd</label> 
                    <input type="radio" name="type" class="form-control mr-3 btn-sm radio" value="cd">
                <label for="type">dvd</label> 
                    <input type="radio" name="type" class="form-control mr-3 btn-sm radio" value="dvd">   
            </div>   

                <!-- <label for="">type</label> 
                <input type="text" name="type" placeholder="book / cd / dvd" class="form-control">
                <br> -->
                <label for="">title</label>
                    <input type="text required" name="title" class="form-control">
                <br>
                <label for="">author</label>
                    <input type="text required" name="author" class="form-control">
                <br>
                <label for="">publisher/director</label>
                     <input type="text"name="publisher" class="form-control">
                <br>
                <label for="">ISBN</label>
                        <input type="text"name="ISBN" class="form-control">
                <br>
                <label for="">description</label>
                        <input type="textarea"name="description" class="form-control">
                <br>
                <label for="">image/url</label>
                        <input type="text"name="img" class="form-control">
                <br>
                <label for="">availability</label> <!--checkbox-->
                <div class="input-group-prepend w-25">
                <label for="">yes</label>
                        <input type="radio"name="availability" class="form-control" value="yes">
                <label for="">no</label>
                        <input type="radio"name="availability" class="form-control" value="no">
                </div>
                <br>
                <!-- <label for="">availability</label> 
                        <input type="text"name="availability" class="form-control">
                <br> -->
                <label for="">publish date</label>
                        <input type="date"name="publish_date" class="form-control">
                <br>
                <p class="text-right">
                        <input type="reset" value="reset" name="reset" class="btn btn-danger">
                        <input type="submit" value="insert" name="submit" class="btn btn-success">
            </p>
            </div>
        </form>



</div>

<?php include ("footer.php"); ?>   
</body>
</html>