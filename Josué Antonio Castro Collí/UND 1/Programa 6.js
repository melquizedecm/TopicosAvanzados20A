/*
****************************************
* Source: 		Programa6.js 
* Description: 	Validar inputs.
* Date: 		20/Febrero/2020
* Author: 		Josue Antonio Castro Colli
****************************************
*/

function  calculaIva(){
	//Obtener valores de los inputs
	var valor = document.getElementById("inputValor").value;
	var iva = document.getElementById("inputIva").value;//get el valor del inputIva

	//validar los valores de los input
	if(isNaN(valor) || isNaN(iva)){
		alert("No es numérico el valor");
	} else{
		valor = parseFloat(valor);
		iva = parseFloat(iva);
	}

	var total = ((valor * iva ) / 100) + valor; //get el contro entero 
	document.getElementById("inputTotal").value=total;
}