using System;

namespace ZeroesInArray
{
    class ZeroesInArray
    {
        public static void Main(string[] args)
        {
            int[] a = new int[]
            {
                1, 5, 0, 7, 12, 0, 3, 0, 0, 0, 4
            };

            int arraySize = a.Length;
            int zeroesCount = 0;

            int result = CountZeroes(a, arraySize, zeroesCount); // 5
            Console.WriteLine("Count of zeroes in the array: {0}", result);
        }

        public static int CountZeroes(int[] a, int arraySize, int zeroesCount)
        {
            if (arraySize <= 0)
                return zeroesCount;

            if (a[arraySize - 1] == 0)
                zeroesCount++;

            arraySize = arraySize - 1;

            return CountZeroes(a, arraySize, zeroesCount);
        }
    }
}
