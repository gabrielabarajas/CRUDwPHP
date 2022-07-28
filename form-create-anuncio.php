<?php include "db.php"?>
<!DOCTYPE html>
<html>
  <head>
    <title>Formulario Creacion de Anuncio</title>
    <meta charset = "utf-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">  
  </head>
  <body>
    
  <div class = "container">
      <h2>Formulario Creación de Anuncio</h2>
      <div class = "col-md-12 well">
        <form role = "form" id = "myForm" action = "create.php" method = "post">
            
            <div class="mb-3">
              <label for="photo" class="form-label">Foto (formato URL)</label>
              <input name="photo" type="text" class="form-control" aria-describedby="nombreHelp" 
              minLength = "5" placeholder = "Introduce la url de la foto.">
            </div>

            <div class="mb-3">
              <label for="name" class="form-label">Nombre</label>
              <input name="name" type="text" class="form-control"  aria-describedby="nombreHelp" 
              minLength = "3" placeholder = "Introduce el nombre de la mascota">
            </div>

            <div class="mb-3">
              <label for="description" class="form-label">Descripción</label>
              <input name="description" type="text" class="form-control"  aria-describedby="nombreHelp" 
              minLength = "5" placeholder = "Introduce una breve descripcion de la mascota.">
            </div>

            <div class="mb-3">
              <label for="history" class="form-label">Historia</label>
              <input name="history" type="text" class="form-control"  aria-describedby="nombreHelp" 
              minLength = "5" required = "true" placeholder = "Introduce un breve histotia de la mascota.">
            </div>

            <div class="mb-3">
              <label for="category" class="form-label">Categoria</label>
              <input name="category" type="text" class="form-control"  aria-describedby="nombreHelp" 
              minLength = "3" required = "true" placeholder = "Introduce una categoria para identificar a la mascota">
            </div>

            <div class="mb-3">
              <label for="breed" class="form-label">Raza</label>
              <input name="breed" type="text" class="form-control"  aria-describedby="nombreHelp" 
              minLength = "5" required = "false" placeholder = "Introduce la raza de la mascota.">
            </div>

            <div class="mb-3">
              <label for="tags" class="form-label">Tags</label>
              <input name="tags" type="text" class="form-control"  aria-describedby="nombreHelp" 
              minLength = "5" required = "false" placeholder = "Introduce algun(os) tag(s) que ayuden a identificar a la mascota">
            </div>

            <div class="mb-3">
              <label for="contact" class="form-label">Contacto</label>
              <input name="contact" type="text" class="form-control"  aria-describedby="nombreHelp" 
              minLength = "5" required = "false" placeholder = "Introduce datos de contacto para la adopcion de la mascota">
            </div>

            <button type="submit" name ="create" value="submit" class="btn btn-primary" >Crear anuncio</button>
            <a  href="index.php" class="btn btn-primary">Cancelar</a>
        </form>
      </div>
    </div>

  <?php 
  // Cierra conección a base de datos
    $conne->close();
  // Incluye footer en la página
    include "footer.php";
  ?>
    <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>