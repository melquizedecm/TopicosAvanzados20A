
//Source:         Programa2.html
//Description:    Sumar calificaciones y realizar las validaciones correspondientes.
//Date:           14/Feb/20
//Author:        Lizzie Medina Cetina 

 
//Validaciones
//Registra 2 calificaciones y las suma si son números.

var calificacion1= prompt("Escribe una calificacion  numerica");
var calificacion2= prompt("Escribe una calificacion  numerica");

if(isNaN(calificacion1) || isNaN(calificacion2)){
   alert("No son numeros");
}else{
	var suma = parseInt(calificacion1) + parseInt(calificacion2);
	alert(suma);
}




//Number.isInteger() ----> Verifica que sean numeros enteros
//isNaN()-------------> verifica que sean números
//alert(Number.isInteger(calificacion1));
	//parseInt=valida que sean enteros