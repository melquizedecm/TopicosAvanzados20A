/* *Source:Programa1.js 
*Description: Funciones iniciales en JS *Encender un motor / Apagar motor 
*Date: 20/Feb/2020
*Author: Ivan Alejandro Arias Escobar 
*/
function CalculaIVA(){
	
	var valor=document.getElementById('inputValor').value;
	var iva= document.getElementById('inputIva').value;
	if(isNaN(valor) || isNaN (iva)){
		alert("No es numerico  el Valor")
	}
	else{
		valor=parseFloat(valor);
		iva=parseFloat(iva)
	}
	
	total=((valor*iva)/100)+valor;
	document.getElementById('inputTotal').value=total;
    alert (suma);


}