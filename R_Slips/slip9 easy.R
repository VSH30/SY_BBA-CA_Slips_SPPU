a = c("MCA","MSC","MSC","MBA","MBA","MBA")

b = c("BSC","BSC","BSC","BBA","BCA")

d = factor(a)
e = factor(b)

print("Factor d: ")
print(d)
print("Factor e: ")
print(e)

print("Changing 1st level of d with 2nd level of e:")
levels(d)[1] = levels(e)[2]

print(d)