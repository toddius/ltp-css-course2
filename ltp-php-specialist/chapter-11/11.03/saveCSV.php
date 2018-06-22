<?php 
    if (isset ($_POST['name']))
    {
        $out = $_POST['name'] . "," . $_POST['email'] . "," . $_POST['phone'] . "\n";
        $myFile = fopen("directory.csv", "a") or die("Unable to open file");
        fwrite($myFile, $out);
        fclose($myFile);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Write CSV</title>
        
    </head>
    <body>
        <form action="saveCSV.php" method="post">
            <input type="text" name="name" placeholder="name" /><br/>
            <input type="email" name="email" placeholder="email" /><br/>
            <input type="phone" name="phone" placeholder="phone" /><br/>
            <button type="submit">Submit</button> 
        </form>
    </body>
</html>