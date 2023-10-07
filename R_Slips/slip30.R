a = list("File","Edit","Code","View","Plots","Session","Build","Debug","Profile","Tools")

print("The list is:")
print(a)

print("List in Ascending=")
asc = sort(unlist(a),decreasing = FALSE)
print(asc)

print("List in Descending=")
desc = sort(unlist(a),decreasing = TRUE)
print(desc)