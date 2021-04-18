<?php 

$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$email = $_GET['email'];
$comentario = $_GET['comentarios'];

$mensaje = "Este es un mensaje de prueba. <br>
<strong>Nombre: </strong>$nombre <br>
<strong>Apellido: </strong>$apellido <br> <br> <br> <br>
<strong>Sugerencia: </strong>$comentario
";

$asunto = "Envio de mail con PHP";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers = "Content-type:text/html;charset=UTF-8" . "\r\n";

echo $mensaje;

mail($email,$asunto,$mensaje, $headers);

?>
<?php ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investigación Mozart</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet"> 
    <style>
        nav{
          text-align: right;
        }

    </style>
</head>
<body style="font-size: 20px; background-color: #FAFAD2;" >
    <header>
      <h1>Wolfgang Amadeus Mozart</h1>
    </header>
    
    <nav>
        <a href="Produccion_Musical.html" style="text-transform: uppercase;">Ir a Producción Musical</a>
        <a href="Contacto.html" style="margin-left: 15px; text-transform: uppercase;">Ir a Contacto</a>
        <a href="https://www.youtube.com/watch?v=Rb0UmrCXxVA" target="_Blank" title="youtube" style="margin-left: 15px; text-transform: uppercase;" >Escuchar éxitos</a>
        
    </nav>
    <br>
    <main>
        <h2 style="font-size: 10%;">compositor</h2>
    </main>
</body>
</html>