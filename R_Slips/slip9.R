a = factor(c("MCA","MBA","MSC"),levels = c("MCA","MBA","MSC"))
b = factor(c("BCA","BBA","BSC"),levels = c("BCA","BBA","BSC"))

print("Factor a: ")
print(a)
print("Factor b: ")
print(b)

print("Changing 1st level of a with 2n level of b:")
levels(a)[1] = levels(b)[2]

print(a)