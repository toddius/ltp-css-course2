<?php 
    $data = array("Todd", "Mike", "Greg", "Bill", "Emily", "Aaron", "Shauna". "Kent", "Lori", "Amy", "Ryan", "Sandy", "Jake", "Val");

    $comma_separated = implode(",", $data);
    print($comma_separated);

    $pizza = "sausage meatball pepperoni mushroom pineapple";
    $pizzaArray = explode(" ", $pizza);

    for($x=0; $x < count($pizzaArray); $x++)
    {
        print("<br/>" . $pizzaArray[$x]);
    }
?>