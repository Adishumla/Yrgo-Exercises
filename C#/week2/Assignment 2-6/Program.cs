int GetInteger(string prompt, int min, int max)
{
    int number;
    while (true)
    {
        Console.Write(prompt);
        if (int.TryParse(Console.ReadLine(), out number) && number >= min && number <= max)
        {
            break;
        }
        Console.WriteLine($"Invalid input. Please enter an integer between {min} and {max}.");
    }
    return number;
}

void GetYears(int firstDate, int secondDate)
{
    for (int i = firstDate; i <= secondDate; i++)
    {
        Console.WriteLine($"{i} {(DateTime.IsLeapYear(i) ? "*" : "")}");
    }
}



var firstDate = GetInteger("Please type a number between 0-9999: ", 0, 9999);
var secondDate = GetInteger("Please type a number between 0-9999: ", 0, 9999);

if (firstDate > secondDate)
{
    Console.WriteLine("Invalid input. The first date must be before the second date."); 
    secondDate = GetInteger("Please type a number between 0-9999: ", 0, 9999);
}

GetYears(firstDate, secondDate);