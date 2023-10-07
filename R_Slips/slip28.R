a = matrix(c(sample(seq(1:100),size=4,replace = TRUE)),nrow = 2)
print("Matrix:")
print(a)

b = as.list(a)
print("List:")
print(b)

print("Ascending:")
print(sort(unlist(b)))