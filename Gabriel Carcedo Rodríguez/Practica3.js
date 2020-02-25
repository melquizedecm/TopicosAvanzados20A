/*
 ************************************** 
 *Source: Practica3.js
 *Description: Web page to receive 10 qualifications
 *Date: 13/Feb/2020
 *Author: Gabriel Carcedo Rodríguez
 **************************************
 */

//SE CREA UN ARREGLO DE TAMAÑO 10 QUE SE LLENA CON 
//LAS CALIFICACIONES QUE INTRODUZCA EL USUSARIO
var Calificacion=[];
for (i = 0; i < 10; i++)
{
  Calificacion[i]= prompt("Escribe la calificacion: ");
  //VALIDA QUE LAS CALIFICACIONES SEAN NUMÉRICAS
  /*if (isNaN(Calificacion[i])
	alert("ERROR: ¡NO SON NÚMEROS!");*/
}
//IMPRIME EL ARREGLO
alert(Calificacion);
