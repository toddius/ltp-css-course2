<?php
    $cookieName = "userId";
    setcookie($cookieName, "", time()-3600, "/");

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
        <title>Deleting Cookies</title>
        
    </head>
    <body>
        <p>Welcome: <?php echo($out) ?></p>
    </body>
</html>