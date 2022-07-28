<?php 
  include "db.php"; 

  // Procesamiento del formulario (form) cuando actualizado
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $photo = $_POST['photo'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $history = $_POST['history'];
        $category = $_POST['category'];
        $breed = $_POST['breed'];
        $tags = $_POST['tags'];
        $contact = $_POST['contact'];
    }

    $sql = "UPDATE pets SET photo='{$photo}', name='{$name}', description='{$description}', history='{$history}', category='{$category}', breed='{$breed}', tags='{$tags}', contact='{$contact}' WHERE id=$id";
    $update_adv = mysqli_query($conne,$sql);
    echo ("<script LANGUAGE='JavaScript'> window.alert('Anuncio de mascota editado exitosamente'); window.location.href='index.php'; </script>");      
?>

