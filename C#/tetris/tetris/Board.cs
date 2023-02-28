namespace tetris;

public class Board
{
    public char[,] board = new char[20, 10];
    public Board()
    {
        for (int i = 0; i < 20; i++)
        {
            for (int j = 0; j < 10; j++)
            {
                board[i, j] = ' ';
            }
        }
    }
    public void AddBlock(int x, int y, char c)
    {
        board[x, y] = c;
    }
    public void RemoveBlock(int x, int y)
    {
        board[x, y] = ' ';
    }
    public void PrintBoard()
    {
        for (int i = 0; i < 20; i++)
        {
            for (int j = 0; j < 10; j++)
            {
                Console.Write(board[i, j]);
            }
            Console.WriteLine();
        }
    }
}