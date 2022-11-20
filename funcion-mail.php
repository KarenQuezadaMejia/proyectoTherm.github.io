<?php
if($_SERVER['REQUEST_METHOD'] != 'POST' ){
    header("Location: contact.html" );
}


/*if( ! isset( $_POST['nombre'] ) ){
    header("Location: index.html" );
}
*/


$nombre = $_POST['nombre'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

if( empty(trim($nombre)) ) $nombre = 'anonimo';
if( empty(trim($apellido)) ) $apellido = '';

$body = <<<HTML
    <h1>Contacto desde la web</h1>
    <p>De: $nombre $tel / $email</p>
    <h2>Mensaje</h2>
    $mensaje
HTML;

//sintaxis de los emails email@algo.com || 
// nombre <email@algo.com>

$headers = "MIME-Version: 1.0 \r\n";
$headers.= "Content-type: text/html; charset=utf-8 \r\n";
$headers.= "From: $nombre $tel <$email> \r\n";
$headers.= "To: Sitio web <jmquezadam95@gmail.com> \r\n";
$headers.= "Cc: copia@email.com \r\n";
$headers.= "Bcc: copia-oculta@email.com \r\n";


//REMITENTE (NOMBRE/APELLIDO - EMAIL)
//ASUNTO 
//CUERPO 
var_dump($nombre);
mail('jmquezadam95@gmail.com', "Mensaje web: $asunto", $mensaje);

/*
$rta = mail('jmquezadam95@gmail.com', "Mensaje web: $asunto", $body, $headers );
var_dump($rta);
*/

header("Location: index.html" );