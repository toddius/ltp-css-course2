<?php 
    $string = "Todd, Mike, Greg, Bill, Emily, Jake, Val, Shauna, Lori, Sandy, Kent, Ryan, Amy, Aaron";
    $nameArray = str_getcsv($string);

    for($x=0; $x < count($nameArray); $x++)
    {
        print($nameArray[$x] . "<br/>");
    }

    print("<br/>");
    $string = "Who's afraid of Todd's dog?";

    $string = addslashes($string);
    print($string);

    $string = stripslashes($string);
    print("<br/>" . $string);
?>