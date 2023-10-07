
print("VSH")

#Compare two data frames
#Check diff between those frames
b = c("vishal","rohit","Adnan","Pranv")
c = c(1,60,64,39)

v = data.frame(a,c,b)

d = c(32,54,23,53)
e = c("aaa","bbb","ccc","ddd")
f = c(99,88,77,66)

u = data.frame(d,e,f)

print(u)
print(v)

z = setdiff(u,v)
print(z)