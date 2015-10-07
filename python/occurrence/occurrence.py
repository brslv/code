# Write a function that checks whether an element occurs in a list.

a_list = [1, 15, "John", "Tim", 8, "Conrad"]


def check(a_list, elem):
    for el in a_list:
        if el == elem:
            return True

    return False

print(check(a_list, "Sara"))  # False
print(check(a_list, "John"))  # True
