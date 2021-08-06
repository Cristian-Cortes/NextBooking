<?php

$to = "jonathanchavez3245@gmail.com, anahiacosta901@gmail.com";
$subject = "Es una prueba";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$message = "Hola ana porque aun no te bañas";
mail($to, $subject, $message, $headers);


?>