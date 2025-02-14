<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registro</title>
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
    margin: 20px 10px;
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

           
<section class="container mt-3">
    <img src = https://uls.edu.sv/sitioweb/images/logoulsfull_oficial_web.jpg  width="180 px"/><br><br>
  <h2 style="color: rgb(13, 185, 238);margin-left:250px;"><i>Formulario de Registro y Control del Personal de la ULS</i></h2>
  <h4 style = "color:rgb(13, 185, 238);margin-left:500px;"><i>Registro del Personal</i></h4>
  <h4><i>Datos Personales</i></h4>

  <form method="POST" action="">
    <div class="mb-3 mt-3">
      <label for="text"><b>Nombres:</b></label>
      <input type="text" class="form-control" id="nombres" placeholder="Nombres" name="nombres">
    </div>
    <div class="mb-3">
      <label for="text"><b>Apellidos:</b></label>
      <input type="text" class="form-control" id="apellidos" placeholder="Apellidos" name="apellidos">
    </div>
    <div class="mb-3">
        <label for="text"><b>Telefono:</b></label>
        <input type="text" class="form-control" id="telefono" placeholder="Telefono" name="telefono">
      </div>
      <div class="mb-3">
        <label for="text"><b>Numero de Regitro:</b></label>
        <input type="text" class="form-control" id="numero_Registro" placeholder="Numero de Registro" name="numero_Registro">
      </div>
      <div class="mb-3">
        <label for="text"><b>Direccion:</b></label>
        <input type="text" class="form-control" id="direccion" placeholder="Direccion" name="direccion">
      </div>
      <div class="mb-3">
        <label for="text"><b>Estado Civil:</b></label>
        <input type="text" class="form-control" id="estado_civil" placeholder="Estado Civil" name="estado_civil">
      </div>
      <div class="mb-3">
        <label for="text"><b>Sexo:</b></label>
        <input type="text" class="form-control" id="sexo" placeholder="Sexo" name="sexo">
      </div>
      <div class="mb-3">
        <label for="text"><b>Fecha de Nacimiento:</b></label>
        <input type="" class="form-control" id="fecha_nacimiento" placeholder="Fecha de Nacimiento" name="fecha_nacimiento">
      </div>
      <div class="mb-3">
        <label for="text"><b>Cargo:</b></label>
        <input type="text" class="form-control" id="cargo" placeholder="Cargo" name="cargo">
      </div>
      <div class="mb-3">
        <label for="text"><b>Lugar de Nacimiento:</b></label>
        <input type="text" class="form-control" id="lugar_nacimiento" placeholder="Lugar de Nacimiento" name="lugar_nacimiento">
      </div>
      <div class="mb-3">
        <label for="text"><b>Correo Electronico:</b></label>
        <input type="email" class="form-control" id="correo_Electronico" placeholder="Correo Electronico" name="correo_Electronico">
      </div>
    <div class="mb-3 mt-3">
        <label for="comment"><b>Comentario:</b></label>
        <textarea class="form-control" rows="5" id="comentario" name="comentario"></textarea>
        <div class="mb-3">
        <input type="submit" class="btn btn-primary" name="enviar" value="Guardar Registro">
        <a href="mostrar_datos.php">Datos Guardados</a>
        <a href="iniciar.php">Inicio de Sesion</a>
      </div>
      
  </form>

    <?php
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "formulario"; 
    
    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    
    if (isset($_POST['enviar'])) {
    $nombres = $_POST["nombres"];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $numero_registro = $_POST['numero_Registro'];
    $direccion = $_POST['direccion'];
    $estado_civil = $_POST['estado_civil'];
    $sexo = $_POST['sexo'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $cargo = $_POST['cargo'];
    $lugar_nacimiento = $_POST['lugar_nacimiento'];
    $correo_electronico = $_POST['correo_Electronico'];
    $comentario = $_POST['comentario'];
    
    // Insertar los datos en la tabla
    $sql = "INSERT INTO datos_personales (nombres, apellidos, telefono, numero_registro, direccion, estado_civil, sexo, fecha_nacimiento, cargo, lugar_nacimiento, correo_electronico, comentario)
            VALUES ('$nombres', '$apellidos', '$telefono', '$numero_registro', '$direccion', '$estado_civil', '$sexo', '$fecha_nacimiento', '$cargo', '$lugar_nacimiento', '$correo_electronico', '$comentario')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error al insertar el registro: " . $conn->error;
    }
  }
    
    // Cerrar la conexión
    $conn->close();
    ?>
  
</section>
</div>

</body>
</html>

