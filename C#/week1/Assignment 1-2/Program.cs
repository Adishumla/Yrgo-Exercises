// See https://aka.ms/new-console-template for more information
Console.WriteLine("Welcome to Amazing Ticket Systems 2.0");

Console.WriteLine("Which ticket would you like?");
Console.Write("Type A, B or C: ");
ConsoleKeyInfo ticketType = Console.ReadKey();
Console.WriteLine();
Console.WriteLine("Would you like our special VIP package with that? +$20");
Console.Write("Type yes or no: ");
string userInput = Console.ReadLine();
Console.WriteLine();


if (ticketType.Key == ConsoleKey.A)
{
    Console.WriteLine("You have chosen ticket A");
}
else if (ticketType.Key == ConsoleKey.B)
{
    Console.WriteLine("You have chosen ticket B");
}
else if (ticketType.Key == ConsoleKey.C)
{
    Console.WriteLine("You have chosen ticket C");
}
else
{
    Console.WriteLine("You have chosen an invalid ticket");
}

if (userInput == "yes")
{
    Console.WriteLine("You have chosen the VIP package");
}
else if (userInput == "no")
{
    Console.WriteLine("You have chosen not to have the VIP package");
}
else
{
    Console.WriteLine("You have chosen an invalid option");
}