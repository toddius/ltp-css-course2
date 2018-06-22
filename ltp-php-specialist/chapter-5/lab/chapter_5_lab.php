<?php 
    $firstName = $_REQUEST['firstName'];
    $lastName = $_REQUEST['lastName'];
    $annualIncome = $_REQUEST['annualIncome'];

    //Test to see if data is received from form
    /*echo($firstName);
    echo("<br/>" . $lastName);
    echo("<br/>" . $annualIncome);*/
   
    echo("<h2>Here are the results of your submission:</h2>");

    if ($annualIncome >= 1000000) 
    {
        $taxRate = 0.1250;
        $taxOwed = ($annualIncome * $taxRate);
        $taxPercentage = $taxRate * 100;
        echo("<p>$firstName  $lastName's annual income is: $$annualIncome</p>");
        echo("<p>Your tax rate is: $taxPercentage%</p>");
        echo("<p>The taxes you owe this year are: $$taxOwed</p>");
    }
    else if ($annualIncome >= 200000) 
    {
        $taxRate = 0.1000;
        $taxOwed = ($annualIncome * $taxRate);
        $taxPercentage = $taxRate * 100;
        echo("<p>$firstName  $lastName's annual income is: $$annualIncome</p>");
        echo("<p>Your tax rate is: $taxPercentage%</p>");
        echo("<p>The taxes you owe this year are: $$taxOwed</p>");
    }
    else if ($annualIncome >= 140000) 
    {
        $taxRate = 0.0700;
        $taxOwed = ($annualIncome * $taxRate);
        $taxPercentage = $taxRate * 100;
        echo("<p>$firstName  $lastName's annual income is: $$annualIncome</p>");
        echo("<p>Your tax rate is: $taxPercentage%</p>");
        echo("<p>The taxes you owe this year are: $$taxOwed</p>");
    }
    else if ($annualIncome >= 90000) 
    {
        $taxRate = 0.0650;
        $taxOwed = ($annualIncome * $taxRate);
        $taxPercentage = $taxRate * 100;
        echo("<p>$firstName  $lastName's annual income is: $$annualIncome</p>");
        echo("<p>Your tax rate is: $taxPercentage%</p>");
        echo("<p>The taxes you owe this year are: $$taxOwed</p>");
    }
    else if ($annualIncome >= 65000) 
    {
        $taxRate = 0.0515;
        $taxOwed = ($annualIncome * $taxRate);
        $taxPercentage = $taxRate * 100;
        echo("<p>$firstName  $lastName's annual income is: $$annualIncome</p>");
        echo("<p>Your tax rate is: $taxPercentage%</p>");
        echo("<p>The taxes you owe this year are: $$taxOwed</p>");
    }
    else if ($annualIncome >= 45000) 
    {
        $taxRate = 0.0425;
        $taxOwed = ($annualIncome * $taxRate);
        $taxPercentage = $taxRate * 100;
        echo("<p>$firstName  $lastName's annual income is: $$annualIncome</p>");
        echo("<p>Your tax rate is: $taxPercentage%</p>");
        echo("<p>The taxes you owe this year are: $$taxOwed</p>");
    }
    else if ($annualIncome >= 25000) 
    {
        $taxRate = 0.0350;
        $taxOwed = ($annualIncome * $taxRate);
        $taxPercentage = $taxRate * 100;
        echo("<p>$firstName  $lastName's annual income is: $$annualIncome</p>");
        echo("<p>Your tax rate is: $taxPercentage%</p>");
        echo("<p>The taxes you owe this year are: $$taxOwed</p>");
    }
    else  
    {
        $taxRate = 0.0250;
        $taxOwed = ($annualIncome * $taxRate);
        $taxPercentage = $taxRate * 100;
        echo("<p>$firstName  $lastName's annual income is: $$annualIncome</p>");
        echo("<p>Your tax rate is: $taxPercentage%</p>");
        echo("<p>The taxes you owe this year are: $$taxOwed</p>");
    }
 ?>
 
 <style>
     h2 
     {
         font-family: Arial, sans-serif;
     }
     p 
     {
        font-family: Arial, sans-serif;
    }
 </style>