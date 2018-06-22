window.onload=function()
    {
        document.getElementById('getLocationBtn').addEventListener('click', grabLocation);  
        
        var options  = {enableHighAccuracy: true};
    
        function grabLocation()
            {
                navigator.geolocation.getCurrentPosition(showGoogleLink, error, options);
            }
    
        var myLocation = document.getElementById('mapsLink');
    
        function error()
            {
                alert('There was an error');
            }
    
        function showGoogleLink(position, options)
            {
                myLocation.innerHTML = "<a href = https://www.google.com/maps/@" + position.coords.latitude + ',' + position.coords.longitude + "> Click Me </a>"
            }
        
    }

