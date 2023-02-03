// See https://aka.ms/new-console-template for more information

 string Normalize(string prompt)
{
    string input = prompt;
    string output = input.ToLower();
    output = output.Substring(0, 1).ToUpper() + output.Substring(1);
    return output;

}

var firstname = Normalize("GUYBRUSH");
var lastname  = Normalize("threepwood");

Console.WriteLine($"{firstname} {lastname}");