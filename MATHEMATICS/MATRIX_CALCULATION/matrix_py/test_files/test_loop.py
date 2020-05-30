n_lines = int(input('How many lines do you want to input?'))

lines = []
for i in range(n_lines):
    x = input()
    lines.append(x)
    if int(x) >= 5:
        break

print(lines)

n_lines = int(input('How many lines do you want to inputvvvv?'))
lines = [input() for i in range(5 if n_lines>5 else n_lines)]

lines = ""
for i in range(no_of_lines):
    lines+=input()+"\n"

print(lines)