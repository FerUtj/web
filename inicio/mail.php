<?php
$to = "";
$asunto ="";
$cuerpo = "";
$headers= "";

if (mail($to, $asunto, $cuerpo, $headers)){
    echo "Email enviado $to correctamente!";
}else{
    echo "Error al enviar email.";
}
?>