import numpy as np #estamos importando la librería
def promedio (a,b):
 return (a+b)
def restar_mensaje(a,b):
 print ("el resultado de la resta es ",(a-b))

# desde aquí es el programa principal
s= int(input("Introduzca un valor "))
t= int(input("Introduzca otro valor"))
print ("El resultado de la suma es ", sumar(s,t))
restar_mensaje(s,t) #el primero es s
restar_mensaje(t,s) #el primero es t
p=45
s=34
print ("el resultado de la suma con nuevos valores ", sumar(p,s))
restar_mensaje(p,s)