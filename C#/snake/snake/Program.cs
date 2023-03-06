using System.Drawing;

class GameBoard
{
    public int Width { get; set; }
    public int Height { get; set; }
    public const int EMPTY_CELL = 0;
    public const int SNAKE_CELL = 1;
    public const int FOOD_CELL = 2;
    public int[,] Board { get; set; }

    public GameBoard(int width, int height)
    {
        Width = width;
        Height = height;
        Board = new int[width, height];
    }
}

class Snake
{
    public List<Point> Body { get; set; }
    public int Length { get; set; }
    public int Direction { get; set; }
    public Point Position { get; set; }

    public Snake()
    {
        Body = new List<Point>();
        Length = 1;
        Direction = 0;
        Position = new Point(0, 0);
    }
}

class Point : IEquatable<Point>
{
    public int X { get; set; }
    public int Y { get; set; }

    public Point(int x, int y)
    {
        X = x;
        Y = y;
    }

    public bool Equals(Point other)
    {
        return X == other.X && Y == other.Y;
    }
}

class Move : IEquatable<Move>
{
    public int Direction { get; set; }
    public int Score { get; set; }
    public Point Position { get; set; }

    public Move(int direction, int score, Point position)
    {
        Direction = direction;
        Score = score;
        Position = position;
    }

    public bool Equals(Move other)
    {
        return Direction == other.Direction && Score == other.Score && Position.Equals(other.Position);
    }
}

class Loop
{
    public int Direction { get; set; }
    public int Length { get; set; }

    public Loop(int direction, int length)
    {
        Direction = direction;
        Length = length;
    }
}

class GenerateFood
{
    public static Point Generate(GameBoard board, Snake snake)
    {
        var random = new Random();
        var x = random.Next(0, board.Width);
        var y = random.Next(0, board.Height);
        var position = new Point(x, y);

        while (snake.Body.Contains(position))
        {
            x = random.Next(0, board.Width);
            y = random.Next(0, board.Height);
            position = new Point(x, y);
        }

        return position;
    }
}

class Collision
{
    public static bool Check(GameBoard board, Snake snake)
    {
        var head = snake.Body[0];
        var body = snake.Body.Skip(1).ToList();

        if (head.X < 0 || head.X >= board.Width || head.Y < 0 || head.Y >= board.Height)
        {
            return true;
        }

        if (body.Contains(head))
        {
            return true;
        }

        return false;
    }
}

class Program
{
    static void Main(string[] args)
    {
        var board = new GameBoard(20, 20);
        var snake = new Snake();
        var food = GenerateFood.Generate(board, snake);
        
        /*snake*/
        snake.Body.Add(new Point(1, 0));
        
        while (true)
        {
            // Check for user input and update snake direction
            if (Console.KeyAvailable)
            {
                var key = Console.ReadKey(true).Key;
                if (key == ConsoleKey.UpArrow)
                {
                    snake.Direction = 0;
                }
                else if (key == ConsoleKey.RightArrow)
                {
                    snake.Direction = 1;
                }
                else if (key == ConsoleKey.DownArrow)
                {
                    snake.Direction = 2;
                }
                else if (key == ConsoleKey.LeftArrow)
                {
                    snake.Direction = 3;
                }
            }
            // Move the snake
            if (snake.Direction == 0)
            {
                snake.Position = new Point(snake.Position.X, snake.Position.Y - 1);
            }
            else if (snake.Direction == 1)
            {
                snake.Position = new Point(snake.Position.X + 1, snake.Position.Y);
            }
            else if (snake.Direction == 2)
            {
                snake.Position = new Point(snake.Position.X, snake.Position.Y + 1);
            }
            else if (snake.Direction == 3)
            {
                snake.Position = new Point(snake.Position.X - 1, snake.Position.Y);
            }
            // Check for collision with walls or snake body
            if (Collision.Check(board, snake))
            {
                break;
            }
            // Check for collision with food and update game score
            if (snake.Position.Equals(food))
            {
                snake.Length++;
                food = GenerateFood.Generate(board, snake);
            }
            // Generate new food if necessary
            if (snake.Length == board.Width * board.Height)
            {
                food = GenerateFood.Generate(board, snake);
            }
            // Redraw the game board
            for (var y = 0; y < board.Height; y++)
            {
                for (var x = 0; x < board.Width; x++)
                {
                    var position = new Point(x, y);
                    if (snake.Body.Contains(position))
                    {
                        board.Board[x, y] = GameBoard.SNAKE_CELL;
                    }
                    else if (position.Equals(food))
                    {
                        board.Board[x, y] = GameBoard.FOOD_CELL;
                    }
                    else
                    {
                        board.Board[x, y] = GameBoard.EMPTY_CELL;
                    }
                }
            }
            // Wait for a short amount of time before repeating loop
            Thread.Sleep(100);
        }
        
        Console.WriteLine("Game Over!");
    }
}