#!/usr/bin/python
import MySQLdb
# Open database connection
db = MySQLdb.connect("localhost","root","")
# prepare a cursor object using cursor() method
cursor1 = db.cursor()
# Drop table if it already exist using execute() method.
cursor1.execute("show databases")
for base in cursor1:
    print(base)

cursor1.excecute("select * from concesionario")
for base in cursor1:
    print(base)
db.close()
