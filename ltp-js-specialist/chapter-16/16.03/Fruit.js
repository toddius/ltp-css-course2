function Fruit(name, color, weight) {
    this.name = name;
    this.color = color;
    this.weight = weight;
    
    this.describeColor = function()
    {
        return this.color;
    }
    
    this.takeABite = function()
    {
        this.weight = this.weight * .66;
        return this.weight;
    }
}