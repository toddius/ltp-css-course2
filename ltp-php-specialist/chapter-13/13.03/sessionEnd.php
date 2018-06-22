<?php
    session_start();
    unset($_SESSION['userID']);
    unset($_SESSION['userNickName']);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>End Session</title>
        
    </head>
    <body>
       <p>Session Ended</p> 
    </body>
</html>