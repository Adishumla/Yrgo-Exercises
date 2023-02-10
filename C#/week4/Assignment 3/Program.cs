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
};

// this should print "Welcome <name>, please enjoy the movie <movie>"
cinema.ShowMovieTo(person);
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
    }
}

class Person
{
    public string Name { get; set; }
}