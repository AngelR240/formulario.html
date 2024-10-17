<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Configuración del correo
    $to = "angel.reyes.isc@colmexuni.edu.mx";
    $subject = "Respuestas del formulario - Adivina la Palabra";
    
    // Construir el cuerpo del mensaje
    $message = "";
    foreach ($_POST as $question => $answer) {
        $message .= ucfirst($question) . ": " . htmlspecialchars($answer) . "\n";
    }
    
    // Encabezados del correo
    $headers = "From: angel.reyes.isc@colmexuni.edu.mx\r\n";
    $headers .= "Reply-To: angel.reyes.isc@colmexuni.edu.mx\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";
    
    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        echo "Las respuestas se han enviado correctamente.";
    } else {
        echo "Error al enviar el correo.";
    }
}
?>
