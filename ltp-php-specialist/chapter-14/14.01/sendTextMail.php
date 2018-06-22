<?php
    $to = 'user@user.com';
    $subject = 'Fake Email';
    $message = 'This is a made up email to show how plain text email can be sent via PHP.';
    $headers = 'From: t_e_walls@yahoo.com' . "\r\n" . 'Reply-To: t_e_walls@yahoo.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
?>