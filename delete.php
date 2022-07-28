<?php 
  include "db.php";

  $id = $_POST['id'];
  $sql = "DELETE FROM pets WHERE id=$id"; 

  if ($conne->query($sql) === TRUE){
    echo ("<script LANGUAGE='JavaScript'> window.alert('Anuncio de mascota eliminado exitosamente'); window.location.href='index.php'; </script>");
  }else{
    echo "Error : " . $sql . "<br>" . $conne->error;
  }
?>