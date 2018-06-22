<?php
    $computers = array ('Commodore 64', 'ZX Spectrum', 'IBM PC 5150', 'Apple Macintosh', 'Commodore 64', 'Amstrad CPC 464', 'BBC Micro', 'ZX Spectrum');



   if(isset($_POST['delete']))
    {
        $deleteNumber = array_pop(array_keys($_POST['delete']));
        //array_pop(asort($delete));
        
        switch ($deleteNumber)
        {
            case 0:
                array_splice($computers, 0, 1);
                print_r($computers);
                break;
            case 1:
                array_splice($computers, 1, 1);
                print_r($computers);
                break;
            case 2:
                array_splice($computers, 2, 1);
                print_r($computers);
                break;
            case 3:
                array_splice($computers, 3, 1);
                print_r($computers);
                break;
            case 4:
                array_splice($computers, 4, 1);
                print_r($computers);
                break;
            case 5:
                array_splice($computers, 5, 1);
                print_r($computers);
                break;
            case 6:
                array_splice($computers, 6, 1);
                print_r($computers);
                break;
            case 7:
                array_splice($computers, 7, 1);
                print_r($computers);       
        }
        
       // array_splice($computers, $delete, 1);
       // print_r($computers);
        
    }
    
    if(isset($_REQUEST['add']))
    {
        $add = $_REQUEST['add'];
        if (empty($newComputer))
        {
            $changedComputers = array(array_push($computers, $add));
            return ($computers);
            print ($computers);
        }
    } 

  /*   if(isset($_REQUEST['delete']))
    {
        $index = $_REQUEST['delete'];
        if ($index === true)
        //if ($index >= 0 && $index <= ($computersLength -1))
        {
            removeComputer($index);
        }
    }
    
    if(isset($_REQUEST['submit']))
    {
        $newComputer = $_REQUEST['submit'];
        //if (empty($newComputer))
        if ($newComputer === true)
        {
            addComputer();
        }
    } */

   
?>