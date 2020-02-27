var calif1= prompt("Escribe una calificación"); //var (tiene un enlace local), sin var (tiene un alcance global)
var calif2= prompt("Escribe una calificación");

if (isNaN(calif1) || isNaN(calif2)) {	//Se valida que sea un número por medio de isNaN("is not a number")
	alert("No son número");
}
else{
	var suma= parseInt(calif1) + parseInt(calif2);
	alert(suma);
}



