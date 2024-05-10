<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $message = $_POST["mensaje"];
    $trainingType = $_POST["tipo-entrenamiento"];

    // Destinatario del correo
    $to = "hugoaalen@gmail.com.com";

    // Asunto del correo
    $subject = "Nuevo mensaje de formulario de entrenamiento";

    // Mensaje del correo
    $email_body = "Correo del remitente: $email\n";
    $email_body .= "Mensaje:\n$message\n";
    $email_body .= "Tipo de entrenamiento: $trainingType";

    // Cabeceras del correo
    $headers = "From: $email";

    // Envío del correo
    mail($to, $subject, $email_body, $headers);

    // Redireccionar o mostrar un mensaje de éxito
    header("Location: gracias.html"); // Redireccionar a una página de agradecimiento
    echo "¡Gracias! Tu mensaje ha sido enviado correctamente.";
} else {
    // Si se intenta acceder al script directamente sin enviar el formulario, redireccionar a la página de inicio o mostrar un mensaje de error.
    header("Location: index.html");
    echo "Error: Acceso no permitido.";
}
?>
