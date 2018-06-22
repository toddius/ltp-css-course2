window.onload = function ( )
    {
        document.getElementById('consoleButton').addEventListener('click', respondOne);
        document.getElementById('browserButton').addEventListener('click', respondTwo);
        document.getElementById('alertButton').addEventListener('click', respondThree);
    }

function respondOne(e)
    {
        console.log ("Thanks for clicking the console button!");
    }

function respondTwo(e)
    {
        document.getElementById('browserButton').innerHTML = "Thanks for clicking the browser button!";
    }

function respondThree(e)
{
    alert("Your computer will self destruct in 2 minutes!!");
}