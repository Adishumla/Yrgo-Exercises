
int CalculatePrice(int quantity, int pricePerItem)
{
    
    int freeItems = quantity / 10;
    int total = (quantity - freeItems) * pricePerItem;
    return total;
    
}

Console.WriteLine($"Buying 8 units at $10:- costs ${CalculatePrice(8, 10)}");
Console.WriteLine($"Buying 16 units at $10:- costs ${CalculatePrice(16, 10)}");
Console.WriteLine($"Buying 28 units at $35:- costs ${CalculatePrice(28, 35)}");
