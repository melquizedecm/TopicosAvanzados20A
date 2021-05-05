/*
****************************************
* Source: Programa1.js 
* Description: Funciones iniciales en js
* Encender un motor / Apagar un motor 
* Date: 7/Febrero/2020
* Author: Josue Antonio Castro Colli
****************************************
*/

    function Encender (){
    	var motor = document.getElementById("motor");
    	motor.innerHTML = "<img src ='https://i1.wp.com/i3.8000vueltas.com/2007/07/4cyl-animation.gif'>";
    } 

    function Apagar () {
    	var motor = document.getElementById("motor");
    	motor.innerHTML = " <img src ='MotorApagado.jpeg'>";
    }