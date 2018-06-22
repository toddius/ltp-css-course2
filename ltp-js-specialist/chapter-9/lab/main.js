window.onload=function()
{
    var sentence = "do or do not; there is no try."; 
    
    function capWord(str)
    {
        return str.charAt(0).toUpperCase() + str.slice(1);
    }
    
    alert(capWord(sentence));
    
    //Alphabetize words from orginal string then output them in the cosole as an array.
    var alphaArray = sentence.split(" ");
    var alphaOrder = alphaArray.sort();
    console.log(alphaOrder);
}