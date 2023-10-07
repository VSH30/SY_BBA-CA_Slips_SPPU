
print("VSH")

#create a list of cities and perform the following 
#Give names to the elements in the list
#Add an element at the end of the list
#Remove the last element
#Update the 3rd Element

print("The list is:")
a = list("Mumbai","Jaipur","Kolkata","Bengaluru")
print(a)

print("List with names:")
b = c("Maharashtra","Rajasthan","West Bengal","Karnataka")
names(a) = b
print(a)

print("Adding element at end:")
a[length(a)+1] = "PUNE"
print(a)

print("Removing last element:")
a[length(a)] = NULL
print(a)

print("Replacing 3rd element:")
a[3] = "Siliguri"
print(a)
