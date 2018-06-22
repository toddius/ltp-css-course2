<html>
<head>
    <title>Chapter 8 Lab - Activity 1</title>
    
</head>
<body>
    <!--<form method="post" action="activity1.php">-->
<?php 
displayComputers();
        
function displayComputers() 
{
   $computers = array ('Commodore 64', 'ZX Spectrum', 'IBM PC 5150', 'Apple Macintosh', 'Commodore 64', 'Amstrad CPC 464', 'BBC Micro', 'ZX Spectrum');
    
    $computersLength = count($computers);
    print("<form method='post' action='activity1.php' >");
    for ($c = 0; $c < $computersLength; $c++)
    {
        $index = $c;
        print("<label name='$index'>$computers[$c]</label><input type='submit' name='delete' value='Delete'/><br/>");
        //print(" <input type='submit' name='$index' value='Delete'/><br/>");
    }
    
        print("<label>Add a new computer to the list by typing it in and clicking the 'Add' button.</label><br/>");
        print("<input type='text' name='newComputer'/>");
        print("<input type='submit' name='add' value='Add'/><br/>");
        print("</form>"); 
    
    if(isset($_REQUEST['delete']))
    {
        $index = $_REQUEST['delete'];
        if ($index === true)
        //if ($index >= 0 && $index <= ($computersLength -1))
        {
            removeComputer($index);
        }
    }
    
    if(isset($_REQUEST['add']))
    {
        $newComputer = $_REQUEST['add'];
        //if (empty($newComputer))
        if ($newComputer === true)
        {
            addComputer();
        }
    } 

}   

function removeComputer()
{
    $computers = array_splice($computers, $index, 1);
    print($computers);
   // displayComputersChanged($changedComputers);
}

        
function addComputer()
{
        $changedComputers = array(array_push($computers, $newComputer));
        return $changedComputers;
        console.log($changedComputers);
        //displayComputersChanged($changedComputers);
}

function displayComputersChanged()
{  
    $changedComputers = array ();
    $computersLength = count($changedComputers);
    print("<form method='post' action='activity1.php' >");
    for ($c = 0; $c < $computersLength; $c++)
    {
        $index = $c;
        
        print("<label for='$index'>$changedComputers[$c]</label>");
        print(" <input type='submit' name='$index' value='Delete'/><br/>");
    }
    
        print("<label>Add a new computer to the list by typing it in and clicking the 'Add' button.</label><br/>");
        print("<input type='text' for='newComputer'/>");
        print("<input type='submit' name='newComputer' value='Add'/><br/>");
        print("</form>");   
    
    if(isset($_REQUEST['$index']))
    {
        $index = $_REQUEST['$index'];
        if ($index)
        {
            removeComputer();
        }
    }
    
    if(isset($_REQUEST['newComputer']))
    {
        $newComputer = $_REQUEST['newComputer'];
        if (empty($newComputer))
        {
            addComputer();
        }
    } 
}
        
       
?>
   <!-- </form> -->
</body>
</html>

