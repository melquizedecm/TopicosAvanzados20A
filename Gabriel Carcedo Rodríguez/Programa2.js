/*
 ************************************** 
 *Source: Programa2.js
 *Description: Web page for add two qualifications
 *Date: 13/Feb/2020
 *Author: Gabriel Carcedo Rodríguez
 **************************************
 */
//CREACIÓN DE LAS VARIABLES QUE RECIBIRÁN LO QUE INTRODUZCA EL USUARIO
var Calificacion1= prompt ("Escriba la calificacion numerica: ");
var Calificacion2= prompt ("Escriba la calificacion numerica: ");

//SI ALGUNA CALIFICACIÓN NO ES NUMÉRICA LANZA EL MENSAJE DE ERROR (VALIDACIÓN)
if (isNaN(Calificacion1) || isNaN(Calificacion2))
	alert("ERROR: ¡NO SON NUMEROS!");

//DE LO CONTRARIO, LEE LOS VALORES Y LOS SUMA PARA IMPRIMIR LUEGO
else
{
	var Suma = parseInt(Calificacion1) + parseInt(Calificacion2);
	alert(Suma);
}
