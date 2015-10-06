# Write a function that returns the largest element in a list.

collection = [1, 5, 10, 3, 16, 7, 100]
max_element = (float("-inf"))

for i in collection:
    if i > max_element:
        max_element = i

print(max_element)
