var star = new Star();

while(true)
{
    star.Move();
}

public class Star
{
    public int X { get; set; }
    public int Y { get; set; }
    public int DirectionX { get; set; }
    public int DirectionY { get; set; }
    public Star()
    {
        X = new Random().Next(0, Console.WindowWidth);
        Y = new Random().Next(0, Console.WindowHeight);
        DirectionX = new Random().Next(-1, 2);
        DirectionY = new Random().Next(-1, 2);
    }
    public void Move()
    {
        if (X == 0 || X == Console.WindowWidth - 1)
        {
            DirectionX *= -1;
        }
        if (Y == 0 || Y == Console.WindowHeight - 1)
        {
            DirectionY *= -1;
        }
        X += DirectionX;
        Y += DirectionY;
        Console.SetCursorPosition(X, Y);
        Console.Write("*");
        Thread.Sleep(100);
        Console.SetCursorPosition(X, Y);
    }
}