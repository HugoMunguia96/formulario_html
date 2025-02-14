<!DOCTYPE html>
<html lang="en">
<head>
  <title>Iniciar Sesion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<style>
a{
    display: inline-block;
    width: 180px;
    margin: 10px 10px;
    font-weight: 300px;
    border-radius:5px;
    padding:7px 28px;
    background-color:rgb(13, 107, 230);
    color: aliceblue;
    text-decoration:none;
  }
  body{
    color: #308446;
    background-color:#dff0fe;
  }
  </style>
<div class="container mt-3">
  <h1 style="color: rgb(13, 185, 238);">Iniciar Sesion</h1>
  <form action="/action_page.php">
    <div class="mb-3 mt-3">
      <label for="usuario"><b>Usuario:</b></label>
      <input type="Usuario" class="form-control" id="Usuario" placeholder="Usuario" name="Usuario">
    </div>
    <div class="mb-3">
      <label for="pwd"><b>Contraseña:</b></label>
      <input type="Contraseña" class="form-control" id="Contraseña" placeholder="Contraseña" name="Contraseña">
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"><b>Recordar Usuario</b></label>
      </label>
    </div>
    <a href="formulario.php">Iniciar Sesion</a>
  </form>
</div>

</body>
</html>
