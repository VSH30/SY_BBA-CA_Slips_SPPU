
print("VSH")

#extract the five of the levels
#factor created from a random sample from the LETTERS

a = c(sample(LETTERS,size = 40,replace = TRUE))

print("sample of LETTERS:")
print(a)

b = factor(a)

print(head(b,5))