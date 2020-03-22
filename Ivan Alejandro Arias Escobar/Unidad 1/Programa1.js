/* *Source:Programa1.js 
*Description: Funciones iniciales en JS *Encender un motor / Apagar motor 
*Date: 7/Feb/2020
*Author: Ivan Alejandro Arias Escobar 
*/

function mensaje(){
	alert("Hola Mundo");
}

function encender(){
	var motor= document.getElementById("motor");
	motor.innerHTML="<img src='encendido.gif' width='500px'>"
}

function apagar(){
	var motor= document.getElementById("motor");
	motor.innerHTML="<img src='Motor_apagado.jfif' width='500px'>"
}