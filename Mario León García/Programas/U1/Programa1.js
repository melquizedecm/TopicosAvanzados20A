/*
*****************************************
* Source: Programa1.js
* Description: Funciones iniciales en JS
* Encender un motor / Apagar un motor
* Date: 7/Feb/2020
* Author: Mario Steven León García
*****************************************
*/

function encender() {
	var motor=document.getElementById("motor")
	motor.innerHTML="<img src='on.gif'>";
}

function apagar() {
	var motor=document.getElementById("motor")
	motor.innerHTML="<img src='off.PNG'>";
}