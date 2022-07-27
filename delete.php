<?php 
  include "db.php";

  $id = $_GET['id'];
  $sql = "DELETE FROM pets WHERE id=$id"; 

  if ($conne->query($sql) === TRUE){
    echo "Anuncio eliminado correctamente";
  }else{
    echo "Error : " . $sql . "<br>" . $conne->error;
    header("Location: index.php");
  }
 
?>