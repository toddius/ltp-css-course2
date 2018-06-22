window.onload=function()
{
    var arr = [9,2,8,6,3,6,2,6,3,8,7,9,8,5,2,2,5,7,8,8,7,4,];
    var mostFrequent = 1;
    var notFrequent = 0;
    var item;
    
    for(var i=1; i < arr.length; i++)
    {
        for(var j=i; j < arr.length; j++)
        {
            if(arr[i]== arr[j])
                    notFrequent++;
            if(mostFrequent < notFrequent)
                {
                    mostFrequent = notFrequent;
                    item = arr[i];
                }
        }
        
        notFrequent = 0;
    }
    
    alert(item + " appears " + mostFrequent + " times");
    
    //Getting the first element of an array
    
    document.getElementById('result').innerHTML += "<h1>" + arr[0] + "<h1>";
    
    //Passing a parameter 'n' will return the first 'n' elements of the array.
    
    var values = "";
    
    for(var n=0; n < 6; n++)
        {
            values += " " + arr[n] + " ";
        }
    
    //console.log(values);
    
    document.getElementById('result2').innerHTML += "<h1>" + values + "<h1>";
}