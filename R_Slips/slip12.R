
print("VSH")

#Multiplication table

a = readline(prompt = "Give a Number : ")
a = as.integer(a)

for(i in 1:10)
{
  print(paste(a, 'x', i, '=', a*i))
}