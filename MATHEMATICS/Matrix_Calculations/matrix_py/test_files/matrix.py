import numpy as np 
from numpy.linalg import inv,det,eigvals

method = input("\nDo you wish to calculate Using cramers rule ?\ntype(y/n): ")

if method == "n":
    #input section
    rows = int(input("\nplease enter the number of rows: \n"))
    cols = int(input("\nplease enter the number of columns: \n"))
    print("\nplease type the entries row-wise** seperated by space**: \n")
    entries = list(map(int,input().split()))
    m = np.array(entries).reshape(rows,cols)
    
    #matrix
    print("\ngiven matrix: \n",m)
    
    #determinant
    determinant = det(m).round(2)

    #eigenvalues
    eigenvalues = eigvals(m).round(2).real
    
    #inverse & identity matrix
    inverse = inv(m).round(2)
    inverse_dot = inverse.dot(m).round(1)

    print("\ndeterminant: \n",determinant)
    print("\nidentity matrix is: \n",inverse_dot)
    print("\neigen values: \n",eigenvalues)
    print("\ninverse of the matrix is: \n",inverse)

else:
    #input section for Cramers rule
    rows = int(input("\nplease enter the number of rows: \n"))
    cols = int(input("\nplease enter the number of columns: \n"))
    print("\nplease type the entries row-wise** seperated by space** \n")
    entries_m = list(map(int,input("\nvalues of matrix A1: \n").split()))
    matrix_eq = np.array(entries_m).reshape(rows,cols)
    entries_z = list(map(int,input("\nvalues of matrix z: \n").split()))
    z_val = np.array(entries_z).reshape(rows,1)

    #Cramers values
    cramers = np.linalg.solve(matrix_eq,z_val).round(2)
    
    #matrix A1
    print("\nmatrix A1 is: \n",matrix_eq)
    print("\ndeterminant of A1 is: \n",det(matrix_eq).round(2))
    
    if (rows==cols==2):
        #matrix A2
        matrixA2 = matrix_eq
        matrixA2[:,0]= entries_z
        print("\nmatrix A2 is: \n",matrixA2)
        print("\ndeterminant of A2 is: \n",det(matrixA2).round(2))
        
        #matrix A3
        matrixA3 = matrix_eq
        matrixA3[:,1]= entries_z
        print("\nmatrix A3 is: \n",matrixA3)
        print("\ndeterminant of A3 is: \n",det(matrixA3).round(2))

    elif(rows==cols==3):
        #matrix A2
        matrixA2 = matrix_eq
        matrixA2[:,0]= entries_z
        print("\nmatrix A2 is: \n",matrixA2)
        print("\ndeterminant of A2 is: \n",det(matrixA2).round(2))

        #matrix A3
        matrixA3 = matrix_eq
        matrixA3[:,1]= entries_z
        print("\nmatrix A3 is: \n",matrixA3)
        print("\ndeterminant of A3 is: \n",det(matrixA3).round(2))

        #matrix A4
        matrixA4 = matrix_eq
        matrixA4[:,2]= entries_z
        print("\nmatrix A4 is: \n",matrixA4)
        print("\ndeterminant of A4 is: \n",det(matrixA4).round(2))

    else:
        #matrix A2
        matrixA2 = matrix_eq
        matrixA2[:,0]= entries_z
        print("\nmatrix A2 is: \n",matrixA2)
        print("\ndeterminant of A2 is: \n",det(matrixA2).round(2))

        #matrix A3
        matrixA3 = matrix_eq
        matrixA3[:,1]= entries_z
        print("\nmatrix A3 is: \n",matrixA3)
        print("\ndeterminant of A3 is: \n",det(matrixA3).round(2))

        #matrix A4
        matrixA4 = matrix_eq
        matrixA4[:,2]= entries_z
        print("\nmatrix A4 is: \n",matrixA4)
        print("\ndeterminant of A4 is: \n",det(matrixA4).round(2))

        #matrix A5
        matrixA5 = matrix_eq
        matrixA5[:,3]= entries_z
        print("\nmatrix A5 is: \n",matrixA5)
        print("\ndeterminant of A5 is: \n",det(matrixA5).round(2))
    
    print ("\ncramers values: \n",cramers)






    
    





