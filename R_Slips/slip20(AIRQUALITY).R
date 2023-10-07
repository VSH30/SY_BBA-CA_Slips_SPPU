data("airquality")

a = airquality

plot(a[,3],
     a$Temp,
     main="WIND SPEED VS TEMP",
     xlab = "WIND SPEED",
     ylab = "TEMP")