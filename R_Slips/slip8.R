
print("VSH")

#create a data frame using two given vectors
#display duplicated elements
#unique rows of data frame

a = c(1,2,2,4,6,9,9,90)
b = c(3,2,2,6,8,9,9,78)

v = data.frame(a,b)
print("Original dataframe:")
print(v)

print("Duplicated Elements:")
print(v[duplicated(v),])

print("Unique rows:")
print(unique(v))