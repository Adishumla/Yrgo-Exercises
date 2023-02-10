// generate a random color
var random = new Random();


for (int i = 0; i < 40; i++)
{
    var Height = random.Next(random.Next(Console.WindowHeight), Console.WindowHeight);
    var Width = random.Next(random.Next(Console.WindowWidth), Console.WindowWidth);
    var X = random.Next(1, 10);
    var Y = random.Next(1, 10);
    Console.BackgroundColor = (ConsoleColor)random.Next(1, 16);
    var Color = (ConsoleColor)random.Next(1, 16);
    Console.SetCursorPosition(random.Next(Console.WindowWidth), random.Next(Console.WindowHeight));
    Console.Write(" ");
    //random area in console
    for (int y = 0; y < Height; y++)
    {
        if (y <= Height)
        {
            Console.SetCursorPosition(X, Y + y);
            for (int x = 0; x < Width; x++)
            {
                if (x <= Width)
                {
                    Console.ForegroundColor = Color;
                    Console.Write(" ");
                }
            }
        }
    }
}