<?php 

$destino = $_POST['correo'];

$correo= "
   Nombre: $_POST[nombre]
   Cedula: $_POST[cedula]
   Telefono: $_POST[telefono]
   Tipo de Consulta: $_POST[tipo]
   Resultado del Examen: $_POST[resultado]

";

$headers= 'From: examenclinico@gmail.com'."\r\n".
           'Reply-To'.$_POST['correo']."\r\n".
           'X-Mailer: PHP/'. phpversion();

mail($destino,$correo, $headers);

echo "Correo enviado"

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <title>Exito</title>
</head>
<body>
          <a href="./index.php">Volver</a>
</body>
</html>