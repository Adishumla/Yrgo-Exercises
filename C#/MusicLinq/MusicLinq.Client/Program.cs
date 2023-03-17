using MusicLinq.Data;

JsonDatabase Database = JsonDatabase.Load();

//
// some example code!
//
// select all artists with an ArtistId less than 20, and sort them by lenght of name backwards
//
//var result = Database.Artists
    /*.Where(artist => artist.ArtistID < 20)
    .OrderByDescending(artist => artist.Name.Length);*/
    /*1*/
    /*.Where(artist => artist.Name.StartsWith("D"))
    .OrderBy(artist => artist.Name);*/
    /*2*/
    /*.Where(artist => artist.Albums.Count > 5)
    .OrderBy(artist => artist.Name);*/

    /*3*/
    /*.Where(artist => artist.Name.Length < 5)
    .OrderBy(artist => artist.Name);*/

    /*4*/
/*List all albums where the artist is "Various Artists".*/
    /*.Where(artist => artist.Name == "Various Artists")
    .SelectMany(artist => artist.Albums)
    .OrderBy(album => album.Title);*/
/*10*/
    /*.OrderByDescending(artist => artist.Albums.Count)
    .Take(10);*/


var albums = Database.Artists
        /*.SelectMany(artist => artist.Albums)
        .Where(album => album.Tracks.Count == 2)
        .OrderBy(album => album.Title);*/
    /*8*/
        /*.SelectMany(artist => artist.Albums)
        .Where(album => album.ArtistID == 1)
        .OrderBy(album => album.Title);*/

/*5*/
//var tracks = Database.Artists
    /*.SelectMany(artist => artist.Albums)
    .SelectMany(album => album.Tracks)
    .Count();*/
    /*6*/
    /*.SelectMany(artist => artist.Albums)
    .SelectMany(album => album.Tracks)
    .Select(track => track.Name)
    .Distinct()
    .Count();*/
    /*7*/
    /*.SelectMany(artist => artist.Albums)
    .SelectMany(album => album.Tracks)
    .Average(track => track.Bytes);*/
/*9*/
/*var hours = Database.Artists
    .SelectMany(artist => artist.Albums)
    .SelectMany(album => album.Tracks)
    .Sum(track => track.Milliseconds) / 1000 / 60 / 60;*/
/*10*/
/*List the 10 artists with most albums in the database.*/
        .SelectMany(artist => artist.Albums)
        .GroupBy(album => album.ArtistID)
        .OrderByDescending(album => album.Count())
        .Take(10)
        .Select(album => album.Key)
        .Select(id => Database.Artists.First(artist => artist.ArtistID == id));





/*foreach (var artist in result)
{
    //Console.WriteLine(artist);
}*/
/*4*/
foreach (var album in albums)
{
    Console.WriteLine(album);
}
/*5*/
/*Console.WriteLine(tracks);*/
/*9*/
//Console.WriteLine(hours);


