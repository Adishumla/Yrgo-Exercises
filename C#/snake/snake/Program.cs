using System.Drawing;

var game = new Game();

game.Start();

while (!game.GameOver)
{
    // listen to key presses
    if (Console.KeyAvailable)
    {
        var input = Console.ReadKey(true);

        switch (input.Key)
        {
            // send key presses to the game if it's not paused
            case ConsoleKey.UpArrow:
            case ConsoleKey.DownArrow:
            case ConsoleKey.LeftArrow:
            case ConsoleKey.RightArrow:
                if (!game.Paused)
                    game.Input(input.Key);
                break;

            case ConsoleKey.P:
                if (game.Paused)
                    game.Resume();
                else
                    game.Pause();
                break;

            case ConsoleKey.Escape:
                game.Stop();
                return;
        }
    }
}

class ScheduleTimer : IDisposable
{
    public bool Aborted { get; private set; }

    bool _active = true;

    long _start;
    long _time;

    System.Timers.Timer? _timer;

    readonly Action _action;

    public ScheduleTimer(int time, Action action)
    {
        _time = time;
        _action = () =>
        {
            _active = false;
            action();
        };

        Resume();
    }

    public void Pause()
    {
        if (_active && !Aborted)
        {
            Invalidate();
            _time = Math.Max(1, _time - (DateTimeOffset.Now.ToUnixTimeMilliseconds() - _start));
        }
    }

    public void Resume()
    {
        if (_active && !Aborted)
        {
            _start = DateTimeOffset.Now.ToUnixTimeMilliseconds();
            _timer = new System.Timers.Timer(_time);
            _timer.Elapsed += (sender, arg) => _action();
            _timer.AutoReset = false;
            _timer.Start();
        }
    }

    void Invalidate()
    {
        if (_timer != null)
        {
            _timer.Enabled = false;
            _timer.Close();
            _timer = null;
        }
    }

    public void Dispose() => Invalidate();
}

class Game
{
    ScheduleTimer? _timer;
    Board _board;
    Snake snake = new Snake(new Point(0, 0));
    public bool Paused { get; private set; }
    public bool GameOver { get; private set; }
    private Food _food;
    public Game()
    {
        _board = new Board(10, 10);
        _food = new Food(new Point( new Random().Next(0, _board.Width), new Random().Next(0, _board.Height)), _board);
    }

    public void Start()
    {
        Console.WriteLine("Start");
        ScheduleNextTick();
    }

    public void Pause()
    {
        Console.WriteLine("Pause");
        Paused = true;
        _timer!.Pause();
    }

    public void Resume()
    {
        Console.WriteLine("Resume");
        Paused = false;
        _timer!.Resume();
    }

    public void Stop()
    {
        Console.WriteLine("Stop");
        GameOver = true;
    }

    public void Input(ConsoleKey key)
    {
        switch (key)
        {
            case ConsoleKey.UpArrow:
                snake.Direction = Direction.Up;
                break;
            case ConsoleKey.DownArrow:
                snake.Direction = Direction.Down;
                break;
            case ConsoleKey.LeftArrow:
                snake.Direction = Direction.Left;
                break;
            case ConsoleKey.RightArrow:
                snake.Direction = Direction.Right;
                break;
        }
    }

    void Tick()
    {
        snake.Move();
        
        if (snake.CollidesWithSelf())
        {
            Stop();
            return;
        }
        
        if (snake.Head.X < 0 || snake.Head.X >= _board.Width || snake.Head.Y < 0 || snake.Head.Y >= _board.Height)
        {
            Stop();
            return;
        }

        if (snake.Head == _food.Position)
        {
            snake.Grow();
            _food.Respawn();
        }

        ScheduleNextTick();
        
        _board.Draw(snake, _food);
        
        Console.WriteLine("Score: " + snake.Body.Count);

    }

    void ScheduleNextTick()
    {
        // the game will automatically update itself every half a second, adjust as needed
        _timer = new ScheduleTimer(500, Tick);
    }
    
}

enum Direction
{
    Up,
    Down,
    Left,
    Right
}

class Snake
{
    public List<Point> Body { get; private set; }
    public Point Head => Body.Last();
    public Direction Direction { get; set; }

    public Snake(Point headPosition)
    {
        Body = new List<Point> { headPosition };
        Direction = Direction.Right;
    }

    public void Move()
    {
        var newHeadPosition = Head.Add(Direction.ToPoint());
        Body.Add(newHeadPosition);
        Body.RemoveAt(0);
    }
    
    public void Grow()
    {
        var newHeadPosition = Head.Add(Direction.ToPoint());
        Body.Add(newHeadPosition);
    }

    public bool CollidesWithSelf()
    {
        return Body.Take(Body.Count - 1).Contains(Head);
    }
}

class Food
{
    public Point Position { get; private set; }
    private Board _board;

    public Food(Point position, Board board)
    {
        Position = position;
        _board = board;
    }

    public void Respawn()
    {
        Position = new Point(
            new Random().Next(0, _board.Width),
            new Random().Next(0, _board.Height)
        );
    }
}

static class DirectionExtensions
{
    public static Point ToPoint(this Direction direction)
    {
        return direction switch
        {
            Direction.Up => new Point(0, -1),
            Direction.Down => new Point(0, 1),
            Direction.Left => new Point(-1, 0),
            Direction.Right => new Point(1, 0),
            _ => throw new ArgumentException("Invalid direction", nameof(direction))
        };
    }
}

static class PointExtensions
{
    public static Point Add(this Point point, Point other)
    {
        return new Point(point.X + other.X, point.Y + other.Y);
    }
}

class Board
{
    public int Width { get; }
    public int Height { get; }

    public Board(int width, int height)
    {
        Width = width;
        Height = height;
    }

    public bool IsInside(Point point)
    {
        return point.X >= 0 && point.X < Width && point.Y >= 0 && point.Y < Height;
    }
    
    public void Draw(Snake snake, Food food)
    {
        Console.Clear();
        Console.SetCursorPosition(0, 0);
        Console.WriteLine();
        
        for (var y = 0; y < Height; y++)
        {
            for (var x = 0; x < Width; x++)
            {
                var point = new Point(x, y);
                if (snake.Body.Contains(point))
                {
                    Console.ForegroundColor = ConsoleColor.Black;
                    Console.Write("O");
                }
                else if (food.Position == point)
                {
                    Console.ForegroundColor = ConsoleColor.Black;
                    Console.Write("X");
                }
                else
                {
                    Console.BackgroundColor = ConsoleColor.White;
                    Console.Write(" ");
                }
            }
            Console.WriteLine();
        }
    }
}


