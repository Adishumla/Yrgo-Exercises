int GetInteger(string prompt)
{
    int number;
    Console.Write(prompt);
    while (!int.TryParse(Console.ReadLine(), out number))
    {
        Console.Write("Invalid input. Please enter an integer: ");
    }
    return number;
}

var number = GetInteger("Please type a number: ");

Console.WriteLine($"Your number is {number}.");