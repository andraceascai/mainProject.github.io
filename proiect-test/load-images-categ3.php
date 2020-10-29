<?php

    include 'db.php';

    $picF = $_POST['picF'];
    $textF = $_POST['textF'];
    $idF = $_POST['idF'];
    $categF = $_POST['categF'];
    $titleF = $_POST['titleF'];

    $sql = "SELECT $picF, $textF FROM $categF WHERE id = $idF";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
       echo "<h1 style=\"display: block; text-shadow: -2px -2px turquoise;\">";
       echo $titleF;
       echo "</h1>";
       echo "<img src=\"";
       echo $row[$picF];
       echo "\" 
       style=\"
       display: block;
       height: 70%;
       width: 85%;
       margin:5px;\"
       >";
       echo "<p style=\"text-align: justify; width:80%; margin:10px;  font-weight: bold;\">";
       echo $row[$textF];
       echo "</p>";
     }
    }else{
       echo "The test has failed";
    } 
?>