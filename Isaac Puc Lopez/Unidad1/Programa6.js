/*
Source:         Program6.html
Description:    Programa que valida, maneja y utiliza inputs
Date:           20/Feb/20
Author:         Isaac Puc López
*/

function calculaIva(){
	//alert(document.getElementById('inputValor').value); //muestra el contenido del elemento llamado inputValor
	var valor=document.getElementById('inputValor').value;
	
	var iva=document.getElementById('inputIva').value/100;	//toma el valor del input y lo divide entre 100


	
	//validaciones de que los ingresos sean los requeridos
	if (isNaN(valor) || valor<0) {
		alert("El valor no es un número VALOR positivo")
		document.getElementById('inputValor').value="Escriba un número";
		correctoValor=false;
	}else{
		correctoValor=true;
	}

	if (isNaN(iva) || iva<0) {
		alert("El valor no es un número entero IVA positivo")
		document.getElementById('inputValor').value="Escriba un porcentaje";
		correctoIva=false;
	}else{
		correctoIva=true;
	}


	//verifica que los caracteres ateriores hayan sido correctos y calcula la suma total
	if (correctoIva && correctoValor) {
	var total=document.getElementById('inputTotal').value=Number(valor)+(Number(iva)*Number(valor));

	}

}