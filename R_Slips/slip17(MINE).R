#Decimal to binary
num=8
v = c()
i=1

while(num!=0)
{
  rem = as.integer(num%%2)
  num = as.integer(num/2)
  v[i] = rem
  i=i+1
}

decimal = rev(v)
cat(decimal,sep = "")
