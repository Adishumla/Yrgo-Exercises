// See https://aka.ms/new-console-template for more information

string IsValidPassword(string prompt)
{
    string input = prompt;
    var length = input.Length;
    var integersInPassword = 0;
    var intCheck = length;
    while (intCheck > 0)
    {
        if (int.TryParse(input.Substring(intCheck - 1, 1), out int number))
        {
            integersInPassword++;
        }
        intCheck--;
    }
    var integersInPasswordLength = integersInPassword.ToString().Length;
    if (integersInPassword >= 2 && integersInPassword != length && length > 7)
    {
        return "True";
    }
    else
    {
        return "False";
    }

}

Console.WriteLine(IsValidPassword("short"));
Console.WriteLine(IsValidPassword("password"));
Console.WriteLine(IsValidPassword("12345678"));
Console.WriteLine(IsValidPassword("xxxxxxx0"));
Console.WriteLine(IsValidPassword("p4ssw0rd"));