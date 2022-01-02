def tarea3(n):
    if n>1:
        print(n)
        #muestre los valores hasta F(2)
        n-=1
        #f(n) = f(n)-f(n-1)
        tarea3(n)
    else:
        print ("Fin de ciclo ")

valor=int(input("Ingrese un valor ="))

tarea3(valor)
