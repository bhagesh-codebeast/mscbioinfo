import numpy as np
from numpy.linalg import inv,det,eigvals

rows = int(input("\nplease enter the number of rows: \n"))
cols = int(input("\nplease enter the number of columns: \n"))
method = input("\nDo you wish to calculate Using cramers rule ?\ntype(y/n): ")

if (rows==cols):
    print("Please type the row values seperated by a <space> | eg: 2 3 4")
    


elif (rows!=cols):
    print("this package only works for square matrix of 2by2, 3by3, or 4by4")
else:
    print("please enter a 2by2, 3by3, or 4by4 matrix")