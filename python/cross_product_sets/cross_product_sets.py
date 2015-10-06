# Make a cross product of two sets.

colors = ["red", "green"]
things = ["house", "three", "cat"]
cress_prod = [(x, y) for x in colors for y in things]

print(cress_prod)

"""
Prints:

[('red', 'house'), ('red', 'three'), ('red', 'cat'), ('green', 'house'), ('green', 'three'), ('green', 'cat')]
"""
