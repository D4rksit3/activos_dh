
<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "gonzaloroque21@gmail.com";
    $to = "gonzaloroque21@gmail.com";
    $subject = "Prueba de correo con PHP";
    $message = "<body>
    <h1>Bienvenido</h1>

    <p>Envio con exito</p>
    </body>";
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "El correo se envio con exit";
?>

