window.onload=function()
    {
        document.getElementById('hoursButton').addEventListener('click', runCheckHours);
    
        document.getElementById('subtractButton').addEventListener('click', subtract);
        
    }

function runCheckHours()
    {
        var hoursSlept = document.getElementById('hoursInput').value;
        checkHours(hoursSlept);
    }

function checkHours(numHours)
    {
        var hoursSlept = document.getElementById('hoursInput').value;
        if(hoursSlept >= 8)
            {
                return alert("You're getting too much sleep!")
            }
        else
            {
                return alert ("Get some more sleep!")
            }
    };

function subtract(a,b)
    {
        var a = document.getElementById('numberOne').value;
        var b = document.getElementById('numberTwo').value;
        
        var c = a - b;
        
        //console.log(c);
        alert("The value is: " + c);
    }