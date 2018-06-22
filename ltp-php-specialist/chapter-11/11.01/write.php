<?php 
    if(isset($_POST['name']))
    {
        ///$myFile = fopen('nameEmail.txt', 'w') or die("Unable to open file.");
        $myFile = fopen('nameEmail.txt', 'a') or die("Unable to open file");
        $out = $_POST['name'] . "|" . $_POST['email'];
        $out .= "\n";
        fwrite($myFile, $out);
        fclose($myFile);
    }
?>

<!DOCTYPE>
<html>
    <head>
        <title>Write</title>
    </head>
    <body>
        <form action="write.php" method="post">
            <input type="text" id="name" name="name" placeholder="name" /><br/>
            <input type="text" id="email" name="email" placeholder="email" /><br/>
            <button type="submit">Save Data</button>
        </form>
    </body>
</html>