data(iris)

a = iris

y = a[sample(1:nrow(a),10),5]
plot(y)

b = density(a$Sepal.Length)
plot(b)

bb = density(a$Sepal.Width)
plot(bb)

bbb = density(a$Petal.Length)
plot(bbb)

bbbb = density(a$Petal.Width)
plot(bbbb)