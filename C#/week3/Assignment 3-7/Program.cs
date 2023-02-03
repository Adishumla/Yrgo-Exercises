Console.ForegroundColor = ConsoleColor.Green;
int christmasTree(int number)
{
    int i, j, k, l;
    for (i = 1; i <= number; i++)
    {
        for (j = 1; j <= number - i; j++)
        {
            Console.Write(" ");
        }
        for (k = 1; k <= 2 * i - 1; k++)
        {
            Console.Write("*");
        }
        Console.WriteLine();
    }
    for (l = 1; l <= number - 2; l++)
    {
        Console.Write(" ");
    }

    Console.ForegroundColor = ConsoleColor.DarkYellow;
    Console.WriteLine("[ ]");
    return number;
}

Console.Write("Enter a number: ");
int number = int.Parse(Console.ReadLine());
christmasTree(number);