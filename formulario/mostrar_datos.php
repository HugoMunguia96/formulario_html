<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lista de Datos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<style>
a {
    display: inline-block;
    width: 180px;
    margin: 10px 20px;
    font-weight: 300px;
    border-radius:5px;
    padding:7px 30px;
    background-color:rgb(13, 107, 230);
    color: aliceblue;
    text-decoration:none;
}
img {
  margin-top: 15px;
  margin-right: 50px;
  margin-bottom: 10px;
  margin-left: 110px;
}
body{
    background-color:#dff0fe;
  }
  </style>

<section class="formulario.php">
<img src="https://uls.edu.sv/sitioweb/images/logoulsfull_oficial_web.jpg" width="180 px"/><br><br>
<h2 style="color: rgb(13, 185, 238);margin-left: 300px;margin-top: 0px;"><i>Formulario de Registro y Control del Personal de la ULS</i></h2>
  <h3 style="color: rgb(13, 185, 238);margin-left: 450px;"><i>Lista de Datos Registrados del Personal</i></h3>
  <table class="table">
    <thead>
      <tr>
        <th>NOMBRES</th>
        <th>APELLIDOS</th>
        <th>TELEFONO</th>
        <th>N°REGISTRO</th>
        <th>DIRECCION</th>
        <th>EST_CIVIL</th>
        <th>SEXO</th>
        <th>F_NACIMIENTO</th>
        <th>CARGO</th>
        <th>L_NACIMIENTO</th>
        <th>CORREO ELECTRONICO</th>
        <th>COMENTARIO</th>
      </tr>
    </thead>
    </div>
    <tbody>
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "formulario";

      // Crear conexión
      $conn = new mysqli($servername, $username, $password, $dbname);

      // Verificar la conexión
      if ($conn->connect_error) {
          die("Error al conectar con la base de datos: " . $conn->connect_error);
      }

      // Obtener los datos de la tabla
      $sql = "SELECT * FROM datos_personales";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $row['nombres'] . "</td>";
              echo "<td>" . $row['apellidos'] . "</td>";
              echo "<td>" . $row['telefono'] . "</td>";
              echo "<td>" . $row['numero_registro'] . "</td>";
              echo "<td>" . $row['direccion'] . "</td>";
              echo "<td>" . $row['estado_civil'] . "</td>";
              echo "<td>" . $row['sexo'] . "</td>";
              echo "<td>" . $row['fecha_nacimiento'] . "</td>";
              echo "<td>" . $row['cargo'] . "</td>";
              echo "<td>" . $row['lugar_nacimiento'] . "</td>";
              echo "<td>" . $row['correo_electronico'] . "</td>";
              echo "<td>" . $row['comentario'] . "</td>";
              echo "</tr>";
          }
      } else {
          echo "<tr><td colspan='12'>No se encontraron datos</td></tr>";
      }

      // Cerrar la conexión
      $conn->close();
      ?>
    </tbody>
  </table>
  <a href="formulario.php">Ir a Registro</a>
</section>

</body>
</html>
