window.onload = function ()
    {
    document.getElementById("checkDay").addEventListener("click", runIsWeekend);
    
        
    function runIsWeekend ()
        {
            var dateToCheck = document.getElementById('inputDay').value;
            
            isWeekend(dateToCheck);
        }
    
    function isWeekend(userDate)
        {
        var d = new Date(userDate);
        if(d.getDay() == 6 || d.getDay() == 0)
            {
                return alert("It's a weekend!");
            }
        alert("Not a weekend!");
        }
    
    //Find out how many days are in a month and pish the days into an array
    
    
    document.getElementById("checkMonth").addEventListener("click", getMonth);
    
    function getMonth ()
        {
            var monthToCheck = document.getElementById('inputMonth').value;
            
            daysOfMonth(monthToCheck);
        }
    
    
    function daysOfMonth(userMonth)
    {
        var m = new Date(userMonth);
        /*var monthDays = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28];
        
        if(m.getMonth() == 1)
            {
                return alert("The month has 28 days!");
                //console.log("The month has 28 days!");
                console.log(monthDays);
            }
        
    
        else if(m.getMonth() == 3 || m.getMonth() == 5 || m.getMonth() == 8 || m.getMonth() == 10)
            {
                return alert("The month has 30 days!");
                //console.log("The month has 30 days!");
                monthDays.push(29,30);
                console.log(monthDays);
            }
       

        else
            {    
            alert("The month has 31 days!");
            monthDays.push(29,30,31);
            console.log(monthDays);
            } */
            
        var monthDays = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31];    
        if(m.getMonth() == 0 || m.getMonth() == 2 || m.getMonth() == 4 || m.getMonth() == 6 || m.getMonth() == 7 || m.getMonth() == 9 || m.getMonth() == 11)
            {
                return alert("The month has 31 days!");
                //console.log("The month has 28 days!");
                console.log(monthDays);
            }
        
    
        else if(m.getMonth() == 3 || m.getMonth() == 5 || m.getMonth() == 8 || m.getMonth() == 10)
            {
                return alert("The month has 30 days!");
                //console.log("The month has 30 days!");
                monthDays.pop();
                console.log(monthDays);
            }
       

        else
            {    
            alert("The month has 28 days!");
            monthDays.pop();
            monthDays.pop();
            monthDays.pop();
            console.log(monthDays);
            } 
        
    }
}