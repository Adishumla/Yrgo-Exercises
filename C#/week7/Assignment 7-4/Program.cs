var file = File.ReadLines("../../../map.txt");
var number = 0;
var map = new List<string>();
Console.WriteLine("Map:");
foreach (var Line in file)
{
    map.Add(Line);
    if (Line.Contains('#'))
    {
        var count = Line.Count(x => x == '#');
        number += count;
    }
}

Console.WriteLine(number);