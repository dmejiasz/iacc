def factorial(numero):
 print ("Valor inicial ->",numero)
 if numero > 1:
  numero = numero * factorial(numero -1)
 print ("valor final ->",numero)
 return numero
valor= int(input("Introduzca el valor al que desea calcular su factorial= "))
print (factorial(valor))