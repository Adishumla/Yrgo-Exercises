

var input = new [] { 6, 1, 4, 5, 2, 8 };
var output = ThresholdSum(input, 4);  // 6 + 5 + 8

Console.WriteLine(output); // 19

static int ThresholdSum(int[] input, int threshold)
{
    var sum = 0;
    foreach (var item in input)
    {
        if (item > threshold)
        {
            sum += item;
        }
    }
    return sum;
}