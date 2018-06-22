window.onload=function()
        {
            var sentence = "This is a test to check how many vowels are in this sentence."
            
            alert(sentence.match(/[aeiou]/gi).length);
    
            //Tests if the first character of a string is uppercase or not.
            
            alert(/[A-Z]/.test(sentence));
        };