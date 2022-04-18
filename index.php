<?php 
 include("config.php");

$nombre=$_POST['nombre'];
$cedula=$_POST['cedula'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$tipo=$_POST['tipo'];
$resultado=$_POST['resultado'];



$sql="INSERT INTO examen (nombre, cedula, telefono, correo, tipo, resultado) VALUES ('$nombre',
'$cedula','$telefono','$correo','$tipo', '$resultado')";
$query= mysqli_query($conn,$sql);


?>




?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title>Examen medico</title>
</head>
<body>
    
   <h1 class="display-3">Examen Medico</h1>

   <div class="container-md">
     <form action="mail.php" method="post">
       <div class="mb-3">
          <label class="form-label">Nombre Completo:</label>
          <input type="text" class="form-control" placeholder="Nombre" name=nombre>
       </div>
       <div class="mb-3">
          <label class="form-label">Cedula:</label>
          <input type="text" class="form-control" placeholder="Ej: 20354471" name=cedula>
       </div>
       <div class="mb-3">
          <label class="form-label">Telefono:</label>
          <input type="text" class="form-control" placeholder="Ej: 04169699999" name=telefono>
       </div>
       <div class="mb-3">
          <label class="form-label">Correo:</label>
          <input type="email" class="form-control" placeholder="Correo" name=correo>
       </div>
       <label class="form-label">Tipo de Consulta:</label>
       <select class="form-control" name="tipo">
                 <option value="Medicina general">Medicina general</option>
                 <option value="Odontologia">Odontología</option>
                 <option value="Dermatologia">Dermatología</option>
                 <option value="Cardiologia">Cardiología</option>
        </select>
        <div class="mb-3">
       <label class="form-label">Resultados del exámen:</label>
       <textarea class="form-control" rows="3" name="resultado"></textarea>
    </div>
    <input type="hidden" name="guardar">
    <input class="btn btn-primary" type="submit" value="Enviar">
    <!-- <input class="btn btn-primary" type="submit" value="Crear PDF" name="pdf"> -->

     </form>
   </div>
  
</body>
</html>