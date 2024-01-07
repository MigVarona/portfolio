<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén los datos del formulario
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Configura el destinatario y el asunto del correo
    $to = "migvaronag@gmail.com";
    $subject = "Nuevo mensaje de contacto de $name";

    // Construye el cuerpo del correo
    $message = "Nombre: $name\n";
    $message .= "Email: $email\n";

    // Envía el correo
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
}
?>
