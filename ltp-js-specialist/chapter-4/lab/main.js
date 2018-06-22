window.onload=function()
{
    document.getElementById('findNameBtn').addEventListener('click', lookForName);        
}

function lookForName(e)
{
    var myName = "Todd";
    var timesFound = [];
    var text = document.getElementById('inputNameBox').value;
    
    // Using a while loop instead
    
    var i = 0;
    while (i < text.length)
        {
            if(text[i] === "T")
                {
                for (var j = i; j < (myName.length + i); j++)
                    {
                        timesFound.push(text[j]);
                    }
                }
            i++;
        }
    
    
    /*for (var i = 0; i < text.length; i++)
        {
            if(text[i] === "T")
                {
                for (var j = i; j < (myName.length + i); j++)
                    {
                        timesFound.push(text[j]);
                    }
                }
        }*/
    
    if (timesFound.length === 0)
        {
            alert("Your name wasn't found!");
        }
    else
        {
            alert(timesFound);
        }
}