import tkinter as tk
from tkinter import messagebox #Importamos libreria para los mensajes

#Creamos función para los mensajes con botón
def msgInfo():
    messagebox.showinfo("Información!","Este es solo información")

def msgError():
    messagebox.showerror("Error!","Ha ocurrido un problema")

def msgWarning():
    messagebox.showwarning("Warning!!!!","Precaución......")

def msgQuestion():
    salida=messagebox.askquestion("Pregunta?","Quieres continuar?")
    #print(salida)
    if(salida=='yes'):
        messagebox.showinfo("Información!","Presionó SI")

#Creamos instancia
formulario = tk.Tk()

#Creamos venta con titulo
formulario.title("Prueba grafica con Python")

#Definimos dimensiones de ventana
formulario.geometry("500x400")

#Bloqueamos cambiar el tamaño de ventana
formulario.resizable(False,False)

#text    = texto del Botón
#commnad = indica funcion a llamar
btn1 = tk.Button(formulario, text = "Información", command = msgInfo)
btn2 = tk.Button(formulario, text = "Error", command = msgError)
btn3 = tk.Button(formulario, text = "Precaución", command = msgWarning)
btn4 = tk.Button(formulario, text = "Pregunta", command = msgQuestion)
#aparece el botón en pantalla si ubicación
#btn1.pack()

#definimos ubicación del botón en pantalla
btn1.place(x=75, y=50)
btn2.place(x=75, y=80)
btn3.place(x=75, y=110)
btn4.place(x=75, y=140)

#Para lanzar la aplicacion es necesario cerrar con Loop
formulario.mainloop() # lleva todos los registros de la ventana
#Cuadros de texto, etiquetas, casillas, botones de opción.
