function purpleWords()
    {

var boldWords = document.getElementsByTagName('strong');

for (var i = 0; i < boldWords.length; i++)
    {
        boldWords[i].style.color = 'magenta';
    }

    }

function returnColor()
    {

var boldWords = document.getElementsByTagName('strong');

for (var i = 0; i < boldWords.length; i++)
    {
        boldWords[i].style.color = 'black';
    }

    }
