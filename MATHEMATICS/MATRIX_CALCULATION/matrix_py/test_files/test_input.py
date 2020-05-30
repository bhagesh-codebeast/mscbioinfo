import numpy as np


rows = int(input("\nplease enter the number of rows: \n"))
cols = int(input("\nplease enter the number of columns: \n"))
print("\nplease type the entries row-wise** seperated by space**: \n")
entries = list(map(int,input().split()))
m = np.array(entries).reshape(rows,cols)
entries2 = list(map(int,input("\n enter values for n: \n").split()))
n= np.array(entries2).reshape(rows,1)
#matrix
print("\ngiven matrix: \n",m)
print("\ngiven matrix: \n",n)

m[:,0]=n[:,0]

print(m)