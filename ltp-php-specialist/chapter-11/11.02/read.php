<?php 
    $myFile = fopen('poem.txt', 'r') or die('Unable to open file');
    $poem = fread($myFile, filesize('poem.txt'));
    fclose($myFile);
    $poem = str_replace('\n', '<br/>', $poem);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Read</title>
        <style>
            #poem
            {
                width: 50%;
                padding: 10px;
                border: 1px solid black;
                background-color: aqua;
                font-family: cursive;
            }
        </style>
        
    </head>
    <body>
        <div id="poem">
            <?php print($poem) ?>
        </div>
    </body>
</html>