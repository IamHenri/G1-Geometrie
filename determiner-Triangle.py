# source https://www.codesansar.com/python-programming-examples/check-triangle-types-sides.htm
# Validity of Triangle given sides

# Function definition to check validity
def is_valid_triangle(a,b,c):
    if a+b>=c and b+c>=a and c+a>=b:
        return True
    else:
        return False

# Function definition for type
def type_of_triangle(a,b,c):
    if a==b and b==c:
        print('Le triangle est Equilatéral.')
    elif a==b or b==c or a==c:
        print('Le triangle est Isocèles .')
    elif (a*a+c*c==b*b or a*a+b*b==c*c or b*b+c*c==a*a) and (a*a+c*c==b*b or a*a+b*b==c*c or b*b+c*c==a*a):
        print('Le triangle est Isocèles rectangle.')
    elif a*a+c*c==b*b or a*a+b*b==c*c or b*b+c*c==a*a:
        print('Le triangle est  Rectangle.')
    else:
        print('Le triangle est Quelconque')

# Reading Three Sides
side_a = float(input('Donner une longueur pour a: '))
side_b = float(input('Donner une longueur pour b: '))
side_c = float(input('Donner une longueur pour c: '))

# Function call & making decision
if is_valid_triangle(side_a, side_b, side_c):
    type_of_triangle(side_a, side_b, side_c)
else:
    print('Triangle impossible.')
