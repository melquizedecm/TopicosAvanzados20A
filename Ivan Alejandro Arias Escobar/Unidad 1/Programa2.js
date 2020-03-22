/* *Source:Programa1.js 
*Description: Funciones iniciales en JS *Encender un motor / Apagar motor 
*Date: 13/Feb/2020
*Author: Ivan Alejandro Arias Escobar 
*/
var calificacion1=0;
var calificacion2=0;
calificacion1=prompt("Escribe una calificacion numerica");
calificacion2=prompt("Escribe una calificacion numerica");
if(isNaN(calificacion1) || calificacion2)){
	alert("No son numeros");
}
else{
	var suma= parseInt(calificacion1) + parseInt(calificacion2);
	alert("suma");
}


//isNaN
