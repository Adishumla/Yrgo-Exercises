// create two players
var megatron = new Robot("Megatron", 10);
var optimus  = new Robot("Optimus Prime", 10);

// create the game
var game = new RobotFightingGame(megatron, optimus);

// play the game until someone wins
while (!game.GameOver)
{
    game.NextRound();
}

if (game.Winner == null)
{
    Console.WriteLine("The game ends in a draw! What a disappointment!");
}
else
{
    Console.WriteLine($"{game.Winner} is the winner!");
}
static class Die
{
    static readonly Random _random = new();
    public static int Roll() => _random.Next(1, 7);
}

public class Robot
{
    public string Name { get; set; }
    public int Health { get; set; }

    public Robot(string name, int health)
    {
        Name = name;
        Health = health;
    }
    
    public void Attack (Robot robot)
    {
        robot.Health -= Die.Roll();
    }
}

public class RobotFightingGame
{
    Robot robot1;
    Robot robot2;
    public bool GameOver = false;
    public string Winner = "";
    
    public RobotFightingGame(Robot robot1, Robot robot2)
    {
        this.robot1 = robot1;
        this.robot2 = robot2;
        
    }
    public void NextRound()
    {
         robot1.Attack(robot2);
         Console.WriteLine($"{robot1.Name} attacks {robot2.Name} with {Die.Roll()} damage!");
         robot2.Attack(robot1);
         Console.WriteLine($"{robot2.Name} attacks {robot1.Name} with {Die.Roll()} damage!");

         
         if (robot1.Health <= 0)
         {
             GameOver = true;
             Winner = robot2.Name;
         }
         else if (robot2.Health <= 0)
         {
             GameOver = true;
             Winner = robot1.Name;
         }
    }
}