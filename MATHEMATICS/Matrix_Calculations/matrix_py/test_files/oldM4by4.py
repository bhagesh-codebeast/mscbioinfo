import numpy as np
from numpy.linalg import inv,det,eigvals

rows = int(input("\nplease enter the number of rows: \n"))
cols = int(input("\nplease enter the number of columns: \n"))
method = input("\nDo you wish to calculate Using cramers rule ?\ntype(y/n): ")

if (rows==cols<=4):
    if(rows==2):
        r1 = input("\n enter row 1:\n").split()
        r2 = input("\n enter row 2:\n").split()
        rows_val = (r1+r2)
    elif(rows==3):
        r1 = input("\n enter row 1:\n").split()
        r2 = input("\n enter row 2:\n").split()
        r3 = input("\n enter row 3:\n").split()
        rows_val = (r1+r2+r3)
    else:
        r1 = input("\n enter row 1:\n").split()
        r2 = input("\n enter row 2:\n").split()
        r3 = input("\n enter row 3:\n").split()
        r4 = input("\n enter row 4:\n").split()
        rows_val = (r1+r2+r3+r4)

    entries = list(map(int,rows_val))
    m = np.matrix(entries).reshape(rows,cols)

    if method=="y":
        #z-matrix
        r5 = input("\nenter values of matrix z: \n").split()
        entries_z = list(map(int,r5))
        z_val = np.array(entries_z).reshape(rows,1)

        print("\nmatrix A is: \n",m)
        print("\nmatrix Z is: \n",z_val)
        #Cramers rule
        cramers = np.linalg.solve(m,z_val).round(2)
        print ("\ncramers values: \n",cramers)
        print("\ndeterminant of A is: \n",det(m).round(2))
    
        if (rows==cols==2):

            row1 = (r1+r2)
            entries1 = list(map(int,row1))
            m1 = np.matrix(entries1).reshape(rows,cols)
            m1[:,0]=z_val
            print("\nmatrix A1 is: \n",m1)
            print("\ndeterminant of A1 is: \n",det(m1).round(2))

            row2 = (r1+r2)
            entries2 = list(map(int,row2))
            m2 = np.matrix(entries2).reshape(rows,cols)
            m2[:,1]=z_val
            print("\nmatrix A2 is: \n",m2)
            print("\ndeterminant of A2 is: \n",det(m2).round(2))

        elif(rows==cols==3):
            row1 = (r1+r2+r3)
            entries1 = list(map(int,row1))
            m1 = np.matrix(entries1).reshape(rows,cols)
            m1[:,0]=z_val
            print("\nmatrix A1 is: \n",m1)
            print("\ndeterminant of A1 is: \n",det(m1).round(2))

            row2 = (r1+r2+r3)
            entries2 = list(map(int,row2))
            m2 = np.matrix(entries2).reshape(rows,cols)
            m2[:,1]=z_val
            print("\nmatrix A2 is: \n",m2)
            print("\ndeterminant of A2 is: \n",det(m2).round(2))

            row3 = (r1+r2+r3)
            entries3 = list(map(int,row3))
            m3 = np.matrix(entries3).reshape(rows,cols)
            m3[:,2]=z_val
            print("\nmatrix A3 is: \n",m3)
            print("\ndeterminant of A3 is: \n",det(m3).round(2))
        
        else:
            row1 = (r1+r2+r3+r4)
            entries1 = list(map(int,row1))
            m1 = np.matrix(entries1).reshape(rows,cols)
            m1[:,0]=z_val
            print("\nmatrix A1 is: \n",m1)
            print("\ndeterminant of A1 is: \n",det(m1).round(2))

            row2 = (r1+r2+r3+r4)
            entries2 = list(map(int,row2))
            m2 = np.matrix(entries2).reshape(rows,cols)
            m2[:,1]=z_val
            print("\nmatrix A2 is: \n",m2)
            print("\ndeterminant of A2 is: \n",det(m2).round(2))

            row3 = (r1+r2+r3+r4)
            entries3 = list(map(int,row3))
            m3 = np.matrix(entries3).reshape(rows,cols)
            m3[:,2]=z_val
            print("\nmatrix A3 is: \n",m3)
            print("\ndeterminant of A3 is: \n",det(m3).round(2))

            row4 = (r1+r2+r3+r4)
            entries4 = list(map(int,row4))
            m4 = np.matrix(entries4).reshape(rows,cols)
            m4[:,3]=z_val
            print("\nmatrix A4 is: \n",m4)
            print("\ndeterminant of A4 is: \n",det(m4).round(2))

    else:
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

elif (rows!=cols):
    print("this package only works for square matrix of 2by2, 3by3, or 4by4")
else:
    print("please enter a 2by2, 3by3, or 4by4 matrix")
