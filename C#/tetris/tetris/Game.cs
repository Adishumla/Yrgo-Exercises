//
// This is the game event logic that you can customize and cannibalize
// as needed. You should try to write your game in a modular way, avoid
// making one huge Game class.
//
/*get board class from board file*/

class Game
{

    ScheduleTimer? _timer;
    public bool Paused { get; private set; }
    public bool GameOver { get; private set; }
    
    public Board board;
    public Piece piece;
    
    public Game()
    {
        // initialize the game
        board = new Board();
        piece = new Piece( new bool[,] { { true, true, true, true } }, 0, 0);
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
        _timer!.Abort();
    }

    public void Input(ConsoleKey key) 
    {
        switch (key)
        {
            case ConsoleKey.UpArrow:
                if (piece.CanMove(board, 0, -1))
                    piece.Move(0, -1);
                break;
            case ConsoleKey.DownArrow:
                if (piece.CanMove(board, 0, 1))
                    piece.Move(0, 1);
                break;
            case ConsoleKey.LeftArrow:
                if (piece.CanMove(board, -1, 0))
                    piece.Move(-1, 0);
                break;
            case ConsoleKey.RightArrow:
                if (piece.CanMove(board, 1, 0))
                    piece.Move(1, 0);
                break;
        }
        
    }

    void Tick()
    {
        Console.Clear();
        board.ClearLines();
        if (piece.CanMove(board, 0, 0))
        {
            piece.Move(0, 1);
        }
        else
        {
            board.SetBlock( 0, 0);
            piece = new Piece(new bool[,] { { true, true, true, true } }, 0, 0);
        }
        board.Draw();
        // schedule the next tick
        ScheduleNextTick();
    }


    void ScheduleNextTick()
    {
        // the game will automatically update itself every half a second, adjust as needed
        _timer = new ScheduleTimer(500, Tick);
    }
}

