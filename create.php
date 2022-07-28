<?php 
  include "db.php";
  if(isset($_POST['create'])) 
    {
        $photo = $_POST['photo'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $history = $_POST['history'];
        $category = $_POST['category'];
        $breed = $_POST['breed'];
        $tags = $_POST['tags'];
        $contact = $_POST['contact'];

        // SQL query to insert user data into the users table
        $query= "INSERT INTO pets(photo, name, description, history, category, breed, tags, contact ) VALUES('{$photo}','{$name}','{$description}','{$history}','{$category}','{$breed}','{$tags}','{$contact}')";
        $add_adv = mysqli_query($conne,$query);
     
        // displaying proper message for the user to see whether the query executed perfectly or not 
          if (!$add_adv) {
              echo "Error al accesar base de datos ". mysqli_error($conne);
          }
          else { 
            echo ("<script LANGUAGE='JavaScript'> window.alert('Anuncio de mascota creado exitosamente'); window.location.href='index.php'; </script>");
          }        
    }
?>