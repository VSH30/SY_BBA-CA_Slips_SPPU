
print("VSH")

#Create a Dataframe for details of 5 employees
#display the details in ascending order

Name = c("Vishal","Rohit","Shravani","Adnan","Saniya")
Roll_No = c(1,60,23,64,67)
Gender = c("M","M","F","M","F")
E_No = c(126,129,123,127,122)

Employee = data.frame(Name,Roll_No,Gender,E_No)

print("Data frame:")
print(Employee)

print("Data frame sorted by E_No")
print(Employee[order(Employee$E_No),])