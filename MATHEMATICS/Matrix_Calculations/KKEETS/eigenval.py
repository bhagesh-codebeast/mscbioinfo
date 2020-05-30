import numpy as np
from numpy import linalg as LA 
r = int(input("Enter the number of rows:"))
c = int(input("Enter the number of columns:"))
mat = [[int(input()) for x in range(c)] for y in range(r)]
print(mat)
ev = LA.eigvals(mat)
print (ev)