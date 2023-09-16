<!DOCTYPE html>
<html lang="es" data-bs-theme="auto">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <!-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="../proyectoweb2/css/bootstrap.min.css" rel="stylesheet">

    <style>
      body {
        background-image: url('../proyectoweb2/img/Registrar_pexels-danny-meneses-943096.jpg');
        background-size: 100% 100%;
        background-position: center center;
        background-repeat: no-repeat;
      }

      html, body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        }

    </style>

<link href="../proyectoweb2/css/sign-in.css" rel="stylesheet">

</head>
<body>

<main class="form-signin w-100 m-auto">
    <form method="POST" action="../proyectoweb2/php/registraUs.php">
        <h1 class="h3 mb-3 fw-normal mt-5 text-white d-flex">Registrar</h1>
        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="correo" required>
            <label for="floatingInput">Dirección de Correo Electrónico</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="contrasena" required>
            <label for="floatingPassword">Contraseña</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="confirmar_contrasena" required>
            <label for="floatingPassword">Volver a Escribir la Contraseña</label>
        </div>
        <button class="btn btn-success w-100 py-2" type="submit">Registrarse</button>

    </form>
</main>


<script src="../proyectoweb2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
