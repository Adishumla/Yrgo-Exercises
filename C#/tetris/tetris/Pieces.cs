namespace tetris;

public class Pieces
{
    public readonly char[,] Piece = new char[4, 4];
    public Pieces()
    {
        for (int i = 0; i < 4; i++)
        {
            for (int j = 0; j < 4; j++)
            {
                Piece[i, j] = ' ';
            }
        }
    }
    public void Rotate()
    {
        char[,] temp = new char[4, 4];
        for (int i = 0; i < 4; i++)
        {
            for (int j = 0; j < 4; j++)
            {
                temp[i, j] = Piece[i, j];
            }
        }
        for (int i = 0; i < 4; i++)
        {
            for (int j = 0; j < 4; j++)
            {
                Piece[i, j] = temp[3 - j, i];
            }
        }
    }
    public void MoveLeft()
    {
        for (int i = 0; i < 4; i++)
        {
            for (int j = 0; j < 4; j++)
            {
                if (Piece[i, j] != ' ')
                {
                    Piece[i, j - 1] = Piece[i, j];
                    Piece[i, j] = ' ';
                }
            }
        }
    }
    public void MoveRight()
    {
        for (int i = 0; i < 4; i++)
        {
            for (int j = 3; j >= 0; j--)
            {
                if (Piece[i, j] != ' ')
                {
                    Piece[i, j + 1] = Piece[i, j];
                    Piece[i, j] = ' ';
                }
            }
        }
    }
    public void MoveDown()
    {
        for (int i = 3; i >= 0; i--)
        {
            for (int j = 0; j < 4; j++)
            {
                if (Piece[i, j] != ' ')
                {
                    Piece[i + 1, j] = Piece[i, j];
                    Piece[i, j] = ' ';
                }
            }
        }
    }
    public void PrintPiece()
    {
        for (int i = 0; i < 4; i++)
        {
            for (int j = 0; j < 4; j++)
            {
                Console.Write(Piece[i, j]);
            }
            Console.WriteLine();
        }
    }
}