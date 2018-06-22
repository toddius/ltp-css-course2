<?php 
    $employees = array(
        "Bob" => array(
            "idNumber" => 121,
            "department" => "accounting",
            "salary" => 85000
        ),
        "Terry" => array(
            "idNumber" => 131,
            "department" => "sales",
            "salary" => 78000
        ),
        "Scott" => array(
            "idNumber" => 141,
            "department" => "administration",
            "salary" => 95000
        ),
        "Sue" => array(
            "idNumber" => 221,
            "department" => "sales",
            "salary" => 65000
        ),
    );

    print("Scotts salary: " . $employees['Scott']['salary']);
    print("<br/>Terrys department: " . $employees['Terry']['department']);
?>