// See https://aka.ms/new-console-template for more information
string username = "falken";
string password = "joshua";
int attempts = 0;

Console.WriteLine("Welcome to NORAD Online Systems");

while(attempts < 3)
{
    Console.WriteLine("");
    Console.Write("Please enter your username: ");
    string inputUsername = Console.ReadLine();
    Console.Write("Please enter your password: ");
    string inputPassword = Console.ReadLine();

    if (inputUsername == username && inputPassword == password && attempts < 3)
    {
        Console.WriteLine("Welcome to NORAD Online Systems!");
        break;
    }
    else
    {
        Console.WriteLine("Invalid username or password");
        attempts++;
    }
}

if (attempts == 3)
{
    Console.WriteLine("");
    Console.WriteLine("You have exceeded the maximum number of login attempts");
}