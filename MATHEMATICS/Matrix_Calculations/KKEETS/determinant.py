import numpy as np
r = int(input("Enter the number of rows:"))
c = int(input("Enter the number of columns:"))
mat = [[int(input()) for x in range(c)] for y in range(r)]
print(mat)
det = np.linalg.det(mat)
print (round(det,2))
