import numpy as np #estamos importando la librería
arreglo= np.array([16, 2, 7]) #estamos creando el vector
arreglo2= np.array([4, 2, 10]) #estamos creando el vector
matriz= np.array ([[2,5,7],[3, -8, 9],[2, 5, 1]])# estamos creando la matriz
# Juguemos con el código
# Sumar dos arreglos
print ("Suma del arreglo vector y la matriz\n", arreglo+ matriz,"\n")
# Restar dos arreglos
print ("Resta del arreglo vector y la matriz\n", arreglo- matriz,"\n")
# Multiplicación dos arreglos
print ("Multiplicación del arreglo vector y la matriz\n", arreglo* matriz,"\n")
# División de dos arreglos
print ("División del arreglo vector y la matriz\n", arreglo/ matriz,"\n")
#Comparación de arreglos
print ("Comparación con operaciones booleans\n", (arreglo > arreglo2),"\n")