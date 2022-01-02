import tkinter
from tkinter import messagebox
formulario = tkinter.Tk()
formulario.title("Semana 4 - Identificar tipo de Triangulo")
formulario.geometry("400x400")
etiqueta1 = tkinter.Label(formulario, text="Medida lado Izquierdo")
etiqueta1.pack()
entrada1 = tkinter.Entry(formulario)
entrada1.pack()
etiqueta2 = tkinter.Label(formulario, text="Medida lado Derecho")
etiqueta2.pack()
entrada2 = tkinter.Entry(formulario)
entrada2.pack()
etiqueta3 = tkinter.Label(formulario, text="Medida de Base")
etiqueta3.pack()
entrada3 = tkinter.Entry(formulario)
entrada3.pack()

def evaluaTriangulo():
    lado1 = int(entrada1.get())
    lado2 = int(entrada2.get())
    lado3 = int(entrada3.get())
    if lado1 == lado2 == lado3:
        salida = "Equilátero"
    elif lado1 == lado2 or lado2 == lado3 or lado3 == lado1:
        salida = "Isósceles"
    else:
        salida = "Escaleno"
    
    salida = ("De acuerdo a las medidas del tringulo "+ str(lado1) + " izq. "
                                         + str(lado2) + " der. "
                                         + str(lado3) + " base, es " + salida)
    messagebox.showinfo("salida", salida)

boton = tkinter.Button(formulario, text="Identificar", command=evaluaTriangulo)
boton.pack()
formulario.mainloop()