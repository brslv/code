# Write a program that asks the user for a number n and prints the sum of the numbers 1 to n

n = int(input("Enter n: "))
sum = 0
nums = []

for num in range(1, n + 1):
    nums.append(num)
    sum += num

numsStringList = [str(i) for i in nums]  # To join a list we use list comprehensions

print("The sum of [{}] is {}.".format(", ".join(numsStringList), sum))
