window.onload=function()
{
   var name = prompt("What is your name?");
    //console.log(name);
    if(name)
    {   
        document.getElementById('userName').innerHTML += "<h1>The users name is " + name + "</h1>";
    }
    else
    {
       document.getElementById('userName').innerHTML += "<h1>The user did not enter their name.</h1>";
    } 
    //alert("The users name is " + name);
    document.getElementById('confirmButton').addEventListener('click', runConfirm);
    
    function runConfirm()
    {
        var message;
        
        if(confirm("Press a button!") == true)
            {
                message = "<h3>You presssed OK!</h3>";
            }
        else
            {
                message = "<h3>You presssed cancel.</h3>";
            }
        
        document.getElementById("text").innerHTML = message;
    }
    
}

