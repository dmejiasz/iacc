class Persona(object): #creando la clase persona
    def __init__(self, edad, sexo, nombre):
    #Constructor de persona
    #atributos de persona
        self.edad = edad
        self.sexo = sexo
        self.nombre = nombre

    def __str__(self): #para retornar mensaje por pantalla
        cadena = "Se ha creado una persona.\n Nombre completo: {} \n Edad: {} \n Sexo: {} \n Pais: {} \n"
        return cadena.format(self.nombre,self.edad,self.sexo,self.pais)

    def __del__(self):#destructor de clase persona
        print("Se destruye objeto persona")
 
 #metodos de clase persona
    def trabaja (self):
        print(self.nombre+" ha trabajado")
    def juega (self):
        print(self.nombre+" ha jugado")
    def estudia (self):
        print(self.nombre+" ha estudiado")

class Humano(Persona):
    def __init__(self, edad, sexo, nombre, pais):
    #Constructor de humano
    #llamamos al constructor de objeto persona

        Persona.__init__(self, edad, sexo, nombre)
        #agregamos nuevo atributo a Humano
        self.pais = pais

joven = Humano(45,"Femenino","Alejandra","Chile")
print(joven)
joven.juega()
joven.estudia()
