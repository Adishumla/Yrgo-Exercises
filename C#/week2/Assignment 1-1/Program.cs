// See https://aka.ms/new-console-template for more information
Console.WriteLine("Welcome to Amazing Ticket Systems 1.0");

Console.WriteLine("Which ticket would you like?");
Console.WriteLine("Type A, B or C: korv?");
ConsoleKeyInfo ticketType = Console.ReadKey();
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