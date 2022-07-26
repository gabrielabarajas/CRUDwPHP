
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

  <?php include "create.php" ?>
    
  <div class = "container">
      <h2>Formulario Creación de Anuncio</h2>
      <div class = "col-md-12 well">
        <form role = "form" id = "myForm" action = "" method = "post">
            
            <div class="mb-3">
              <label for="nombre" class="form-label">Foto (formato URL)</label>
              <input type="text" class="form-control" id="nombre" name="photo" aria-describedby="nombreHelp" 
              minLength = "5" required = "true" placeholder = "Introduce la url de la foto.">
            </div>

            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="name" aria-describedby="nombreHelp" 
              minLength = "5" required = "true" placeholder = "Introduce el nombre de la mascota">
            </div>

            <div class="mb-3">
              <label for="nombre" class="form-label">Descripción</label>
              <input type="text" class="form-control" id="nombre" name="description" aria-describedby="nombreHelp" 
              minLength = "5" required = "true" placeholder = "Introduce una breve descripcion de la mascota.">
            </div>

            <div class="mb-3">
              <label for="nombre" class="form-label">Historia</label>
              <input type="text" class="form-control" id="nombre" name="history" aria-describedby="nombreHelp" 
              minLength = "5" required = "true" placeholder = "Introduce un breve histotia de la mascota.">
            </div>

            <div class="mb-3">
              <label for="nombre" class="form-label">Categoria</label>
              <input type="text" class="form-control" id="nombre" name="category" aria-describedby="nombreHelp" 
              minLength = "3" required = "true" placeholder = "Introduce una categoria para identificar a la mascota">
            </div>

            <div class="mb-3">
              <label for="nombre" class="form-label">Raza</label>
              <input type="text" class="form-control" id="nombre" name="breed" aria-describedby="nombreHelp" 
              minLength = "5" required = "false" placeholder = "Introduce la raza de la mascota.">
            </div>

            <div class="mb-3">
              <label for="nombre" class="form-label">Tags</label>
              <input type="text" class="form-control" id="nombre" name="tags" aria-describedby="nombreHelp" 
              minLength = "5" required = "false" placeholder = "Introduce algun(os) tag(s) que ayuden a identificar a la mascota">
            </div>

            <div class="mb-3">
              <label for="nombre" class="form-label">Contacto</label>
              <input type="text" class="form-control" id="nombre" name="contact" aria-describedby="nombreHelp" 
              minLength = "5" required = "false" placeholder = "Introduce datos de contacto para la adopcion de la mascota">
            </div>

            <a type="submit" class="btn btn-primary" name ="create" value="submit">Enviar</a>
            <a  href="index.php" class="btn btn-primary">Cancelar</a>
        </form>
      </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>