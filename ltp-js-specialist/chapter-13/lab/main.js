window.onload=function()
    {
        document.getElementById('httpButton').addEventListener('click', renderText)
    }

function renderText()
    {
        var xhttp = new XMLHttpRequest();
        
        xhttp.onreadystatechange = function ()
        {
            document.getElementById('demo').innerHTML = xhttp.responseText;
        };
        
        xhttp.open("GET", "text.txt", true);
        console.log('text');
        xhttp.send();
    }

