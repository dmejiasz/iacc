class Persona(object):
    '''Persona'''
    def __init__ (self, nombre, apellido, rut, direccion):
        self.nombre = nombre 
        self.apellido = apellido 
        self.rut = rut 
        self.direccion = direccion

class Estudiante(Persona):  
    '''estudiante'''
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
        return ",".join(self.tareas)   
    
    def consulta_extras(self): 
        return ",".join(self.extras)
        
class Apoderado (Estudiante):
    '''El Apoderado'''
    def __init__(self,nombre, apellido, rut, direccion ,anno ,padre): 
        
        Estudiante.__init__(self, nombre, apellido, rut, direccion, anno) 
        self.padre=padre 
        self.estudiante= str(estudiante1) 
        
    def __str__(self): 
        return "%s %s %s que vive en %s %s,es apoderado del %s" % ( 
            self.__doc__[0:12],
            self.nombre,
            self.apellido, 
            self.direccion,
            self.anno,
            self.estudiante) 
                
    def consulta_padre(self):
        return ",".join(self.padre)

nombre_completo = lambda nombre,apellido: "nombre completo: {self.nombre()}{self.apellido()}"
estudiante1 = Estudiante ("Francisca", "Mejías", "20.123.456-6", "Rio Claro 7061, Cerrillos", "el primer año")
estudiante2 = Estudiante ("Fabian", "Mejías", "20.345.678-9", "Rio Claro 7061, Cerrillos", "el cuarto año")
apoderado = Apoderado ("Diego","Mejías","12.345.543-7","Rio Claro 7061, Cerrillos", "Primer año",estudiante1)
nombre_completo=(apoderado.nombre,apoderado.apellido)
print ("\n" + str(apoderado) + "\n")
print ("\n" + str(estudiante2)+"\n")
print (estudiante2.rut)
print (apoderado)
print (nombre_completo)