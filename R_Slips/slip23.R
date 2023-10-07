#Two vectors to matrix and print 2nd row of 2nd matrix

print("Two vectors of diff lenghts: ")
a=c(1,3,4,5)
b=c(10,11,12,13,14,15)
d = c(3,3,2)

ab = array(c(a,b),dim=d)

print("ARRAY:")
print(ab)

print("Second row of the second matrix of array = ")
print(ab[2,,2])
