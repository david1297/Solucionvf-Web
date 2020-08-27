<?php
  $destino='info@solucionesvidafacil.com';

  $nombre = $_POST['nombre'];
  $telefono = $_POST['telefono'];
  $correo = $_POST['correo'];

$header="Datos de Usuario";
$mensaje="\nNombre: " . $nombre . "\nTelefono: " . $telefono . "\nCorreo Electronico: " .$correo;

$asunto="Solicitud de Informacion";

mail($destino, $asunto, $mensaje, $header);
  echo"<script>alert('correo Enviado')</script>";
  echo"<script>setTimeout(\"location.href='//www.servicolombia.co'\",1000)</script>";

?>
