window.onload=function()
{
    var randomBox1 = document.getElementById('eventBox1');
    var randomBox2 = document.getElementById('eventBox2');
    
    randomBox2.onmouseover = function(e)
    {
        alert("You hovered over the red box at time " + e.timeStamp);
        //console.log(e);
    }
    
    randomBox1.onclick = function(e)
    {
        alert("You clicked the blue box at position X= " + e.clientX + " and position Y= " + e.clientY);
        //console.log(e);
        
    }
    
    window.onkeypress = function(e)
    {
        alert("You pressed the " + e.key + " key.");
        //console.log(e);
    }
}