var luna    = new Cat("Luna", false);
var artemis = new Cat("Artemis", true);

Console.WriteLine($"{luna.Name} says: {luna.Speak()}");
Console.WriteLine($"{artemis.Name} says: {artemis.Speak()}");

artemis.Eat(luna);  // Artemis is a zombie cat, turning Luna into a zombie cat too!

Console.WriteLine($"{luna.Name} says: {luna.Speak()}");
public class Cat
{
   public string Name { get; private set; }
   bool Zombie { get; set; }
   
   public Cat(string name, bool zombie)
   {
      Name = name;
      Zombie = zombie;
   }
   
   public string Speak()
   {
     if (Zombie)
     {
        return "Braiiiiiiinnnnnssss";
     }
     else
     {
        return "Meow";
     }
   }

   public void Eat(Cat cat)
   {
      if (Zombie)
      {
         cat.Zombie = true;
         Console.WriteLine($"nom nom nom");
      }
      if(Zombie == false)
      {
         Console.WriteLine($"What!? I will not eat {cat.Name}!");
      }
      else
      {
         Console.WriteLine($"");
      }
   }
   
   
}