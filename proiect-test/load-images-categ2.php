<?php

    include 'db.php';

    $picF = $_POST['picF'];
    $idF = $_POST['idF'];
    $categF = $_POST['categF'];

    $sql = "SELECT $picF FROM $categF WHERE id = $idF";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
       echo "<img src=\"";
       echo $row[$picF];
       echo "\" 
       style=\"
       height: 100%;
       width: 50%;
       display: block;
       margin-left: auto;
       margin-right: auto;
       \">";
     }
    }else{
       echo "The test has failed";
    } 
?>