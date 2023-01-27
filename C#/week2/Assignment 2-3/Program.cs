int GetInteger(string prompt, int min, int max)
{
    int number;
    Console.Write(prompt);
    while (!int.TryParse(Console.ReadLine(), out number) || number < min || number > max)
    {
        Console.Write($"Invalid input. Please enter an integer between {min} and {max}: ");
    }
    return number;
}

var number = GetInteger("Please type a number between 1-2000: ", 1, 2000);

Console.WriteLine($"Your number is {number}.");