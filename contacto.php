<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php ("Content-Type: text/html; charset=utf-8");
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
$para = 'info@restaurantemrvu.es';
$titulo = 'Formulario web mrvu';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Telefono: $telefono\n Mensaje: $mensaje\n";

if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
window.location.href = 'http://restaurantemrvu.es/solicitud-contacto.html';
</script>";
} else {
echo 'Falló el envio';
}
}
?>
