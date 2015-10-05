using System;

namespace MinElementInArray
{
    class MainClass
    {
        public static void Main(string[] args)
        {
            int[] a = new int[]
            {
                100, 50, 60, 30, 15, 99, 18, 32
            };

            int startIndex = a.Length - 1;
            int minElement = a[startIndex];
            int result = FindMinElement(a, startIndex, minElement);

            Console.WriteLine(result); // 15
        }

        public static int FindMinElement(int[] a, int startIndex, int minElement)
        {
            if (startIndex < 0)
                return minElement;

            if (a[startIndex] < minElement)
                minElement = a[startIndex];

            startIndex = startIndex - 1;

            return FindMinElement(a, startIndex, minElement);
        }
    }
}
