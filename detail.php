<?php include "db.php" ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Detalle de la mascota</title>
    <meta charset = "utf-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">  
  </head>
  <body>
  
  <?php
      //recibe el id del registro a consultar
      $id=$_GET['id'];
      $sql = "SELECT * FROM pets WHERE id=$id";
      $result = $conne -> query($sql);
      $row = $result->fetch_assoc();
  ?>

  <div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1"><?php echo $row['name'] ?></h1>
        <p class="lead"><?php echo $row['history'] ?></p>
        <p class="lead"><?php echo $row['contact'] ?></p>
        <p class="lead"><?php echo $row['tags'] ?></p>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
          <img class="rounded-lg-3" src=<?php echo $row['photo'] ?> alt="" width="400">
      </div>
    </div>
  </div>
  
  <?php include "footer.php" ?>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>