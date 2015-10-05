using System;

namespace ReversePrintArrayRecursively
{
    class ReversePrintArrayRecursively
    {
        public static void Main(string[] args)
        {
            int[] a = new int[]
            {
                1, 2, 3, 4, 5
            };

            int arraySize = a.Length;

            Print(a, arraySize);
        }

        public static void Print(int[] a, int size)
        {
            if (size <= 0)
                return;
            
            int lastElementIndex = size - 1;

            Console.WriteLine(a[lastElementIndex]);

            // Using forward recursion
            Print(a, lastElementIndex);
        }
    }
}
