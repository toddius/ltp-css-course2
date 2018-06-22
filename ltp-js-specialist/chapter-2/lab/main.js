window.onload = function()
{
    document.getElementById('addingButton').addEventListener("click", addNumbers);
    document.getElementById('subtractButton').addEventListener("click", subtractNumbers);
    document.getElementById('multiplyButton').addEventListener("click", multiplyNumbers);
    document.getElementById('divideButton').addEventListener("click", divideNumbers);
}


function addNumbers(e)
{
    var answer = "";
    answer += + document.getElementById('inputOne').value + + document.getElementById('inputTwo').value 
    
    alert(answer)
};

function subtractNumbers(e)
{
    var answer = "";
    answer += + document.getElementById('inputOne').value - + document.getElementById('inputTwo').value 
    
    alert(answer)
};

function multiplyNumbers(e)
{
    var answer = "";
    answer += + document.getElementById('inputOne').value * + document.getElementById('inputTwo').value 
    
    alert(answer)
};

function divideNumbers(e)
{
    var answer = "";
    answer += + document.getElementById('inputOne').value / + document.getElementById('inputTwo').value 
    
    alert(answer)
};
