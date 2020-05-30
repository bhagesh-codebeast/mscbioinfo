from fractions import Fraction
#ap
#to find the sequence of ap
def seq_ap(a,d,n):
    i=0
    print("\nthe sequence is: ")
    while n>i:
        print(a,end=',')
        a+=d
        i+=1
    print("\n")


#to find the nth term
def nth_term(a,d,n):
    return (a+(n-1)*d)

#to find ap if nth term is given


#sum of ap
def ap_sum(a,d,n):
    return (n/2)*(2*a+(n-1)*d)

#if given sequence is ap

a=Fraction(input("please input a: "))
d=Fraction(input("please input d: "))
n=Fraction(input("please input n: "))
seq_ap(a,d,n)
print("sum of AP: ",ap_sum(a,d,n),"\n")
print("nth term of AP: ",nth_term(a,d,n))