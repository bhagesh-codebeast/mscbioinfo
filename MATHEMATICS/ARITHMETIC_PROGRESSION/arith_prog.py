from fractions import Fraction

response = int(input(" what do you want to calculate?\n1. sequence of ap? enter '1'\n2. nth term of ap? enter '2'\n3. Sum of ap? enter '3'\n4. If the given sequence is an ap? enter '4'\nPlease type your response: "))

if (response == 4):

    #if given sequence is ap
    def is_ap(ap):
        first_last = ap[1]-ap[0]
        for x in range(len(ap)-1):
            if not (ap[x+1]-ap[x]==first_last):
                return False
        return True

    intlist = input("please enter ap seperated by space: ").split()
    ap = list(map(int,intlist))
    print(is_ap(ap))

else:
    
    a=Fraction(input("please input a: "))
    d=Fraction(input("please input d: "))
    n=Fraction(input("please input n: "))

    if (response == 1):

        #to find the sequence of ap
        def seq_ap(a,d,n):
            i=0
            print("\nthe sequence is: ")
            while n>i:
                print(a,end=',')
                a+=d
                i+=1

        seq_ap(a,d,n)
        print("\n")

    elif (response == 2):

        #to find the nth term
        def nth_term(a,d,n):
            return (a+(n-1)*d)

        print("\nnth term of AP: ",nth_term(a,d,n))

    elif (response == 3):

        #sum of ap
        def ap_sum(a,d,n):
            return (n/2)*(2*a+(n-1)*d)

        print("sum of AP: ",ap_sum(a,d,n),"\n")

    else:
        print("please enter a valid input!")
