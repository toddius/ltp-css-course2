<?php 
    $capitals = array ("Connecticut" => "Hartford",
                       "New York" => "Albany",
                       "Vermont" => "Montpelier",
                       "New Jersey" => "Trenton",
                       "Colorado" => "Denver",
                       "California" => "Sacramento",
                       "Pennsylvania" => "Harrisburg"
                      );

    print("The capital of Colorado is: " . $capitals["Colorado"]);
    print("<br/>The capital of Pennsylvania is: " . $capitals["Pennsylvania"]);
    
    foreach($capitals as $key => $value)
    {
        print("<br/>$key: $value");
    }
?>