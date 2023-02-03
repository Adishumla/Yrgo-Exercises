// See https://aka.ms/new-console-template for more information

string loop(string prompt)
{
    string input = prompt;
    var lenght = input.Length;
    var s = 0;
    while (lenght > 0)
    {
        for (int i = 0; i < input.Length; i++)
        {
            Console.Write(input.Substring( s, 1).ToUpper());
        }
        Console.WriteLine();
        lenght--;
        s++;
    }
    return input;

}

Console.WriteLine(loop("Guybrush"));