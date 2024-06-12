<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);
    
    $para = 'akrazou6@gmail.com';
    $titulo = 'Nuevo mensaje del formulario de contacto';
    $contenido = "Nombre: $nombre\nCorreo Electrónico: $email\nMensaje:\n$mensaje";
    $headers = "From: $email";
    
    if (mail($para, $titulo, $contenido, $headers)) {
        echo 'El mensaje se ha enviado correctamente.';
    } else {
        echo 'Ha ocurrido un error al enviar el mensaje.';
    }
} else {
    echo 'Método de solicitud no soportado.';
}
?>
