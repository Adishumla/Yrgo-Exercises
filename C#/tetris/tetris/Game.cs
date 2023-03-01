//
// This is the game event logic that you can customize and cannibalize
// as needed. You should try to write your game in a modular way, avoid
// making one huge Game class.
//

using tetris;

class Game
{
    Board board = new Board();
    public Game()
    {
        board.PrintBoard();
    }
    
    ScheduleTimer? _timer;
    public bool Paused { get; private set; }
    public bool GameOver { get; private set; }

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
        /*Console.WriteLine($"Player pressed key: {key}");*/
        
        /*switch (key)
        {
            case ConsoleKey.UpArrow:
                Console.WriteLine("Up");
                break;
            case ConsoleKey.DownArrow:
                Console.WriteLine("Down");
                break;
            case ConsoleKey.LeftArrow:
                Console.WriteLine("Left");
                break;
            case ConsoleKey.RightArrow:
                Console.WriteLine("Right");
                break;
        }*/
        
        /*Do above but move the Tetromino*/
        
    }

    void Tick()
    {
        // schedule the next tick
        ScheduleNextTick();
        
        /*move tetromino down every tick*/
        
    }

    void ScheduleNextTick()
    {
        // the game will automatically update itself every half a second, adjust as needed
        _timer = new ScheduleTimer(500, Tick);
    }
}

