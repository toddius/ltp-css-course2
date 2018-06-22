<?php
    $to = 'user@user.com';
    $subject = 'Fake Email';
    $message = '<h2 style="color:red; font-family:Arial">Fake Email!</h2><p>This is a made up email to show how plain text email can be sent via PHP.</p>';
    $headers []= 'MIME-Version: 1.0';
    $headers []= 'Content-type: text/html; charset=iso-8859-1';
    $headers []= 'To: New Student <enw@student.com>';
    $headers []= 'From: Todd Walls <t_e_walls@yahoo.com>';

    mail($to, $subject, $message, implode("\r\n", $headers));
?>