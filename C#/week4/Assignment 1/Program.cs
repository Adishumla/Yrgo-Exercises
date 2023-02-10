
using System;

var validator = new PasswordValidator();


if (validator.IsValidPassword("p4ssw0rd"))
{
    Console.WriteLine("the password 'p4ssw0rd' is a valid password");
}
else
{
    Console.WriteLine("the password 'p4ssw0rd' is not a valid password");
}

Console.WriteLine(validator.IsValidPassword("short"));
Console.WriteLine(validator.IsValidPassword("password"));
Console.WriteLine(validator.IsValidPassword("12345678"));
Console.WriteLine(validator.IsValidPassword("xxxxxxx0"));
Console.WriteLine(validator.IsValidPassword("p4ssw0rd"));

class PasswordValidator {
    public bool IsValidPassword(string input)
    {
        if (!HasMinimumLength(input, 8))
        {
            return false;
        }

        if (!HasNonDigits(input))
        {
            return false;
        }

        if (!HasAtLeastTwoDigits(input))
        {
            return false;
        }

        return true;
    }

    bool HasMinimumLength(string input, int length)
    {
        return input.Length >= length;
    }

    bool HasNonDigits(string input)
    {
        for (var i = 0; i < input.Length; i++)
        {
            if (!char.IsDigit(input, i))
            {
                return true;
            }
        }

        return false;
    }

    bool HasAtLeastTwoDigits(string input)
    {
        var digits = 0;

        for (var i = 0; i < input.Length; i++)
        {
            if (char.IsDigit(input, i))
            {
                digits++;
            }
        }

        return digits >= 2;
    }

}