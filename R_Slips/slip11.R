
print("VSH")

#Create two vectors of different lengths
#Give these vectors as input to array
#Print addition and subtraction of those matrices

a = c(1,6,4,8,4,7,8,3)
b = c(0,6,3,6)
print("Given array:")
c = array(c(a,b),dim = c(3,2,2))
print(c)

m1 = c[,,1]
m2 = c[,,2]

add = m1 + m2
sub = m1 - m2

print("Addition of two matrices : ")
print(add)
print("Substraction of two matrices = ")
print(sub)