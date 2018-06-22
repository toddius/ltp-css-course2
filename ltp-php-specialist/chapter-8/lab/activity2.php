<?php 
//establish associative arrays of test scores for the four tests
    $testOne = array ("Smith" => 98,
                       "Johnson" => 67,
                       "Fields" => 71,
                       "Laurel" => 68,
                       "Gold" => 91,
                       "Braverman" => 88,
                       "Stone" => 84,
                       "Kiel" => 84
                      );

    $testTwo = array ("Smith" => 75,
                       "Johnson" => 88,
                       "Fields" => 81,
                       "Laurel" => 63,
                       "Gold" => 67,
                       "Braverman" => 82,
                       "Stone" => 77,
                       "Kiel" => 81
                      );

    $testThree = array ("Smith" => 100,
                       "Johnson" => 85,
                       "Fields" => 76,
                       "Laurel" => 68,
                       "Gold" => 63,
                       "Braverman" => 55,
                       "Stone" => 81,
                       "Kiel" => 79
                      );

    $testFour = array ("Smith" => 91,
                       "Johnson" => 81,
                       "Fields" => 77,
                       "Laurel" => 70,
                       "Gold" => 90,
                       "Braverman" => 82,
                       "Stone" => 90,
                       "Kiel" => 100
                      );
    
// calculate and print out class average for each test
/* come back to this and see about using loop to reduce code */
    $classSize = count($testOne);
    $testOneTotal = array_sum($testOne);
    $testOneAverage = $testOneTotal / $classSize;
    print("The average for Test One is " .  $testOneAverage . "<br/>");

    
    $testTwoTotal = array_sum($testTwo);
    $testTwoAverage = $testTwoTotal / $classSize;
    print("The average for Test Two is " . $testTwoAverage . "<br/>");

    
    $testThreeTotal = array_sum($testOne);
    $testThreeAverage = $testThreeTotal / $classSize;
    print("The average for Test Three is $testThreeAverage<br/>");

    
    $testFourTotal = array_sum($testOne);
    $testFourAverage = $testFourTotal / $classSize;
    print("The average for Test Four is $testFourAverage<br/>");

// calculate and print out student average for four tests
/* come back to this and see about using loop to reduce code */

    $smithTotal = $testOne['Smith'] + $testTwo['Smith'] + $testThree['Smith'] + $testFour['Smith'];
    $smithAverage = $smithTotal / 4;
    print("<br/>Smith's average is: " . $smithAverage);

    $johnsonTotal = $testOne['Johnson'] + $testTwo['Johnson'] + $testThree['Johnson'] + $testFour['Johnson'];
    $johnsonAverage = $johnsonTotal / 4;
    print("<br/>Johnson's average is: " . $johnsonAverage);

    $fieldsTotal = $testOne['Fields'] + $testTwo['Fields'] + $testThree['Fields'] + $testFour['Fields'];
    $fieldsAverage = $fieldsTotal / 4;
    print("<br/>Fields's average is: " . $fieldsAverage);

    $laurelTotal = $testOne['Laurel'] + $testTwo['Laurel'] + $testThree['Laurel'] + $testFour['Laurel'];
    $laurelAverage = $laurelTotal / 4;
    print("<br/>Laurel's average is: " . $laurelAverage);

    $goldTotal = $testOne['Gold'] + $testTwo['Gold'] + $testThree['Gold'] + $testFour['Gold'];
    $goldAverage = $goldTotal / 4;
    print("<br/>Gold's average is: " . $goldAverage);

    $bravermanTotal = $testOne['Braverman'] + $testTwo['Braverman'] + $testThree['Braverman'] + $testFour['Braverman'];
    $bravermanAverage = $bravermanTotal / 4;
    print("<br/>Braverman's average is: " . $bravermanAverage);

    $stoneTotal = $testOne['Stone'] + $testTwo['Stone'] + $testThree['Stone'] + $testFour['Stone'];
    $stoneAverage = $stoneTotal / 4;
    print("<br/>Stone's average is: " . $stoneAverage);

    $kielTotal = $testOne['Kiel'] + $testTwo['Kiel'] + $testThree['Kiel'] + $testFour['Kiel'];
    $kielAverage = $kielTotal / 4;
    print("<br/>Kiel's average is: " . $kielAverage);

//create table diplaying all test scores, test averages and student averages
/* come back to this and see about using loop to reduce code */

        print("<br/><br/>");
        print("<table>");
        
        print("<tr><th class='fill'></th><th>Test 1</th><th>Test 2</th><th>Test 3</th><th>Test 4</th><th>Avg.</th></tr>");
        
        print("<tr><td>Smith</td><td>" . $testOne['Smith'] . "</td><td>" . $testTwo['Smith'] . "</td><td>" . $testThree['Smith'] . "</td><td>" . $testFour['Smith'] . "</td><td>" . $smithAverage . "</td></tr>");
        
        print("<tr><td>Johnson</td><td>" . $testOne['Johnson'] . "</td><td>" . $testTwo['Johnson'] . "</td><td>" . $testThree['Johnson'] . "</td><td>" . $testFour['Johnson'] . "</td><td>" . $johnsonAverage . "</td></tr>");
        
        print("<tr><td>Fields</td><td>" . $testOne['Fields'] . "</td><td>" . $testTwo['Fields'] . "</td><td>" . $testThree['Fields'] . "</td><td>" . $testFour['Fields'] . "</td><td>" . $fieldsAverage . "</td></tr>");
        
        print("<tr><td>Laurel</td><td>" . $testOne['Laurel'] . "</td><td>" . $testTwo['Laurel'] . "</td><td>" . $testThree['Laurel'] . "</td><td>" . $testFour['Laurel'] . "</td><td>" . $laurelAverage . "</td></tr>");
        
        print("<tr><td>Gold</td><td>" . $testOne['Gold'] . "</td><td>" . $testTwo['Gold'] . "</td><td>" . $testThree['Gold'] . "</td><td>" . $testFour['Gold'] . "</td><td>" . $goldAverage . "</td></tr>");
        
        print("<tr><td>Braverman</td><td>" . $testOne['Braverman'] . "</td><td>" . $testTwo['Braverman'] . "</td><td>" . $testThree['Braverman'] . "</td><td>" . $testFour['Braverman'] . "</td><td>" . $bravermanAverage . "</td></tr>");
        
        print("<tr><td>Stone</td><td>" . $testOne['Stone'] . "</td><td>" . $testTwo['Stone'] . "</td><td>" . $testThree['Smith'] . "</td><td>" . $testFour['Smith'] . "</td><td>" . $smithAverage . "</td></tr>");
        
        print("<tr><td>Kiel</td><td>" . $testOne['Kiel'] . "</td><td>" . $testTwo['Kiel'] . "</td><td>" . $testThree['Kiel'] . "</td><td>" . $testFour['Kiel'] . "</td><td>" . $kielAverage . "</td></tr>");
        print("<tr><td><strong>Average</strong></td><td>" . $testOneAverage . "</td><td>" . $testTwoAverage . "</td><td>" . $testThreeAverage . "</td><td>" . $testFourAverage . "</td><td class='fill'></td></tr>");    
        print("</table>");
    
?>

<style>
    table {
        font-family: sans-serif;
    }
    th, td {
        height: 25px;
        width: 70px;
        text-align: center;
    }
    
    table, th, td {
        border: 1px black solid;
        border-collapse: collapse;
    }
    
    .fill {
        background-color: gray;
    }
</style>