data("mtcars")
data("airquality")

a=mtcars
a1 = subset(mtcars[,1], mtcars$mpg > 15.0)
print(a1)

b=airquality
bs = c(1, 4, 5, 6)

b1 = head(subset(b, b$Ozone > 28 | b$Temp > 70),5)
print(b1)

b2 = subset(b, b$Ozone > 100, select = bs)
print(b2)