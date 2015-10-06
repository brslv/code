# Write three functions that compute the sum of the numbers in a list:
# using a for-loop, a while-loop and recursion.
# (Subject to availability of these constructs in your language of choice.)

simple_list = [1, 2, 3, 4, 5, 6]


def while_sum(inner_list):
    summed = 0
    counter = 0

    while counter < len(inner_list):
        summed += inner_list[counter]
        counter += 1

    return summed


def for_sum(inner_list):
    summed = 0

    for num in inner_list:
        summed += num

    return summed


def recursive_sum(inner_list, summed):
    if len(inner_list) <= 0:
        return summed

    summed += inner_list[-1]
    inner_list = inner_list[:-1]

    return recursive_sum(inner_list, summed)

print("Sum with while: {}".format(while_sum(simple_list)))
print("Sum with for: {}".format(for_sum(simple_list)))
print("Sum with recursion: {}".format(recursive_sum(simple_list, 0)))
