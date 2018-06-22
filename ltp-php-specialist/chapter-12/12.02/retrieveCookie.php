<?php
    $cookieName = "userId";
    if(!isset($_COOKIE[$cookieName]))
    {
        $out = "No userID set";
    }
    else
    {
        $out = $_COOKIE[$cookieName];
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Retrieving Cookies</title>
        
    </head>
    <body>
        <p>Welcome: <?php echo($out) ?> </p>
    </body>
</html>