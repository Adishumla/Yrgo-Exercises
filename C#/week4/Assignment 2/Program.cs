
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
}