var doc = new jsPDF()

doc.setFontSize(50)
//Valor de la esquina para posicion y Texto de encabezado
doc.text(35, 25, 'Prueba PDF')
//Formato de la imagen  x,x,ancho,alto
doc.addImage(imgData, 'JPEG', 15, 40, 180, 160)
//Triangulo
doc.triangle(192,123,100,100,232,121)
//guardar datos de input
document.getElementById('prueba').value;
//guardar
doc.save('Example.pdf')