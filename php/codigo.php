<?php
$to = "dataled@utdt.edu";
$subject = "Contacto desde la Web";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$comentarios = $_POST['comentarios'];



$message = "
<html>
<head>
<title>Contacto</title>
</head>
<body>
<h1>Información desde la Web </h1>
<p>Nombre usuario: $nombre </p> 
<p>Email: $email </p> 
<p>Comentarios: $comentarios </p> 


</body>
</html>";

 echo '<h1>Muchas Gracias!</h1>

 <script>
setTimeout( function() { window.location.href = "https://sabrinaejemplo.000webhostapp.com/"; }, 10000 );
 </script>
 
 
 ';



mail($to, $subject, $message, $headers);



?>