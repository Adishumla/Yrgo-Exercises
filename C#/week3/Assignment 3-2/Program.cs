// See https://aka.ms/new-console-template for more information

var rng = new Random();
int number = rng.Next(1, 99);
var tries = 1;

while(tries < 4)
{
    Console.Write($"[{tries}/3]");
    Console.Write("guess a number: ");
    //check if input is a number, if not, ask again, if yes, continue
    if (!int.TryParse(Console.ReadLine(), out int guess))
    {
        Console.WriteLine("Please enter a number\n");
        
        continue;
    }
    
    if (guess == number)
    {
        Console.WriteLine("You guessed it!");
        break;
    }
    else if (guess < number)
    {
        Console.WriteLine("Too low\n");
    }
    else if (guess > number)
    {
        Console.WriteLine("Too high\n");
    }
    
    tries++;
    
    if (tries == 4)
    {
        Console.WriteLine("Game over!");
    }
}

