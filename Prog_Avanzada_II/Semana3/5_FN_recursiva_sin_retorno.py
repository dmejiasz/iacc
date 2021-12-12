def cuenta_regresiva(numero):
 numero -= 1
 if numero > 0:
    print (numero)
    cuenta_regresiva(numero)
 else:
    print ("Fin de la función, llegó al número ", numero)

######## Inicio del programa principal########

Valor_inicial= int(input("Introduzca el número en el que se iniciará la regresión= "))
cuenta_regresiva(Valor_inicial)