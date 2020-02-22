var calificaciones=0;
var promedio;
var suma=0;
n = parseInt(prompt("Cuantas calificaciones deseas leer"));
for (var i = 0; i < n; i++) {
  while (true) {
    numero = prompt("Digite una calificacion");
    if (numero%1 == 0 && numero>0) {
      
    }
  }
  calificacion = parseFloat(prompt("Digite una calificacion"))
  suma = suma + calificacion;
}
promedio = suma / n;
alert("el promedio es: "+ promedio);
