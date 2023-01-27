double GetAverage(params double[] values)

{

    double sum = 0;

    foreach (var value in values)

    {

        sum += value;

    }

    return sum / values.Length;

}


var average = GetAverage(5, 10, 7.4);

Console.WriteLine($"Average: {average:F2}"); // Average: 7.47

