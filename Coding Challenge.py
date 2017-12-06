#Question 1
def question1 (array, input):
    above = 0
    below = 0
    for x in array:
        if input < x:
            above +=1
        if input > x:
            below +=1
    return ("above: " + str(above) + ", below: " + str(below))

#Question 2
def question2 (string, input):
    substring = (string[-input:])
    string = (string[:-input])
    return (substring+string)

print (question1([1,5,2,1,10], 6))
print (question2("MyString",2))

#Question 3
#In Email text and attached as Word Document
