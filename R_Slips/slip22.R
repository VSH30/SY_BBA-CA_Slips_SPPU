print("VSH")
a = c(seq(1:100))

for(i in a)
{
  if(i%%3 == 0 && i%%5 != 0)
    a[i] = "SY"
  else if(i%%3 != 0 && i%%5 == 0)
    a[i] = "BBA"
  else if(i%%3 == 0 && i%%5 == 0)
    a[i] = "SYBBA"
}

print(a)
