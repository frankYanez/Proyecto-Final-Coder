<?php 
    $nombre = $_POST['name'];
    $mail = $_POST[email];
    $mensaje = $_POST['textarea'];

    $para= 'frankyanez9413@gmail.com';
    $Asunto = 'FY Freelancer';

    mail($para, $Asunto, utf8_decode ($mensaje))

?>