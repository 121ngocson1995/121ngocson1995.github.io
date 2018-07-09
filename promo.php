<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php ("Content-Type: text/html; charset=utf-8");
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$para = 'maria@restaurantemrvu.es';
$titulo = 'promo';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n";

if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
window.location.href = 'http://restaurantemrvu.es/gracias.html';
</script>";
} else {
echo 'Falló el envio';
}
}
?>
