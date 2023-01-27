void XYColumns(int x, int y)
{
    var value = 0;
    for (int i = 1; i <= y; i++)
    {
        for (int j = 1; j <= x; j++)
        {
            value = i * j;
            Console.Write(string.Format("{0:00}", value));
            Console.Write(" ");
        }
        Console.WriteLine();
    }
}


XYColumns(5, 10);
