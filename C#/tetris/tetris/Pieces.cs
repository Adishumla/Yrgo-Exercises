public class Piece
{
    private int _x;
    private int _y;
    private bool[,] _shape;

    public Piece(bool[,] shape, int startX, int startY)
    {
        _shape = shape;
        _x = startX;
        _y = startY;
    }

    public bool CanMove(Board board, int deltaX, int deltaY)
    {
        for (int y = 0; y < _shape.GetLength(1); y++)
        {
            for (int x = 0; x < _shape.GetLength(0); x++)
            {
                if (_shape[x, y])
                {
                    int newX = _x + x + deltaX;
                    int newY = _y + y + deltaY;
                    if (!board.IsValidPosition(newX, newY))
                    {
                        return false;
                    }
                }
            }
        }
        return true;
    }

    public void Move(int deltaX, int deltaY)
    {
        _x += deltaX;
        _y += deltaY;
    }

    public void RotateClockwise()
    {
        int width = _shape.GetLength(0);
        int height = _shape.GetLength(1);
        bool[,] newShape = new bool[height, width];
        for (int y = 0; y < height; y++)
        {
            for (int x = 0; x < width; x++)
            {
                newShape[y, x] = _shape[width - x - 1, y];
            }
        }
        _shape = newShape;
    }

    public void Draw(Board board)
    {
        for (int y = 0; y < _shape.GetLength(1); y++)
        {
            for (int x = 0; x < _shape.GetLength(0); x++)
            {
                if (_shape[x, y])
                {
                    board.SetBlock(_x + x, _y + y);
                }
            }
        }
    }
}