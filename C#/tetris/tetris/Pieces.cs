namespace tetris;

public class Pieces
{
    /*Create a class for the Tetrominoes (the shapes that fall from the top of the screen). You can represent each Tetromino as a 2D array of characters, where each non-empty cell represents a block. You will need to define methods for rotating and moving the Tetrominoes.*/
    public char[,] piece = new char[4, 4];
    public Pieces()
    {
        for (int i = 0; i < 4; i++)
        {
            for (int j = 0; j < 4; j++)
            {
                piece[i, j] = ' ';
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
                temp[i, j] = piece[i, j];
            }
        }
        for (int i = 0; i < 4; i++)
        {
            for (int j = 0; j < 4; j++)
            {
                piece[i, j] = temp[3 - j, i];
            }
        }
    }
    public void MoveLeft()
    {
        for (int i = 0; i < 4; i++)
        {
            for (int j = 0; j < 4; j++)
            {
                if (piece[i, j] != ' ')
                {
                    piece[i, j - 1] = piece[i, j];
                    piece[i, j] = ' ';
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
                if (piece[i, j] != ' ')
                {
                    piece[i, j + 1] = piece[i, j];
                    piece[i, j] = ' ';
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
                if (piece[i, j] != ' ')
                {
                    piece[i + 1, j] = piece[i, j];
                    piece[i, j] = ' ';
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
                Console.Write(piece[i, j]);
            }
            Console.WriteLine();
        }
    }
}