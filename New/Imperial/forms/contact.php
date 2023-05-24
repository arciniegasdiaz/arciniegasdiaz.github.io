<?php
$destinatario = "info@sionlasd.com";
$name = $_POST["nombre"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$subject = $_POST["asunto"];
$formcontrol = $_POST["mensaje"];

$cuerpo = "Nombre: $name\n";
$cuerpo .= "Email: $email\n";
$cuerpo .= "Teléfono: $telefono\n";
$cuerpo .= "Asunto: $subject\n";
$cuerpo .= "Mensaje: $formcontrol\n";

$headers = "From: $email\n";
$headers .= "Reply-To: $email\n";

if (mail($destinatario, $subject, $cuerpo, $headers)) {
  echo "Mensaje enviado correctamente";
} else {
  echo "Error al enviar el mensaje";
}
?>
