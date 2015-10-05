using System;
using System.Collections.Generic;

// Write a function with the following prototype that returns the sum of the digits of an integer.
// int sumOfDigits(int x);
// If x is 234, the function should return 2 + 3 + 4, that is, 9.

namespace SumOfDigits
{
    class Mian
    {
        public static void Main(string[] args)
        {
            int result = SumOfDigits(-1234567890); // 45
            Console.WriteLine(result);
        }

        static int SumOfDigits(int num)
        {
            if (num < 0)
            {
                num *= -1;
            }

            if (num.ToString().Length == 1)
            {
                return num;
            }

            int lastDigit = num % 10;
            int numLength = num.ToString().Length;
            num = int.Parse(num.ToString().Substring(0, numLength - 1)); // cut off the last digit from the num

            return lastDigit + SumOfDigits(num);
        }
    }
}
