/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var calificacion1 = prompt("Escribe una calificacion numerica");
var calificacion2 = prompt("Escribe una calificacion numerica");

if (isNaN(calificacion1) || isNaN(calificacion2)) {
    alert("No son numeros");
} else {
    var suma = parseInt(calificacion1) + parseInt(calificacion2);
    alert(suma);
}

//Number.isInteger()
//isNaN()
