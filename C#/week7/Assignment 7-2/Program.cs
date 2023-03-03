var names = new []
{
    "Egon Spengler",
    "Peter Venkman",
    "Ray Stantz",
    "Winston Zeddemore",
};

var output = GetLongestString(names);

Console.WriteLine(output);  // Winston Zeddemore

static string GetLongestString(string[] input)
{
    var longest = "";
    foreach (var item in input)
    {
        if (item.Length > longest.Length)
        {
            longest = item;
        }
    }
    return longest;
}