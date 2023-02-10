// create two boxes
var box1 = new Box()
{
    X = 3,
    Y = 2,
    Width = 7,
    Height = 4,
    Color = ConsoleColor.Red
};

var box2 = new Box()
{
    X = 17,
    Y = 4,
    Width = 13,
    Height = 8,
    Color = ConsoleColor.Blue
};

// then draw both on the screen
box1.Draw();
box2.Draw();

class Box
{
    public int X { get; set; }
    public int Y { get; set; }
    public int Width { get; set; }
    public int Height { get; set; }
    public ConsoleColor Color { get; set; }

    public void Draw()
    {
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
                        Console.Write("X");
                    }
                }
            }
        }
    }
}