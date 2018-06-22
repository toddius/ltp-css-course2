<?php
    session_start();
    $id = $_SESSION['userID'] = '11223';
    $nick = $_SESSION['userNickName'] = 'Polish Stallion';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Passing Variables</title>
        
    </head>
    <body>
       <p>User ID: <?php print($id) ?></p>
       <p>User Nick Name: <?php print($nick) ?></p>
    </body>
</html>