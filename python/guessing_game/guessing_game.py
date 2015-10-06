# Write a guessing game where the user has to guess a secret number.
# After every guess the program tells the user whether their number was too large or too small.
# At the end the number of tries needed should be printed.
# I counts only as one try if they input the same number multiple times consecutively.

import random

rand_upper_range = random.randrange(30, 100)
secret_number = random.randrange(1, rand_upper_range)
running = True
guessed = False
guesses = 0

while running:
    guess = input("Guess the number (it's in the range [1...{}]): ".format(rand_upper_range))

    if guess == "END":
        break

    guess = int(guess)

    if guess == secret_number:
        guessed = True
        running = False
        guesses += 1
        break
    elif guess > secret_number:
        print("Go down.")
    elif guess < secret_number:
        print("Go up.")

    guesses += 1

if guessed:
    print("Congratulations! You needed {} tries to guess the number {}.".format(guesses, secret_number))
else:
    print("You didn't guess the number {}".format(secret_number))
