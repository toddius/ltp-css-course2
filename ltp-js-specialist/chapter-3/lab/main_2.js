window.onload = function()
{
    document.getElementById("playButton").addEventListener('click', randomNumber);
}

function randomNumber(e)
{
    var choice = document.getElementById('itemChoice').value;
    var choiceNumber
    //console.log(choice);
    switch (choice)
        {
            case "rock":
                choiceNumber = .25;
                break;
            case "paper":
                choiceNumber = .50;
                break;
            case "scissors":
                choiceNumber = .75;
                break;
        }
    var computerNumber = Math.random();
    
    if(choiceNumber == .25)
        {
            if(computerNumber <= choiceNumber)
                {
                    alert('Computer chose scissors, YOU WIN!');
                }
            else
                {
                    alert('Computer chose paper, YOU LOSE!');
                }
        }
    
    if(choiceNumber == .50)
        {
            if(computerNumber <= choiceNumber)
                {
                    alert('Computer chose rock, YOU WIN!');
                }
            else
                {
                    alert('Computer chose scissors, YOU LOSE!');
                }
        } 
    
    if(choiceNumber == .75)
        {
            if(computerNumber <= choiceNumber)
                {
                    alert('Computer chose paper, YOU WIN!');
                }
            else
                {
                    alert('Computer chose rock, YOU LOSE!');
                }
        }
}