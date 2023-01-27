double GetValidInput()
{
    while (true)
    {
        var input = Console.ReadLine();
        if (double.TryParse(input, out double result))
        {
            return result;
        }
        else
        {
            Console.Write("Invalid input. Please try again with a valid number. ");
        }
    }
}

double Calculate (params double[] values)
{
    return values.Sum();
}

double compareAnswer(double answer, double sum)
{
    if (answer == sum)
    {
        return 1;
    }
    else
    {
        return 0;
    }
}

Console.Write("Please input the value for X: ");
var x = GetValidInput();
Console.Write("Please input the value for Y: ");
var y = GetValidInput();

Console.Write($"What is the sum of {x} and {y}? ");
var answer = double.Parse(Console.ReadLine());

var sum = Calculate(x, y);
var compare = compareAnswer(answer, sum);

if (compare == 1)
{
    Console.WriteLine($"{sum} is correct!");
}
else
{
    Console.WriteLine("Incorrect!");
}
