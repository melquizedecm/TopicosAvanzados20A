/*
 ************************************** 
 *Source: Programa6.js
 *Description: Works with the Input's and his functions & validations
 *Date: 20/Feb/2020
 *Author: Gabriel Carcedo Rodríguez
 **************************************
 */
function calculaIva()
{
	//Obtener valores de los Inputs (Valor e Iva)
	var valor = document.getElementById('inputValor').value; 
	var iva = document.getElementById('inputIva').value; 
	

	//Validar los valores de los Inputs (Valor e Iva)
	if(isNaN(valor))
		alert("El Valor no es Numérico");
	else
		valor = parseFloat(valor);
	if(isNaN(iva))
		alert("El Iva no es Numérico");
	else
		valor = parseFloat(valor);
	
	//Imprimir los resultados
	var total = ((valor*iva)/100)+valor;
	document.getElementById('inputTotal').value = total;

}