/*
****************************************
* Source: 			Programa4.js 
* Description:  	Pedir un número determinado de calificaciones  y promediarlas.
* Date: 			13/Febrero/2020
* Author: 			Josue Antonio Castro Colli
****************************************
*/

var numAlumno;
var suma = 0;
var promedio = 0; 
var i;
var cal = [];

while (true){
	numAlumno = prompt("¿Cuantas calificaciones promediará?");
	if(numAlumno%1 == 0 && numAlumno>0){
		break;
	} else {
		alert("¡No es un número entero o positivo!");
	}
}

for(i=0;i<numAlumno;i++){
	while(true){
		var calificacion = prompt("¿Cuál es la calificación del alumno?");
		cal[i] = Number (calificacion);
		if (cal[i]%1==0 && cal[i]>=0 && cal[i]<=100){
			break;
		} else {
			alert("¡No es una calificación valida!")
		}
	}

	suma = suma + cal[i];
}

promedio = suma / numAlumno;
alert("El promedio es : " + promedio);