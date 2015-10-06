# Write a program that asks the user for a number n
# and gives him the possibility to choose between
# computing the sum and
# computing the product of 1,…,n.

n = int(input("Enter 'n': "))
choice = input("Enter 's' for computing the sum; Enter 'm' for computing multiplication: ")
action = 'sum' if choice == 's' else 'multiply'
result = 0

if choice == 's':
    for num in range(1, n + 1):
        result += num
elif choice == 'm':
    result = 1

    for num in range(1, n + 1):
        result *= num
else:
    print("'" + choice + "' is invalid operation, sorry.")
    action = "invalid"

print("The action you've choosen is {}".format(action))
print("Result: " + result)
