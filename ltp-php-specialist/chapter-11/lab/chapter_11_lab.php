<?php 
    if (isset ($_POST['fname']))
    {
        $out = $_POST['fname'] . "," . $_POST['lname'] . "," . $_POST['email'] . "," . $_POST['bday'] . "," . $_POST['testScore'] . "\n";
        $myFile = fopen("studentData.csv", "a") or die("Unable to open file");
        fwrite($myFile, $out);
        fclose($myFile);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Chapter 11 Lab</title>
        <style>
            table, td
            {
                border: 1px solid black;
                text-align: center;
            }
            
            table 
            {
                width: 75%;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <h3>Enter the following information, then press Submit.</h3>
        <form action="chapter_11_lab.php" method="post" autocomplete="off">
            <input type="text" name="fname" placeholder="First Name" /><br/>
            <input type="text" name="lname" placeholder="Last Name" /><br/>
            <input type="email" name="email" placeholder="Email Address" /><br/>
            <p>Date of Birth</p><input type="date" name="bday" placeholder="mm/dd/yyyy" /><br/>
            <input type="number" min="0" max="100" name="testScore" placeholder="Test Score" /><br/>
            <button type="submit">Submit</button><br/> 
        </form>
    </body>
</html>

<?php
    $myFile = fopen("studentData.csv", "r") or die("Unable to open file");
        print("<br/><table>");
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

    $col = 4;
    $total = 0;
    
    $myFile = fopen("studentData.csv", "r") or die("Unable to open file");
    $data = file("studentData.csv");    
    $numTests = count($data);
        while(! feof($myFile)){
            
                $total = $total + fgetcsv($myFile)[$col];
            }  
        $average = $total / $numTests;
        print ("<br/>The average of the test scores is: " . $average);
        fclose($myFile);
?>