
print("VSH")

#concatenate two given factor
#display in descending order

a = factor(c(2,3,5,3,26,3,6))
b = factor(c(2,3,4,3,5,6))

print("Two facotrs are:")
print(a)
print(b)

c = factor(c(a,b))

print("Concatenation of two factors:")
print(c)

print("Display in Descending order")
print(order(c,decreasing = TRUE))