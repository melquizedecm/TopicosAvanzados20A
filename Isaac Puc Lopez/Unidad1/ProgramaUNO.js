/*
****************************************
*Source:ProgramaUNO.js
*Description: Funciones iniciales en JS
*Encender un motor / Apagar motor
*Date: 7/Feb/2020
*Author: Isaac Puc Lopez
****************************************
*/

function mensaje(){
	alert("Hola Mundo");
}

function encender(){
	var motor= document.getElementById("motor");
	motor.innerHTML="<img src='motor.gif' width='500px'>"
}

function apagar(){
	var motor= document.getElementById("motor");
	motor.innerHTML="<img src='motorapagado.jpeg' width='500px'>"
}