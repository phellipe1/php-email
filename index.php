<?php 
    $to = 'eu@exemplo.com';
    $subject = 'Assunto';
    $message = 'texto';
    $headers = 'From: exemplo@exemplo.com' . "\r\n" . 'Reply-To: exemplo@exemplo.com';
    mail($to, $subject, $message, $headers);
    echo "Ok";
?>