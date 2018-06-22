<?php 
    if (isset ($_POST['name']))
    {
        $out = $_POST['name'] . "," . $_POST['email'] . "," . $_POST['phone'] . "\n";
        $myFile = fopen("directory.csv", "a") or die("Unable to open file");
        fwrite($myFile, $out);
        fclose($myFile);
        $myFile = fopen("directory.csv", "r") or die("Unable to open file");
        print("<table>");
        while(($data = fgetcsv($myFile, 1000, ",")) !==FALSE){
            print("<tr>");
            for ($x=0; $x < count($data); $x++)
            {
                print("<td>");
                print($data[$x]);
                print("</td>");
            }
            print("</tr>");
        }
        print("</table>");
        fclose($myFile);
        $_POST['name'] = null;
    } else {
        $myFile = fopen('directory.csv', 'r') or die('Unable to open file');
        print("<table>");
        while(($data = fgetcsv($myFile, 1000, ",")) !==FALSE) {
            print("<tr>");
            for ($x=0; $x < count($data); $x++)
            {
                print("<td>");
                print($data[$x]);
                print("</td>");
            }
            print("</tr>");
        }
        print("</table>");
        fclose($myFile);
        $_POST['name'] = null;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Read CSV</title>
        
    </head>
    <body>
        <form action="readCSV.php" method="post">
            <input type="text" name="name" placeholder="name" /><br/>
            <input type="email" name="email" placeholder="email" /><br/>
            <input type="phone" name="phone" placeholder="phone" /><br/>
            <button type="submit">Submit</button> 
        </form>
    </body>
</html>