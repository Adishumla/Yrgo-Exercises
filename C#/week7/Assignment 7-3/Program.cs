var number = FindDuplicateNumber(new[] { 2, 14, 95, 8, 20, 14, 7, 3 });

Console.WriteLine(number);  // 14

// take an array of integers and return the first duplicate number found in the array (if any). If no duplicates are found, return -1.

static int FindDuplicateNumber(int[] input)
{
    var duplicates = new List<int>();
    foreach (var item in input)
    {
        if (duplicates.Contains(item))
        {
            return item;
        }
        else
        {
            duplicates.Add(item);
        }
    }
    return -1;
}