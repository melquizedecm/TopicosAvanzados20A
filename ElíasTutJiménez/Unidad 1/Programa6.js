/*
****************************************
*Source: Programa6.js
*Description: Validar Imputs
*Tomando valores de los imputs y realizando 
*operaciones
*Date: 20/Feb/2020
*Author: Elías Tut Jiménez
**************************************** 
*/

function calcularIva(){
	//obtener los valores de los input.
	var valor=document.getElementById('inputValor').value;
	var IVA=document.getElementById('inputIVA').value; //get el valor del inputIVA

	//validar los valores de los input.
	if (isNaN(valor) || isNaN(IVA)){
		alert("No es numérico el valor");
	} else {
		valor=parseFloat(valor);
		IVA=parseFloat(IVA);
	}

	//imprimit los resultados
	var total=((valor*IVA)/100)+valor; //get el control entero
	document.getElementById('inputTotal').value=total;
}