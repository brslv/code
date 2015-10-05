using System;

// Write a recursive function (use no while loops or for loops)
// that prints all the elements of an array of integers, one per line.
// The parameters to the function should be int a[], and int size.

namespace PrintArrayRecursively
{
    class PrintArrayRecursively
    {
        public static void Main(string[] args)
        {
            int[] a = new int[]
            {
                5,
            };

            int arraySize = a.Length;

            Print(a, arraySize);
        }

        public static void Print(int[] a, int size)
        {
            if (size <= 0)
                return;

            int lastElementIndex = size - 1;

            Print(a, lastElementIndex);

            // Using backwards recursion
            Console.WriteLine(a[lastElementIndex]);
        }
    }
}
