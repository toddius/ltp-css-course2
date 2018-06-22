<?php
    session_start();
    $_SESSION['userID'] = '11223';
    $_SESSION['userNickName'] = 'Polish Stallion';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Start Session</title>
        
    </head>
    <body>
       <p>Session Started</p> 
    </body>
</html>