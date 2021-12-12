clave=8657
for i in range(3):
    pwd=int(input("Ingrese contraseña :"))
    if pwd==clave:
        break

if pwd==clave:
    print("Bienvenido")
else:
    print("Intente nuevamente")
