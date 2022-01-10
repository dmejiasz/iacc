import mysql.connector;

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
            self.nombre,
            self.apellido, 
            self.direccion,
            self.anno,
            self.estudiante) 
                
    def consulta_padre(self):
        return ",".join(self.padre)


Automovil = new Auto($_POST["patente"],
                      $_POST["motor"],
                      $_POST["chasis"],
                      $_POST["marca"],
                      $_POST["modelo"],
                      $_POST["anho"],
                      $_POST["color"],
                      $_POST["precio"]);

  if(isset($_POST['ingresar'])) {
    $ingresar=$_POST['ingresar'];
    }else {
          $ingresar='';
    }
 if(isset($_POST['modificar'])) {
    $modificar=$_POST['modificar'];
    }else {
          $modificar='';
    }
 if(isset($_POST['consultar'])) {
    $consultar=$_POST['consultar'];
    }else {
          $consultar='';
    }

 if($Automovil->patente!='' && $Automovil->motor!='' && $Automovil->chasis!='' && $Automovil->marca!='' && $Automovil->modelo!='' && $Automovil->anho!='' && $Automovil->color!='' && $Automovil->precio!='') 
    {
  #echo "Entro en primer IF";
  $user="root";
  $password='';
  $bd="concesionario";
  $host="localhost";
  $result=NULL;
  $exito=0;
  $mysqli = mysql.connector.connect ($host, $user, $password, $bd);
  if($mysqli!=NULL) { 
    $cursor = mysqli.cursor();
    if($ingresar == 'Ingresar') {
        $query = "insert into autos values('" . $Automovil->patente . "', '" . $Automovil->motor . "', '"
            . $Automovil->chasis . "', '" . $Automovil->marca . "', '" . $Automovil->modelo . "', '" . $Automovil->anho . "', '" 
            . $Automovil->color . "', '" . $Automovil->precio . "')";
        echo "<br>";
        cursor.execute($query);
        if($result===TRUE) {
          echo "<br/><center><a href='./tarea3_1_semana6.html'>Registro exitoso, haga clic aqui para regresar<a></center>"; 
        }
    }

    if($modificar == 'Modificar') {
        $query = "update autos set matricula='" . $Automovil->patente . "', serial_motor='" . $Automovil->motor . 
                 "', serial_carroceria='" . $Automovil->chasis . "', marca='" . $Automovil->marca . "', modelo='" . $Automovil->modelo . 
                 "', anio=" . $Automovil->anho . ", color='" . $Automovil->color . "', precio=" . $Automovil->precio . ""
            . " where matricula='" . $Automovil->patente . "'";
        $result = $mysqli->query($query);
        if($result==TRUE) {
          echo "<br/><center><a href='./tarea3_1_semana6.html'>Modificación exitosa, haga clic aqui para regresar<a></center>"; 
        }
    }       
    $mysqli.close();
  }
  }else if($Automovil->patente != '') {
    $user="root";
    $password='';
    $bd="concesionario";
    $host="localhost";
    $result=NULL;
    $exito=0;
    $mysqli = MySQLdb.connect ($host, $user, $password, $bd);
    if($mysqli!=NULL) {
        if($consultar == 'Consultar') {
            $query = "select * from autos where matricula='".$Automovil->patente."'";
            $result = $mysqli->query($query);
            echo "<table border='2' align='center'>";
            echo "<caption>Auto Consultado</caption>";

            while($row = $result->fetch_assoc()) {
                  echo "<tr bgcolor='cyan'><td>Matricula</td><td>Serial Motor</td><td>Serial Carrocería</td><td>Marca</td><td>Modelo</td><td>Año</td><td>Color</td><td>Precio</td></tr>";
                  printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",$row['matricula'],$row['serial_motor'],$row['serial_carroceria'],$row['marca'],$row['modelo'],$row['anio'],$row['color'],$row['precio']);
                  $exito=1;
            }
            echo "</table>";
            if($exito==0){
              echo "<br/><center><a href='./tarea3_1_semana6.html'>Libro NO registrado, haga clic aqui para regresar<a></center>";
            }else {
              echo "<br/><center><a href='./tarea3_1_semana6.html'>Consulta exitosa, haga clic aqui para regresar<a></center>";
            }
        }
    }
    $mysqli.close();
}else {
   echo "Debe ingresar todos los datos para ingresar o modificar algún Vehículo.<br/>";
   echo "Para consultar sólo debe ingresar la patente.<br/>";
   echo "<br/><a href='./tarea3_1_semana6.html'>Haga clic aqui para regresar<a>";
}