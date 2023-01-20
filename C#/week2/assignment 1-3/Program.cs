Console.WriteLine("Welcome to Amazing Ticket Systems 3.0");
double cost = 0;
double discount = 1;
Console.Write("Please type your email: ");
string email = Console.ReadLine();
if (email.EndsWith("@yrgo.se") || email.EndsWith("@w3c.org"))
{
    Console.WriteLine("A 20% discount will be applied at checkout!");
    discount = 0.8;
}
else
{
    Console.WriteLine("");
}

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
    cost = 33;
}
else if (ticketType.Key == ConsoleKey.B)
{
    Console.WriteLine("You have chosen ticket B");
    cost = 40;
}
else if (ticketType.Key == ConsoleKey.C)
{
    Console.WriteLine("You have chosen ticket C");
    cost = 60;
}
else
{
    Console.WriteLine("You have chosen an invalid ticket");
}

if (userInput == "yes")
{
    Console.WriteLine("You have chosen the VIP package");
    cost += 20;
}
else if (userInput == "no")
{
    Console.WriteLine("You have chosen not to have the VIP package");
}
else
{
    Console.WriteLine("You have chosen an invalid option");
}

cost = discount * cost;
Console.WriteLine($"Your total cost is: {cost:F2} SEK");