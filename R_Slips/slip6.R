
print("VSH")

#create a simple bar plot of five subject’s marks

marks = c(50, 44, 70, 94, 86)
subject = c("DM","DS","SE","PHP","BD")
y = c(0,100)

barplot(
marks,
xlab = "Subjects",
ylab = "Msrks",
main = "Marks of 5 subjects",
names.arg=subject,
ylim = y,
col='green',
border='red'
)
