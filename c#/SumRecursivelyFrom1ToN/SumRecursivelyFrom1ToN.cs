using System;

namespace SumRecursivelyFrom1ToN
{
    class SumRecursivelyFrom1ToN
    {
        public static void Main(string[] args)
        {
            int n = 0;
            int result = Sum(n);

            Console.WriteLine(result);
        }

        public static int Sum(int n)
        {
            if (n < 0)
                n *= -1;

            if (n == 0)
                return 0;

            if (n == 1)
                return 1;

            return n + Sum(n - 1);
        }
    }
}
