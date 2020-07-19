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
    <?php
    include ("actions/db_connect.php");

    $sqlPublisher = "SELECT DISTINCT publisher FROM media";
    $resultPublisher = mysqli_query($conn, $sqlPublisher); 

    $sqlTitle = "SELECT title FROM media WHERE publisher ='{$_GET["publisher"]}'";
    $resultTitle = mysqli_query($conn, $sqlTitle); 
     
   
    $conn->close();
    ?>

<div class="container">
    <div class="text-center mt-4">
    <h1>Publisher</h1>
    

        <?php $rows = $resultPublisher->fetch_all(MYSQLI_ASSOC);
        foreach ($rows as $key => $value) { ?>
        <span class="badge badge-light p-3 m-2"><a href="publisher.php?publisher=<?php echo $value["publisher"]; ?>"><?php echo $value["publisher"]; ?></a></span>
     
        <?php }
        if (isset($_GET["publisher"])) {?>
       
            <div class="mt-5 border border-secondary rounded p-3"><?php echo "<b>{$_GET["publisher"]}</b> media items are: <br>"; ?>
            
            <?php $rows = $resultTitle->fetch_all(MYSQLI_ASSOC);

            foreach ($rows as $key => $value) { ?>
                
                    <?php echo $value["title"]. "<br>"?>
                
            <?php } ?>
      
       <?php } ?>
            </div>
   
       
 </div> 

     

  <!-- < ?php $rows = $resultTitle->fetch_all(MYSQLI_ASSOC);
        foreach ($rows as $key => $value) { ?>
     < ?php echo $value["title"]; ?> 
        < ?php } ?>   -->
 


 <!-- <table class="table mt-4">
  <thead> 
    <tr>
      <th scope="col">Publisher</th>
      <th scope="col">Book Titles</th>   
   </tr>
  </thead>
  <tbody>
    
        < ? php $rows = $result->fetch_all(MYSQLI_ASSOC);
        foreach ($rows as $key => $value) { ? >
    <tr>
    <td> < ?php echo $value["publisher"]; ?></td>
    <td> < ?php echo $value["title"]; ?> </td> 
        < ?php } ?>
    </tr>
 
  </tbody>
</table> -->

</div>


<?php  include 'footer.php' ?>      
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src ="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity = "sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"   crossorigin ="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/17b2af55ff.js"></script>
</body>
</html>