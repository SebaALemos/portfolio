<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $tema = $_POST["tema"];
    $mensaje = $_POST["mensaje"];

    // Configurar la dirección de correo electrónico a la que se enviará el formulario
    $destinatario = "sebastian.lemos94@gmail.com";

    // Asunto del correo
    $asunto = "Nuevo mensaje de contacto";

    // Cuerpo del correo
    $cuerpo = "Nombre: $nombre\nTeléfono: $telefono\nCorreo: $correo\nTema: $tema\nMensaje: $mensaje";

    // Cabeceras del correo
    $cabeceras = "From: $correo";

    // Enviar el correo
    mail($destinatario, $asunto, $cuerpo, $cabeceras);
}
?>
