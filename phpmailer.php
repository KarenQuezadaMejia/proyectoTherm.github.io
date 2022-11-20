<?php

$destinatario = 'jmquezadam95@gmail.com';

$nombre = $_POST['name'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$asunto = $_POST['opcion'];
$mensaje = $_POST['message'];
$foto = $_FILES['img']; //array assoc - $foto['tmp_name']; $foto['size'] - $foto['name']

if( empty(trim($nombre)) ) $nombre = 'anonimo';
if( empty(trim($apellido)) ) $tel = '';

/*$body = <<<HTML
    <h1>Contacto desde la web</h1>
    <p>De: $nombre $tel / $email</p>
    <h2>Mensaje</h2>
    $mensaje
HTML;

$mailer = new PHPMailer();
$mailer->setFrom( $email, "$nombre $tel " );
$mailer->addAddress('jmquezadam95@gmail.com','Sitio web');
$mailer->Subject = "Mensaje web: $asunto";
$mailer->msgHTML($body);
$mailer->AltBody = strip_tags($body);
$mailer->CharSet = 'UTF-8';

if( $foto['size'] > 0 ){
    $mailer->addAttachment( $foto['tmp_name'], $foto['name'] );
}

$rta = $mailer->send( );

//var_dump($rta);
header("Location: index.html" );
*/
$header = "Enviado desde pagina web"
	$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

	mail($destinatario, $asunto, $tel);
	echo "<script>alert('correo enviado existosamente')</script>";
	echo "<script> setTimeout(\"location.href='index.html'\",100)</script>";
?>