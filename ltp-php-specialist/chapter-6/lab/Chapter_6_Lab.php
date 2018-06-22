<html>
<body>
<h1>Here is the grid you requested:</h1>
<div>
<?php
    chmod("Chapter_6_Lab.php", 0755);

    $rows = $_REQUEST['rows'];
    $columns = $_REQUEST['columns'];

    if (($rows == 1 && $columns ==1) || ($rows > 13 || $columns > 23))
    {
        $rows = 8;
        $columns = 8;
    }
 
    //While-loop method
    $i = 0;
    while ($i < $rows)
    {
        $j = 0;
        while ($j < $columns)
        {
            if (($i % 2 == 0) && ($j % 2 == 0))
            {
                print('<p class="green"></p>');
            } 
            else if (($i % 2 !== 0) && ($j % 2 !== 0))
            {
                print('<p class="green"></p>');
            } 
            else
            {
                print('<p class="white"></p>');
            }
            $j++;
        }
        print ("<br/>");
        $i++;
    }

    //For-loop method

   /* for ($i = 0; $i < $rows; $i++)
    {
        for ($j = 0; $j < $columns; $j++)
        {
            if (($i % 2 == 0) && ($j % 2 == 0))
            {
                print('<p class="black"></p>');
            } 
            else if (($i % 2 !== 0) && ($j % 2 !== 0))
            {
                print('<p class="black"></p>');
            } 
            else
            {
                print('<p class="white"></p>');
            }
        }
        print ("<br/>");
    } */
?>
</div>
</body>
<style>
    h1 {
        text-align: center;
    }
    div {
        text-align: center;
    }
            
    .white {
            height: 50px;
            width: 50px;
            background-color: white;
            border: 1px solid green;
            display: inline-block;
            margin: 0;
            }
    
    .green {
            height: 50px;
            width: 50px;
            background-color: green;
            border: 1px solid green;
            display: inline-block;
            margin: 0;
            }
</style>
</html>
