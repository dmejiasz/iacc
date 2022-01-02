class persona(object): #creando la clase persona
    def __init__(self, edad, sexo, nombre):
    #Constructor de persona
    #atributos de persona
        self.edad = edad
        self.sexo = sexo
        self.nombre = nombre

    def __str__(self): #para retornar mensaje por pantalla
        cadena = "Se ha creado una persona.\n"+"Nombre completo:" + self.nombre +"\n"+"Edad: "+ str(self.edad) +"\n" + "Sexo:"+self.sexo+".\n"
        return cadena

    def __del__(self):#destructor de clase persona
        print("Se destruye objeto persona")
 
 #metodos de clase persona
    def trabaja (self):
        print(self.nombre+" ha trabajado")
    def juega (self):
        print(self.nombre+" ha jugado")
    def estudia (self):
        print(self.nombre+" ha estudiado")


adulto = persona(34,"Masculino","Diego Mejías")
print(adulto)
adulto.juega()
adulto.trabaja()
print("")
joven = persona(10,"Femenino","Francisca Molina")
print(joven)
joven.juega()
joven.estudia()
