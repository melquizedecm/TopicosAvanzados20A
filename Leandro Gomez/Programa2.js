
var Calificacion1= prompt ("Escriba la calificacion numerica");
var Calificacion2= prompt ("Escriba la calificacion numerica");

if (isNaN(Calificacion1) && isNaN(Calificacion2)){

	alert("No son numeros");
}
else{
	var Suma = parseInt(Calificacion1) + parseInt(Calificacion2);
alert(Suma);
}
