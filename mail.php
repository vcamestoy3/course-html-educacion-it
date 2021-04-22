<?php 

$nombre= $_GET['nombre'];
$apellido= $_GET['apellido'];
$edad= $_GET['edad'];
$Correo= $_GET['email'];
$telefono= $_GET['Contraseña'];
$paisResidencia= $_GET['pais'];
$paisesTraslado= $_GET['paisM'];
$Freserva= $_GET['reserva'];
$genero= $_GET['sexo'];
$Preferencias = $_GET['preferencias'];
$comentario = $_GET['comentarios'];
$TandC = $_GET['terminos'];
$notificaciones = $_GET['notificaciones'];

$mensaje = "Este es un mensaje de prueba. <br>
<strong>Nombre: </strong>$nombre <br>
<strong>Apellido: </strong>$apellido <br> <br> <br> <br>
<strong>Sugerencia: </strong>$comentario";

$asunto = "Envio de mail con PHP";

// $headers = "MIME-Version: 1.0" . "\r\n";
// $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";

echo $mensaje;

mail("vanessa.amestoy@gmail.com",$asunto,$mensaje,"From: $nombre <$mail>\nReply-To:$mail\nContent-Type:text/html; charset=iso-8859-1\n");

?>