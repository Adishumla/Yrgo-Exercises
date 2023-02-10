var movie = new Movie()
{
    Name = "Ghostbusters",
    AgeRating = 11,
    Price = 60
};

var cinema = new Cinema()
{
    Movie = movie
};

// this method should print out which movie is currently showing
cinema.MovieInformation();

var person = new Person()
{
    Name = "Guybrush",
    Age = 19,
    Money = 100,
};

Console.WriteLine($"{person.Name} has {person.Money}:- in his pocket");

cinema.ShowMovieTo(person);

Console.WriteLine($"{person.Name} has {person.Money}:- in his pocket");

class Movie
{
    public string Name { get; set; }
    public int AgeRating { get; set; }
    public int Price { get; set; }
}

class Cinema
{

    public Movie Movie { get; set; }
     
    public void MovieInformation()
    {
        Console.WriteLine("We are currently showing: {0} (Age Rating: {1}) - Price: {2}", Movie.Name, Movie.AgeRating, Movie.Price);
    }
    
    public void ShowMovieTo (Person person) {
        Console.WriteLine("Welcome {0}, please enjoy the movie {1}!", person.Name, Movie.Name);
        if (person.Age >= Movie.AgeRating) {
            if (person.Money >= Movie.Price) {
                person.Money -= Movie.Price;
            } else {
                Console.WriteLine("Sorry, you don't have enough money to watch this movie.");
            }
        } else {
            Console.WriteLine("Sorry, you are too young to watch this movie.");
        }
    }
}

class Person
{
    public string Name { get; set; }
    public int Age { get; set; }
    public int Money { get; set; }
}