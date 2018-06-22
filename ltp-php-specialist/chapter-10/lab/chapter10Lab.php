<?php 
/* fahrenheit - celsius conversions */
//converting from fahrenheit to celsius
    function fahrenToCels ($fahren)
    {
        $celsius = ($fahren - 32) * (5/9);
        return $celsius;
    }

//converting from celsius to fahrenheit
    function celsToFahren ($celsius)
    {
        $fahren = $celsius * 1.8 +32;
        return $fahren;
    }

/* inches - centimeters conversions */

//converting from inches to centimeters
    function inchesToCm ($inch)
    {
        $cm = $inch * 2.54;
        return $cm;
    }

//converting from centimeters to inches
    function cmToInches ($cm)
    {
        $inch = $cm * 0.3937;
        return $inch;
    }

/* miles - kilometers conversions */
//converting from miles to kilometers
    function milesToKm ($miles)
    {
        $km = $miles * 1.609;
        return $km;
    }

//converting from kilometers to miles
    function kmToMiles ($km)
    {
        $miles = $km * 0.62137;
        return $miles;
    }

//Determine which submit button was clicked and which radio button was chosen
if (isset($_REQUEST['submitTemp'])) 
    {
        $tempValue = $_REQUEST['tempValue'];
        if (!empty($_REQUEST['tempScale'])) 
        {
            $tempScale = $_REQUEST['tempScale'];
        //determine which radio button was selected and call appropriate function
        if ($tempScale == 'fahren')
            {
                print("The temperature in Celsius is: " .  fahrenToCels($tempValue));
            }
    
        else if ($tempScale == 'celsius')
            {
                print("The temperature in Fahrenheit is:  " .  celsToFahren($tempValue));
            }
        }
    }

elseif (isset($_REQUEST['submitLength'])) 
    {
        $lengthValue = $_REQUEST['lengthValue'];
        if (!empty($_REQUEST['lengthScale'])) 
        {
            $lengthScale = $_REQUEST['lengthScale'];
        //determine which radio button was selected and call appropriate function
        if ($lengthScale == 'inch')
            {
                print("The length in cm is: " .  inchesToCm($lengthValue));
            }
    
        else if ($lengthScale == 'cm')
            {
                print("The length in inches is:  " .  cmToInches($lengthValue));
            }
        }
    }

elseif (isset($_REQUEST['submitDist'])) 
    {
        $distanceValue = $_REQUEST['distanceValue'];
        if (!empty($_REQUEST['distanceScale']))
        {
            $distanceScale = $_REQUEST['distanceScale'];
        //determine which radio button was selected and call appropriate function
        if ($distanceScale == 'miles')
            {
                print("The distance in kilometers is: " .  milesToKm($distanceValue));
            }
    
        else if ($distanceScale == 'km')
            {
                print("The distance in miles is:  " .  kmToMiles($distanceValue));
            }
        }
    }

    
?>