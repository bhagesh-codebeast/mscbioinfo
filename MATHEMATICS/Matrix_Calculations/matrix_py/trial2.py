import numpy as np
r = int(input("Enter the number of rows:"))
c = int(input("Enter the number of columns:"))
mat = [[int(input()) for x in range(c)] for y in range(r)]
ar = np.array(mat)
print("A:",ar)
print("|A|", np.linalg.det(ar).round(2),"\n")

#b = int(input("Enter the number of rows in Z:"))
#a = int(input("Enter the number of columns in Z:"))

z = [[int(input()) for x in range(1)] for y in range(c)]
zar = np.array(z)
print("Z:",zar,"\n")

for i in range(0,c):
    ar[:,i] = zar[:,0]
    print ("A",i,":",ar)
    print ("|A|",i,":",np.linalg.det(ar).round(2))
    ar = np.array(mat)
    print("\n")
    
print ("The values of X, Y and Z are: \n",np.linalg.solve(ar,zar).round(2))