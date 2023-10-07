#create an array, passing in a vector of values and a vector of dimensions
#Give names to each dimension

a = c(2,4,6,8,7)
b = c(9,5,3,1)
c = c(3,3,1)

rowsss=c("M","N","O")
colsss=c("X","Y","Z")

abc = array(c(a,b),dim = c,dimnames = list(rowsss,colsss,"ARRAYYYYY"))
            
print(abc)