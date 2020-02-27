

var cantidad= prompt("CALCULADORA DE PROMEDIOS\n ¿Cuántas calificaciones desea promediar?");
var array= [];
var suma=0;

while(isNaN(cantidad) || cantidad%1!==0 || cantidad<0){	//validacion del ingreso para saber si es numero o no
	alert("Solo puede ingresar números enteros positivos")
	cantidad= prompt("¿Cuántas calificaciones desea promediar?");
}

for (var i = 1; i <= cantidad; i++) {		//Bucle para ingresar las calificaciones establecidas
	
	var calif= prompt("Ingresa la calificación " + i)

	while(isNaN(calif)){		//validacion del ingreso para saber si es numero o no
		alert("Solo puede ingresar números")
		calif= prompt("Ingresa la calificación " + i);
	}

	array[i-1]= (calif);
	suma += Number(calif);
}

var promedio= suma/ Number(cantidad);	//funcion para sacar el promedio

alert("El promedio de las calificaciones es " + promedio);	//Muestra el promedio obtenido 

