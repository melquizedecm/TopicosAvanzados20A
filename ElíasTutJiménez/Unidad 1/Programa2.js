//validaciones
var calificacion1= prompt("Escribe una calificacion numerica");
var calificacion2= prompt("Escribe una calificacion numerica");
if (isNaN(calificacion1) || isNaN(calificacion2)){
	alert("No son numeros");
} else {
	var suma= parseInt(calificacion1) + parseInt(calificacion2);
	alert(suma);
}

//Number.isInteger()
//isNaN()