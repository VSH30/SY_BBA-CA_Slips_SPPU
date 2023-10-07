#Create list of students
#Add names to list
#Add element at END
#Remove first element
#Update 2nd last element

print("The student list is:")
a = list("Pranav", "Vishal", "Rohit")
print(a)

print("List with names:")
b = c("Joshi", "Hanchnoli", "Prajapati")
names(a) = b
print(a)

print("Adding a name at END:")
a[length(a)+1] = "Adnan"
print(a)

print("Removing first student:")
a[1] = NULL
print(a)

print("updating Second last student:")
a[length(a)-1] = "ABC"
print(a)