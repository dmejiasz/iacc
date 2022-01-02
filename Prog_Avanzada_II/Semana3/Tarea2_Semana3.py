import numpy as np #estamos importando la librería

def promediar(vector_entrada):
    vector_promedio = vector_entrada.mean(axis=0)
    print(vector_promedio)

semanas = 2
dias = 4
nombre_dia = ["Lunes","Martes","Miercoles","Jueves"]
vector_semana= np.array([[0, 0, 0, 0],[0, 0, 0, 0]]) #Vector semana 1 y 2
vector_promedio = np.array([0, 0, 0, 0])

for semana in range(semanas):
    for dia in range(dias):
        #print(f'{semana},{dia}: {b[fila, columna]}')
        temperatura = int(input(f"Ingrese temperatura del día {nombre_dia[dia]} de la semana {semana+1} ="))
        vector_semana[semana,dia] = temperatura

print(vector_semana)

promediar(vector_semana)

