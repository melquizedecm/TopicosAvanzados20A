/*
 ************************************** 
 *Source: Programa1.js
 *Description: Initial Functions in JS: Start engine/Turn down engine
 *Date: 07/Feb/2020
 *Author: Gabriel Carcedo Rodríguez
 **************************************
 */

//CREACIÓN DE LAS FUNCIONES (ENCENDER Y APAGAR) Y DEFINIR LO QUE REALIZARÁN
function Encender()
{
    var motor = document.getElementById("motor");
    motor.innerHTML = "<img src='http://i.giphy.com/yi611GdumtsHK.gif'> ";
}

function Apagar()
{
    var motor = document.getElementById("motor");
    motor.innerHTML = "<img src='Motor.png'>";
}