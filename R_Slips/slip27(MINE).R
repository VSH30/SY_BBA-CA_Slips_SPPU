#Binary to Decimal
dec=0
i=0
n=1000
while(n!=0)
{
  rem=as.integer(n%%10)
  n=as.integer(n/10)
  dec = dec + rem*(2^i)
  i=i+1
}

print(dec)