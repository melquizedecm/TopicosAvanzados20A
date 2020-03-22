function crear(){

var doc = new jsPDF()

//Texto introducido
var Nombre=document.getElementById("Texto").value;
var Correo=document.getElementById("Texto2").value;
var Numero=document.getElementById("Texto3").value;
var Servicio=document.getElementById("Texto4").value;
var kl=document.getElementById("Texto5").value;
var Extra=document.getElementById("Texto6").value;
//Texto predetiminado
doc.text(100,20, "Nota")
doc.text(30,35, "Nombre:")
doc.text(30,40, "Correo:")
doc.text(30,45, "Número:")
doc.text(30,53, "Servicio:")
doc.text(30,80, "Kilos:")
doc.text(30,88, "Extra:")
//Posicion del texto introducido
doc.text(70,35,Nombre)
doc.text(70,40,Correo)
doc.text(70,45,Numero)
doc.text(70,53,Servicio)
doc.text(70,80,kl)
doc.text(70,88,Extra)

//Nota
doc.line(30, 30, 180, 30)//Linea horizontal
doc.line(30, 35, 180, 35)//Linea horizontal
doc.line(30, 40, 180, 40)//Linea horizontal
doc.line(30, 47, 180, 47)//Linea horizontal
doc.line(70, 54, 180, 54)//Linea horizontal
doc.line(70, 61, 180, 61)//Linea horizontal
doc.line(70, 68, 180, 68)//Linea horizontal
doc.line(30, 75, 180, 75)//Linea horizontal
doc.line(70, 82, 180, 82)//Linea horizontal
doc.line(30, 82, 180, 82)//Linea horizontal
doc.line(30, 89, 180, 89)//Linea horizontal
doc.line(30, 30, 30, 90) // vertical line
doc.line(70, 30, 70, 90) // vertical line
doc.line(180, 30, 180, 90) // vertical line
//Guardar PDF
doc.save('Nota.pdf')
}