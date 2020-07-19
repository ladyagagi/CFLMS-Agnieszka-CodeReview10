<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>media</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    

</head>
<body>
<?php include ("header.php"); ?>
<div class="container">
<?php
    include ("actions/db_connect.php");

    $sql = "SELECT * FROM media";
    $result = mysqli_query($conn, $sql);
    $conn->close(); ?>

<div class="container mt-4">
<div class="row">

        <?php
            if($result->num_rows == 0) {
                echo "no result";
            } else {
                $rows = $result->fetch_all(MYSQLI_ASSOC);
                foreach ($rows as $key => $value) { ?>
            <div class="col-sm-6 mb-3">
            <div class="card">
            <div class="card-body"> 
            <div class="container d-flex flex-row justify-content-between bg-light p-3 mb-3 rounded">
    
                    <img src="<?php echo $value["img"]; ?>" class="card-img-top w-25 " alt="pic">
        
                    <p>
                        
                            <?php if($value["type"] == 'book') {?>
                                    <i class="fa fa-book" aria-hidden="true"></i>  
                                <?php  } elseif ($value["type"] == 'dvd') {?>
                                    <i class="fa fa-film" aria-hidden="true"></i>    
                            <?php  } else {?>
                                    <i class="fa fa-circle-o" aria-hidden="true"></i> 
                            <?php  } ?>
           
                            <?php if($value["available"] == 'yes') {?>
                                <span class="badge badge-pill badge-success p-2 mb-2 ml-4">available</span> 
                            <?php  } else {?>
                                <span class="badge badge-pill badge-danger p-2 mb-2 ml-4">not available</span> 
                            <?php }?>
                                
                    
            </div>
<h5 class="card-title"><b><?php echo $value["title"]; ?></b></h5>
     <p class="card-text"> <b>Author:</b> <?php echo $value["author"]; ?> </p>
     
     
     <p class="card-text"> 
         <?php if($value["type"] == 'book') {?>
           <b>Publisher: </b> <?php echo $value["publisher"]; 
          } elseif ($value["type"] == 'dvd') {?>
            <b>Director: </b> <?php echo $value["publisher"];
         } else {?>
             <b>Producer: </b> <?php echo $value["publisher"];
       } ?></p>


     <p class="card-text"> <b>ISBN: </b> <?php echo $value["ISBN"]; ?></p>
     <p class="card-text"> <b>Description: </b> <?php echo $value["description"]; ?></p>
     <div class="text-right"><button type="button" class="btn btn-outline-info">  <?php echo " <a href='update.php?id=".$value["id"]."'>edit</a>" ?></button>
     <button type="button" class="btn btn-outline-danger"><?php echo "<a href='delete.php?id=".$value["id"]."'>delete</a>" ?></button>
     
    </div>
        
    </div>  
     </div>
  </div>      
    <?php
        }
    }
    ?>
    
    </div>
    </div>
    <?php  include 'footer.php' ?>      
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src ="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity = "sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"   crossorigin ="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/17b2af55ff.js"></script>
</body>
</html>