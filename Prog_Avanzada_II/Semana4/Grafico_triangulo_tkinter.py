import matplotlib.pyplot as plt
import matplotlib.patches as pc

fig1 = plt.figure()  # Ventana 1
ax1 = fig1.add_subplot(111, aspect='equal')
plt.xlim(0, 1)
plt.ylim(0, 1)

plt.title("Graficos")
ax1.add_patch(
    pc.Rectangle(  # Rectángulo
        (0.2, 0.75),  # （x,y）
        0.4,  # Largo
        0.14,  # ancho
        color='#B2B2B2'  # Gris
    )
)
ax1.add_patch(
    pc.Ellipse(  # Elipse
        (0.7, 0.2),  # （x,y）
        0.3,  # Largo
        0.2,  # ancho
        color='#B3B2FE'  # Morado claro
    )
)
# Triángulo
triangleX = [0.17, 0.38, 0.22]  # coordenada x
triangleY = [0.18, 0.39, 0.59]  # coordenada y
plt.fill(triangleX, triangleY, '#7FC080')

plt.show()  # Mostrar en figura
