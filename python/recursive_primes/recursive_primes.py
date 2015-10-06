# Write a program that prints all prime numbers. Use recursion.
import math

up_to = int(input("How many primes do you want me to generate?: "))
counter = 1
current = 2


def is_prime(number, i):
    if i < math.sqrt(number):
        return True

    if number % i == 0:
        return False
    else:
        return is_prime(number, i - 1)

while counter <= up_to:
    if is_prime(current, current - 1):
        print(current)
    else:
        counter -= 1

    counter += 1
    current += 1


