<?php 
 //  syntax for either get or post method
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];

 //   syntax for method="Get"
 //   $name = $_GET['name'];
 //   $email = $_GET['email'];
 
 //   syntax for method="Post"
 //   $name = $_POST['name'];
 //   $email = $_POST['email'];


    print("You entered:  $name, $email<br/>");
?>