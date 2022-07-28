<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="donacion.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<title>Formulario Donacion</title>
</head>
<body>
    <div class="container">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="./images/donate-img.jpg" alt="donacion voluntaria" width="285" height="180">
        <h2>Registro de Donación</h2>
    </div>
    </div>
    <div class="col-md-7 col-lg-8">
        <form class="needs-validation" novalidate>
            <div class="row g-3 align-content-center">
                    <div class="col-sm-6">
                    <label for="firstName" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        El nombre es requerido
                </div>
                </div>

                <div class="col-sm-6">
                    <label for="lastName" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        El apellido es requerido
                    </div>
                </div>

                <div class="col-12">
                    <label for="email" class="form-label">Correo Electrónico <span class="text-muted">(Opcional)</span></label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                </div>
            </div>
            <hr class="my-10">
            <div id="donate-button-container">
                <div id="donate-button"></div>
                <script src="https://www.paypalobjects.com/donate/sdk/donate-sdk.js" charset="UTF-8"></script>
                <script>
                    PayPal.Donation.Button({
                    env:'production',
                    hosted_button_id:'UYQ3FKTV4S9MU',
                    image: {
                    src:'https://www.paypalobjects.com/es_ES/ES/i/btn/btn_donateCC_LG.gif',
                    alt:'Botón Donar con PayPal',
                    title:'PayPal - The safer, easier way to pay online!',
                    }
                    }).render('#donate-button');
                </script>
            </div>
                
        </form>
    </div>
<?php  include "footer.php" ?>

<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="js.js"></script>
</body>
</html>
  
  
