using System.Net;

class DatabaseApplication
{
    public List<string> Database { get; } = new List<string>();

    public List<string> Commands { get; } = new List<string>
    {
        "add",
        "help",
        "list",
        "delete",
        "quit"
    };

    public void Run()
    {
        Load();
        Console.WriteLine();
        Console.BackgroundColor = ConsoleColor.Black;
        Console.ForegroundColor = ConsoleColor.Cyan;
        Console.WriteLine("*** Welcome to Initech Data Systems 1.0 ***");
        Console.WriteLine();
        Console.ResetColor();

        string command;

        do
        {
            command = GetCommand();

            if (command == "add")
            {
                Console.WriteLine("add...");
            }
            else if (command == "help")
            {
                Console.WriteLine("help...");
            }
            else if (command == "list")
            {
                Console.WriteLine("list...");
            }
            else if (command == "delete")
            {
                Console.WriteLine("delete...");
            }

        } while (command != "quit");
    }

    public string GetCommand()
    {
        while (true)
        {
            Console.Write("Please input a command, or \"help\": ");

            var input = Console.ReadLine()!;

            if (Commands.Contains(input))
            {
                Console.ForegroundColor = ConsoleColor.Green;
                Console.WriteLine("OK");
                Console.WriteLine();
                Console.ResetColor();

                if (input == "help")
                {
                    Help();
                }
                if (input == "add")
                {
                    Add();
                }

                if (input == "list")
                {
                    List();
                }

                if (input == "delete")
                {
                    Delete();
                }

                return input;
            }

            Console.WriteLine("?");
            Console.WriteLine();
        }
    }

    public void Help()
    {
        foreach (var command in Commands)
        {
            if (command == "help")
            {
                continue;
            }
            else
            {
                Console.WriteLine(command);
            }

        }
    }

    public void Add()
    {
        Console.Write("Please input company name to add: ");
        var company = Console.ReadLine()!;
        Database.Add(company);
        Save();
    }
    
    public void List()
    {
        foreach (var company in File.ReadAllLines("/../tmp/database.txt"))
        {
            Console.WriteLine(company);
        }
    }

    public void Delete()
    {
        Console.Write("Please input company name to delete: ");
        var company = Console.ReadLine()!;
        if (File.ReadAllLines("/../tmp/database.txt").Contains(company))
        {
            var list = File.ReadAllLines("/../tmp/database.txt").ToList();
            list.Remove(company);
            File.WriteAllLines("/../tmp/database.txt", list);
        }
        else
        {
            Console.WriteLine("Company not found");
        }
    }

    public void Save()
    {

        var filename = "/../tmp/database.txt";
        File.AppendAllLines(filename, Database);

    }
    
    public void Load()
    {
        var filename = "/../tmp/database.txt";
        var list = new List<string>();

// if the file exists, read it and create a list from it
        if (File.Exists(filename))
        {
            list = File.ReadAllLines(filename).ToList();
        }

        foreach (var company in list)
        {
            Console.WriteLine(company);  // KORG, Roland, etc
        }
    }
}
