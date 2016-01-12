<html> 
  <head> 
  <title>Envio de datos del contacto</title> 
  </head> 
  <body>
  <?php 
    $email_to = "edumarvega@hotmail.com";
    $email_subject = "Consulta desde el sitio web";
    $email_from = $_POST['email']; 

    $email_message = "Detalles del formulario de contacto:\n\n";
    $email_message .= "Nombre: " . $_POST['nombre'] . "\n";
    $email_message .= "Teléfono: " . $_POST['telefono'] . "\n";
    $email_message .= "E-mail: " . $_POST['email'] . "\n";
    $email_message .= "Mensaje: " . $_POST['mensaje'] . "\n\n";


    // Ahora se envía el e-mail usando la función mail() de PHP
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();

    if(@mail($email_to, $email_subject, $email_message, $headers)){
      echo "¡El mensaje se envio con éxito!";
    }
    else{
      echo "¡Error al enviar mensaje!";
    }
   
  ?>
</body> 
</html>