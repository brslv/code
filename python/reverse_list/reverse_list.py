# Write function that reverses a list, preferably in place.

simple_list = [10, 15, 20, 25, 30, 35, 40, 45, 50]


def rev(list):
    if len(simple_list) == 1:
        return

    for i in range(int(len(list) / 2)):
        list[i], list[len(list) - i - 1] = list[len(list) - i - 1], list[i]

rev(simple_list)

print(simple_list)
