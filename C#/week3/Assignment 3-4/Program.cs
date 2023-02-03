// See https://aka.ms/new-console-template for more information

int SumAllDigits(string number)
{
      // 4719 should return 21 (4 + 7 + 1 + 9)
      
      var length = number.ToString().Length;
      int sum = 0;

      while (length > 0)
      {
          sum += int.Parse(number.ToString().Substring(length - 1, 1));
            length--;

      }

      return sum;
}

var input = "4719";
var value = SumAllDigits(input);

Console.WriteLine($"Sum of {input} = {value}");