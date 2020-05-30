import numpy as np
r1 = int(input("Enter the number of rows in matrix 1:"))
c1 = int(input("Enter the number of columns in matrix 1:"))
mat1 = [[int(input()) for x in range(c1)] for y in range(r1)]
r2 = int(input("Enter the number of rows in matrix 2:"))
c2 = int(input("Enter the number of columns in matrix 2:"))
mat2 = [[int(input()) for x in range(c2)] for y in range(r2)]
print (mat1, mat2)
prod = np.dot(mat1, mat2)
print (prod)