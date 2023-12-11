<?php
// Multiple recipients
$para = 'natorres@itparral.edu.mx' .''; // note the comma

// Subject
$titulo = 'Gracias por registrarte en LaPaca';
//aleatoria
$codigo= rand(1000,9999);

// Message
$mensaje = '
<html>
<head>
<meta charset="UTF-8"/>
  <title>Gracias por registrarte</title>
</head>
<body>
   <p><a href="https://localhost/paca/confirm.php?email='.$email.'">Verificar Cuenta</a>
   
</p>
<h1>'.$codigo.'</h1>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$cabeceras = 'MIME-Version: 1.0 '."\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' ."\r\n";

//// Additional headers
//$headers[] = 'To: Mary <mary@example.com>, Kelly <kelly@example.com>';
//$headers[] = 'From: Birthday Reminder <birthday@example.com>';
//$headers[] = 'Cc: birthdayarchive@example.com';
//$headers[] = 'Bcc: birthdaycheck@example.com';

// Mail it
$enviado=false;
if(mail($para, $titulo, $mensaje, $cabeceras)){
    $enviado=true;
    echo "TODO BIEN";
} else {
    echo "Error al enviar el correo.";
}
