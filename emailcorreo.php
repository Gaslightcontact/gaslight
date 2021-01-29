<?php>
{

// Creamos el header para el mensaje

// para:

$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$telefono = "telefono";
$headers .= "Content-type: text/plain";
$headers .= "From: ".$_POST['nombre']." <".$_POST['email'].">\n";
$headers .= "Reply-To: " . $_POST['email']."\n";
$headers .= "X-Mailer: PHP/" . phpversion();


$nombres= $_POST['nombre'];

$email = $_POST['email'];

$estado =$_POST['telefono'];

$mensaje =$_POST['mensaje'];



$message = "

<b>SOLICITUD DE INFORMACIÓN</b> <br><br> \n

<b>Nombres:</b> ".$nombres." <br> \n

<b>e-mail:</b> ".$email." <br> \n

<b>Estado:</b> ".$estado." <br> \n

<b>Mensaje:</b> ".$mensaje." <br> \n

";





if(mail($to, $subject, $message, $headers))



header("Location: enviado.html");exit;



}

?>