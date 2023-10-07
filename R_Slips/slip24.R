#24

a = c(1:6)
b = c(7:12)
dd = c(3,2,2)

arr = array(c(a,b),dim = dd)

print("First matrix:")
print(arr[,,1])
print("Second matrix:")
print(arr[,,2])

aa = arr[,,1]
bb = arr[,,2]

print("Multiplication of matrices:")
print(aa*bb)