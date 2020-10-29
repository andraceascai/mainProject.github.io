<?php

    include 'db.php';
    $picF = $_POST['picF'];
    $idF = $_POST['idF'];
    $categF = $_POST['categF'];

    $sql = "SELECT $picF FROM $categF WHERE id = $idF";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
       echo "<img id=\"zoom\" onclick=\"zoomIn()\" src=\"";
       echo $row[$picF];
       echo "\" 
       style=\"
       height: 99%;
       width: 60%;
       display: block;
       margin:0 auto;
       \">";
     }
    }else{
       echo "The test has failed!!!";
    } 
?>