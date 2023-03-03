
public class Board
{
    private const int BoardWidth = 5;
    private const int BoardHeight = 10;

    private readonly bool[,] _board = new bool[BoardWidth, BoardHeight];

    public void Draw()
    {
        Console.Clear();

        for (int y = 0; y < BoardHeight; y++)
        {
            for (int x = 0; x < BoardWidth; x++)
            {
                if (_board[x, y])
                {
                    Console.Write("[X]");
                }
                else
                {
                    Console.Write("[ ]");
                }
            }

            Console.WriteLine();
        }
    }
    
    public bool IsValidPosition(int x, int y)
    {
        return x >= 0 && x < BoardWidth && y >= 0 && y < BoardHeight && !_board[x, y];
    }

    public void SetBlock(int x, int y)
    {
        _board[x, y] = true;
    }

    public void ClearLines()
    {
        for (int y = BoardHeight - 1; y >= 0; y--)
        {
            bool lineComplete = true;
            for (int x = 0; x < BoardWidth; x++)
            {
                if (!_board[x, y])
                {
                    lineComplete = false;
                    break;
                }
            }
            if (lineComplete)
            {
                
                for (int i = y; i >= 0; i--)
                {
                    for (int x = 0; x < BoardWidth; x++)
                    {
                        if (i > 0)
                        {
                            _board[x, i] = _board[x, i - 1];
                        }
                        else
                        {
                            _board[x, i] = false;
                        }
                    }
                }
                y++;
            }
        }
    }
}