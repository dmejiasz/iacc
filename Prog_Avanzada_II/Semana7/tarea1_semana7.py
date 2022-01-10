import mysql.connector

user = "root"
password = ""
bd = "concesionario"
host = "localhost"

miConexion=mysql.connector.connect(host, user, password)
cursor1=miConexion.cursor()
cursor1.execute("show databases")
for base in cursor1:
    print(base)
miConexion.close()


#cursor1.execute( "SELECT nombre, apellido FROM usuarios" )
#for nombre, apellido in cursor1.fetchall() :
#    print (nombre, apellido)
