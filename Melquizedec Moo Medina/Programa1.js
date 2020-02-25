/*
 ******************************************
 * Source: Programa1.js
 * Description: Funciones iniciales en JS
 * Encender un motor / Apagar un motor
 * Date: 7/Feb/2020
 * Author: Melquizedec Moo Medina
 ******************************************
 */

function encender() {
    var motor=document.getElementById("motor");
    motor.innerHTML=" <img src='https://i1.wp.com/i3.8000vueltas.com/2007/07/4cyl-animation.gif'> ";  
}

function apagar(){
    var motor=document.getElementById("motor");
    motor.innerHTML=" <img src='motorApagado.png'> ";  
}

