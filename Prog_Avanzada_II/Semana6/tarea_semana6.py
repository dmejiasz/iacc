class Persona(object):
 
    def __init__ (self, nombre, apellido, rut, direccion):
        self.nombre = nombre 
        self.apellido = apellido 
        self.rut = rut 
        self.direccion = direccion

class Estudiante(Persona):  

    def __init__(self, nombre, apellido, rut, direccion, anno): 
    
        Persona.__init__(self, nombre, apellido, rut, direccion)
        self.anno = anno 
        self.tareas = ['taller','historia','Frances','Teoria Musical'] 
        self.extras = ["Futbol","Judo"] 
        
    def __str__(self): 
        return "%s %s %s, cursa: %s,y sus asiganaturas son: %s,y realiza actividades como:%s" % (
            self.__doc__[0:11], 
            self.nombre, 
            self.apellido, 
            self.anno, 
            self.consulta_tareas(),
            self.consulta_extras()) 
            
    def consulta_tareas(self): 
        return ', '.join(self.tareas) 
    
    def consulta_extras(self): 
        return ",".join(self.extras)
        
class Apoderado (Estudiante): 
    def __init__(self,nombre, apellido, rut, direccion ,anno ,padre): 
        
        Estudiante.__init__(self, nombre, apellido, rut, direccion, anno) 
        self.padre=padre 
        self.estudiante= str(Estudiante) 
        
    def __str__(self): 
        return "%s %s %s que vive en %s%s,es apoderado del %s" % ( 
            self.__doc__[0:12],
            self.nombre,
            self.apellido, 
            self.direccion,
            self.anno,
            self.estudiante) 
                
    def consulta_padre(self):
        return ",".join(self.padre)

        nombre_completo = lambda nombre,apellido: "nombre completo: {self.nombre()}{self.apellido()}"
        estudiante1 = Estudiante ("Steffan", "Vasquez", "16.434.432-1", "Juan Cariman 1800", "el quinto año")
        estudiante2 = Estudiante ("Christian", "Vásquez", "19.153.454-4", "Juan Cariman 1800", "el segundo año")
        apoderado = Apoderado ("Pablo","Vasquez","8.231.543-2","Peñalolen", estudiante1)
        nombre_completo=(apoderado.nombre,apoderado.apellido)
        print ("\n" + str(apoderado) + "\n")
        print ("\n" + str(estudiante2)+"\n")
        print (estudiante2.rut)
        print (apoderado)
        print (nombre_completo)