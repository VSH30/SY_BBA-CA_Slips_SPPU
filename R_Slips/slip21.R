data("PlantGrowth")
a = PlantGrowth

y = a[sample(1:nrow(a),size=10),2]
plot(y)

b = density(a$weight)
plot(b)