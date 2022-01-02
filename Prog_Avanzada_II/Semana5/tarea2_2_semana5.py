class electronica(object): #creando la clase persona
    def __init__(self, marca, modelo, capacidad):
    #Constructor de electronica
    #atributos de electronica
        self.marca = marca
        self.modelo = modelo
        self.capacidad = capacidad

    def __str__(self): #para retornar mensaje por pantalla
        cadena = "Se ha creado un producto electronico.\n"+"Marca :"+ self.marca +"\n"+"Modelo : "+ self.modelo +"\n" + "Capacidad :"+self.capacidad+".\n"
        return cadena

    def __del__(self):#destructor de clase electronica
        print("Se destruye objeto electronica")
 
 #metodos de clase electronica
    def encendido (self):
        print(self.marca+" ha encendido")
    def apagado (self):
        print(self.marca+" ha apagado")
    def juega (self):
        print(self.marca+" ha jugado")
    def menu (self):
        print(self.marca+" ha ido al menú")


consola = electronica("Sony","Play Station 5","200GB")
consola.encendido()
consola.juega()
consola.apagado()
print(consola)

televisor = electronica("LG","LG7500UHD","4K")
televisor.encendido()
televisor.menu()
televisor.apagado()
print(televisor)